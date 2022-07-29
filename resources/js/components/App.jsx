import React from "react";
import ArticleList from "./ArticleList";
import ArticleDetail from "./ArticleDetail";
import { BrowserRouter, Routes, Route } from "react-router-dom";

function App() {
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route path="/articles/:id" element={<ArticleDetail />} />
                    <Route path="/articles" element={<ArticleList />} />
                </Routes>
            </BrowserRouter>
        </>
    );
}

export default App;
