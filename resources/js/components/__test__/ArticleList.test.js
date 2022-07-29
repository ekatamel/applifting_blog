import React from "react";
import ReactDOM from "react-dom/client";
import {
    render,
    screen,
    cleanup,
    waitForElement,
    getByTestId,
} from "@testing-library/react";
import "@testing-library/jest-dom";
import "@testing-library/jest-dom/extend-expect";

import ArticleList from "../ArticleList";

afterEach(() => {
    cleanup();
});

test("should render ArticleList component", () => {
    render(<ArticleList />);
    const articleListElement = screen.getByTestId("article-list");
    expect(articleListElement).toBeInTheDocument();
});
