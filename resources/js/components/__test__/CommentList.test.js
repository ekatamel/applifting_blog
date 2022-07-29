import { render, screen, cleanup } from "@testing-library/react";
import "@testing-library/jest-dom";
import React from "react";
import ReactDOM from "react-dom/client";
import CommentList from "../CommentList";

afterEach(() => {
    cleanup();
});

test("should render CommentList component", () => {
    const data = 1;
    render(<CommentList articleId={data} />);
    const commentListElement = screen.getByTestId("comment-list");
    expect(commentListElement).toBeInTheDocument();
});
