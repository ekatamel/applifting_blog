import { useParams } from "react-router-dom";
import axios from "axios";
import { useState, useEffect } from "react";
import Moment from "react-moment";
import RelatedArticle from "./RelatedArticle";
import CommentList from "./CommentList";
import ReactMarkdown from "react-markdown";

function ArticleDetail() {
    const { id } = useParams();

    const [article, setArticle] = useState(null);
    const [relatedArticles, setRelatedArticles] = useState(null);

    const loadArticle = async () => {
        const response = await axios.get(`/api/articles/${id}`);
        const responseData = response.data;
        setArticle(responseData);
        // console.log(responseData);
    };

    const loadRelatedArticles = async () => {
        const response = await axios.get(`/api/articles/cat`);
        const responseData = response.data;
        setRelatedArticles(responseData);
        // console.log(responseData);
    };

    useEffect(() => {
        loadArticle();
        loadRelatedArticles();
    }, []);

    return (
        <div className="article__main">
            <div className="article__container">
                {article && (
                    <>
                        <h1 className="article__maintitle">{article.title}</h1>
                        <p className="article__details article__details--small">
                            {article.user.name}
                            <span>&#183;</span>
                            <Moment format="MM/DD/YY">
                                {article.created_at}
                            </Moment>
                        </p>
                        {article.image ? (
                            <div
                                className="article__image article__image--wide"
                                style={{
                                    backgroundImage: `url(${article.image.path})`,
                                    backgroundSize: "cover",
                                    backgroundPosition: "center",
                                }}
                            ></div>
                        ) : (
                            <div className="article__image article__image--wide article__image--blank">
                                <p>No image available</p>
                            </div>
                        )}
                        {/* <p className="article__content">{article.content}</p> */}
                        <p className="article__content">
                            <ReactMarkdown>{article.content}</ReactMarkdown>
                        </p>
                    </>
                )}
            </div>
            <div className="related">
                <h2 className="related__headline">Related articles</h2>
                {relatedArticles &&
                    relatedArticles.map((art, i) => {
                        return (
                            <RelatedArticle
                                key={i}
                                title={art.title}
                                perex={art.perex}
                                id={art.id}
                            />
                        );
                    })}
            </div>
            <div className="comments__container">
                {article && (
                    <>
                        <CommentList articleId={article.id} />
                    </>
                )}
            </div>
        </div>
    );
}

export default ArticleDetail;
