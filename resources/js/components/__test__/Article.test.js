import { render, screen, cleanup } from "@testing-library/react";
import "@testing-library/jest-dom";
import React from "react";
import ReactDOM from "react-dom/client";
import Article from "../Article";

afterEach(() => {
    cleanup();
});

test("should render Article component", () => {
    const data = {
        id: 2,
        user_id: 1,
        title: "Wet vs. Dry Cat Food: Which is Better?",
        perex: "When it comes to cat food, there are so many options. Loving cat owners must choose from a variety of different flavors, decide between wet and dry, among many other considerations.",
        content:
            "If you’ve wondered which is better when it comes to wet vs. dry cat food, they’re both excellent choices. Just make sure the food you select is 100 percent complete and balanced for your cat’s age and life stage. While some cats (and cat owners) prefer one over the other, the best option may be to feed your cat both.",
        created_at: "2016-07-16T08:00:00.000000Z",
        updated_at: "2022-07-29T13:56:23.000000Z",
        user: {
            id: 1,
            name: "Elisabeth Strain",
            email: "elisabeth@strain.com",
            role: "admin",
            email_verified_at: null,
            two_factor_secret: null,
            two_factor_recovery_codes: null,
            created_at: "2022-07-27T17:17:13.000000Z",
            updated_at: "2022-07-27T17:20:33.000000Z",
            path: "/images/avatars/strain.png",
        },
        image: {
            id: 2,
            article_id: 2,
            path: "/images/articles/kitten-grass.png",
            created_at: "2022-07-29T13:56:29.000000Z",
            updated_at: "2022-07-29T13:56:29.000000Z",
        },
        comments: [],
    };
    render(<Article data={data} />);
    const articleElement = screen.getByTestId("article");
    expect(articleElement).toBeInTheDocument();
});
