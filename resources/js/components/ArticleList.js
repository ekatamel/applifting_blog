import Article from "./Article";
import axios from "axios";
import { useState, useEffect } from "react";
import React from "react";
import ReactDOM from "react-dom/client";

function ArticleList() {
    const [articles, setArticles] = useState(null);

    // Load all articles
    const loadArticles = async () => {
        const response = await axios.get("/api/articles");
        const responseData = response.data;
        setArticles(responseData);
    };

    useEffect(() => {
        loadArticles();
    }, []);

    return (
        <div
            className="articles articles__container"
            data-testid="article-list"
        >
            <h1 className="article__maintitle">Recent articles</h1>
            {articles &&
                articles.map((article, index) => {
                    return (
                        <Article
                            data-testid="resolved"
                            key={index}
                            data={article}
                        />
                    );
                })}
        </div>
    );
}

export default ArticleList;
