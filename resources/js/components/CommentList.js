import React from "react";
import ReactDOM from "react-dom/client";
import { useState, useEffect } from "react";
import axios from "axios";
import Comment from "./Comment";

function CommentList({ articleId }) {
    const [comments, setComments] = useState(null);
    const [commentText, setCommentText] = useState("");
    const [errors, setErrors] = useState(null);

    const loadComments = async () => {
        const response = await axios.get(`/api/articles/${articleId}/comments`);
        const responseData = response.data;
        setComments(responseData);
        console.log(responseData);
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(`/api/comments`, {
                article_id: articleId,
                user_id: loggedUser.id,
                content: commentText,
            });
            loadComments();
            setCommentText("");
        } catch (error) {
            console.log(error.response);
            setErrors(error.response.data.errors);
        }
    };

    useEffect(() => {
        loadComments();
    }, []);

    return (
        <>
            {comments && (
                <h2 className="comments__headline">
                    Comments ({comments.length})
                </h2>
            )}
            <div className="comments" data-testid="comment-list">
                <div className="comment">
                    {typeof loggedUser == "undefined" ? (
                        <>
                            <div className="comment__placeholder">?</div>
                            <div className="comment__content">
                                <input
                                    className="comment__input"
                                    type="text"
                                    placeholder="You have to be logged in in order to leave a comment"
                                    disabled
                                />
                            </div>
                        </>
                    ) : (
                        <>
                            <img
                                className="comment__avatar"
                                src={loggedUser.path}
                                alt={loggedUser.name}
                            />
                            <div className="comment__content">
                                <form
                                    action="/api/comments"
                                    method="post"
                                    onSubmit={handleSubmit}
                                >
                                    <input
                                        className="comment__input"
                                        type="text"
                                        placeholder="Join the discussion"
                                        onChange={(e) => {
                                            setCommentText(e.target.value);
                                        }}
                                        value={commentText}
                                        required
                                    />
                                </form>
                                {errors &&
                                    Object.values(errors).map((value) => {
                                        return (
                                            <div className="message__error">
                                                {value}
                                            </div>
                                        );
                                    })}
                            </div>
                        </>
                    )}
                </div>
                {comments &&
                    comments.map((comment, index) => {
                        return (
                            <Comment
                                key={index}
                                comment={comment}
                                votesValue={comment.votes}
                                loadComments={loadComments}
                            />
                        );
                    })}
            </div>
        </>
    );
}

export default CommentList;
