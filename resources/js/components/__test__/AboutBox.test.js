import { render, screen, cleanup } from "@testing-library/react";
import "@testing-library/jest-dom";
import React from "react";
import ReactDOM from "react-dom/client";
import AboutBox from "../AboutBox";

afterEach(() => {
    cleanup();
});

test("should render AboutBox component", () => {
    const data = {
        imageUrl: "/images/general/article-list.png",
        title: "Read articles on cat topics",
        activities: [
            "View latest publications",
            "Read and learn new facts",
            "Find out more about cats",
            "Start understanding your cat behavior",
        ],
        link: "/articles",
    };
    render(<AboutBox data={data} />);
    const aboutBoxElement = screen.getByTestId("about-box");
    expect(aboutBoxElement).toBeInTheDocument();
});
