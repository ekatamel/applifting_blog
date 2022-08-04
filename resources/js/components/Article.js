import React from "react";
import ReactDOM from "react-dom/client";
import Moment from "react-moment";

function Article({ data }) {
    const {
        created_at: publishDate,
        perex,
        title,
        user,
        image,
        comments,
        id,
    } = data;
    console.log(image);

    return (
        <div className="article" data-testid="article">
            {image ? (
                <div
                    className="article__image"
                    style={{
                        backgroundImage: `url(${image.path})`,
                        backgroundSize: "cover",
                        backgroundPosition: "center",
                    }}
                ></div>
            ) : (
                <div className="article__image article__image--blank">
                    <p>No image available</p>
                </div>
            )}

            <div className="article__description">
                <a
                    className="article__link article__link--black"
                    href={`/articles/${id}`}
                >
                    <h2 className="article__title">{title}</h2>
                </a>
                <p className="article__details">
                    {user.name}
                    <span>&#183;</span>
                    <Moment format="MM/DD/YY">{publishDate}</Moment>
                </p>

                <p className="article__perex">{perex}</p>
                <a className="article__link" href={`/articles/${id}`}>
                    Read whole article
                </a>
                <p className="article__comments">{comments.length} comments</p>
            </div>
        </div>
    );
}

export default Article;
