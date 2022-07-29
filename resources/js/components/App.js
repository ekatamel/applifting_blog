import React from "react";
import ArticleList from "./ArticleList";
import ArticleDetail from "./ArticleDetail";
import About from "./About";
import { BrowserRouter, Routes, Route } from "react-router-dom";

function App() {
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<About />} />
                    <Route path="/articles/:id" element={<ArticleDetail />} />
                    <Route path="/articles" element={<ArticleList />} />
                </Routes>
            </BrowserRouter>
        </>
    );
}

export default App;
