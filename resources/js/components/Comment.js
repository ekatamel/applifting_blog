import React from "react";
import ReactDOM from "react-dom/client";
import { useState } from "react";
import axios from "axios";
import Moment from "react-moment";

function Comment({ comment, votesCount, loadComments }) {
    const { content, created_at: date, user, votes, id } = comment;

    const [votesNumber, setVotesNumber] = useState(votesCount);
    const [errors, setErrors] = useState(null);
    const [loginError, setLoginError] = useState(null);

    return (
        <div className="comment">
            <img className="comment__avatar" src={user.path} alt={user.name} />
            <div className="comment__content">
                <p className="comment__user">
                    {user.name}
                    <span className="comment__time">
                        <Moment fromNow>{date}</Moment>
                    </span>
                </p>
                <p className="comment__text">{content}</p>
                <div className="comment__voting">
                    <span className="comment__votes">
                        {votesCount > 0 ? `+${votesCount}` : votesCount}
                    </span>
                    <img
                        className="comment__arrow"
                        src="/images/icons/arrow-up.png"
                        alt="Arrow icon"
                        onClick={async () => {
                            if (typeof loggedUser == "undefined") {
                                setLoginError(
                                    "You have to be logged in order to vote"
                                );
                            } else {
                                try {
                                    const response = await axios.post(
                                        `/api/comments/${id}/votes`,
                                        {
                                            votes: parseInt(votes) + 1,
                                            user_id: loggedUser.id,
                                            value: 1,
                                        }
                                    );
                                    setVotesNumber(votesNumber + 1);
                                    loadComments();
                                } catch (error) {
                                    setErrors(error.response.data.errors);
                                }
                            }
                        }}
                    />
                    <img
                        className="comment__arrow"
                        src="/images/icons/arrow-down.png"
                        alt="Arrow icon"
                        onClick={async () => {
                            if (typeof loggedUser == "undefined") {
                                setLoginError(
                                    "You have to be logged in order to vote"
                                );
                            } else {
                                try {
                                    const response = await axios.post(
                                        `/api/comments/${id}/votes`,
                                        {
                                            votes: parseInt(votes) - 1,
                                            user_id: loggedUser.id,
                                            value: -1,
                                        }
                                    );
                                    setVotesNumber(votesNumber - 1);
                                    loadComments();
                                } catch (error) {
                                    setErrors(error.response.data.errors);
                                }
                            }
                        }}
                    />
                </div>
                {loginError && (
                    <div className="message__error">{loginError}</div>
                )}
                {errors &&
                    Object.values(errors).map((value) => {
                        return <div className="message__error">{value}</div>;
                    })}
            </div>
        </div>
    );
}

export default Comment;
