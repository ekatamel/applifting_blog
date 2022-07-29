import React from "react";
import ReactDOM from "react-dom/client";
import { useState, useEffect, useRef } from "react";
import axios from "axios";
import Moment from "react-moment";
import useFirstRender from "./FirstRender";

function Comment({ comment, votesCount, loadComments }) {
    const { content, created_at: date, user, votes, id } = comment;
    const [votesNumber, setVotesNumber] = useState(votes);
    const [voteValue, setVoteValue] = useState(null);
    const [errors, setErrors] = useState(null);
    const [loginError, setLoginError] = useState(null);

    const firstRender = useFirstRender();

    const sendVotes = async () => {
        try {
            const response = await axios.post(`/api/comments/${id}/votes`, {
                votes: votesNumber,
                user_id: loggedUser.id,
                value: voteValue,
            });
            loadComments();
        } catch (error) {
            // console.log(error.response);
            setErrors(error.response.data.errors);
        }
    };

    // useFirstRender();

    useEffect(() => {
        if (!firstRender) {
            sendVotes();
        }
    }, [votesNumber]);

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
                        onClick={() => {
                            if (typeof loggedUser == "undefined") {
                                setLoginError(
                                    "You have to be logged in to vote"
                                );
                            } else {
                                setVotesNumber(votesNumber + 1);
                                setVoteValue(1);
                            }
                        }}
                    />
                    <img
                        className="comment__arrow"
                        src="/images/icons/arrow-down.png"
                        alt="Arrow icon"
                        onClick={() => {
                            setVotesNumber(votesNumber - 1);
                            setVoteValue(-1);
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
