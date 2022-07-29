import { render, screen, cleanup } from "@testing-library/react";
import "@testing-library/jest-dom";
import React from "react";
import ReactDOM from "react-dom/client";
import About from "../About";

afterEach(() => {
    cleanup();
});

test("should render About component", () => {
    render(<About />);
    const aboutElement = screen.getByTestId("about");
    expect(aboutElement).toBeInTheDocument();
});
