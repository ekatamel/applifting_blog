import Article from "./Article";
import axios from "axios";
import { useState, useEffect } from "react";

function ArticleList() {
    const [articles, setArticles] = useState(null);

    const loadArticles = async () => {
        const response = await axios.get("/api/articles");
        const responseData = response.data;
        setArticles(responseData);
        // console.log(responseData);
    };

    useEffect(() => {
        loadArticles();
    }, []);

    return (
        <div className="articles articles__container">
            <h1 className="article__maintitle">Recent articles</h1>
            {articles &&
                articles.map((article, index) => {
                    return <Article key={index} data={article} />;
                })}
        </div>
    );
}

export default ArticleList;
