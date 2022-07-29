import ReactMarkdown from "react-markdown";
import markdownToTxt from "markdown-to-txt";

function RelatedArticle({ title, perex, id }) {
    return (
        <a className="related__link" href={"/articles/" + id}>
            <div className="related__article">
                <h3 className="related__title">{title}</h3>
                <p className="related__perex">{markdownToTxt(perex)}</p>
            </div>
        </a>
    );
}

export default RelatedArticle;
