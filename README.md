## About this project

Project URL: blog.ekaterinamelnichuk.com
Applifting Blog was made in order to fulfill requirements of the assignment as part of job application process.

The basic user functionality of the website includes:

-   Viewing and reading published articles
-   Reviewing list of similar articles
-   Log-in with user credentials
-   Creating, editing, publishing or deleting articles (for authorized users only)
-   Using markdown text editor to create article content (for authorized users only)
-   Adding images for the article (for authorized users only)
-   Commenting and voting on comments (for authorized users only)

## Tech stack

For the project I used following technologies:

### Backend

PHP & Laravel:

-   setting up database
-   creating DB migrations
-   defining DB models and relationships
-   seeding the database with article, comments, votes,image, user data
-   exposing API endpoints for frontend usage
-   user authentication (Fortify)
-   routing for admin interface
-   returning admin pages (Laravel blade templates)

### Frontend

React:

-   rendering components (Article List, Article, Article detail, Comment etc.)
-   making AJAX requests (calling API endpoints) to GET articles data, article details, comments for article and to POST user comments and comment votes
-   using useState, useEffect, useParams, useRef
-   routing for public part of the website

Additional React libraries:

-   axios - for making AJAX requests
-   Moment - for formatting date retrieved from DB
-   ReactMarkdown - translating markdown into HTML tags
-   markdownToTxt - translating markdown to plain text
-   Toast-ui as markdown editor

Javascript:

-   markdown.js -> getting markdown content from the editor and adding to a hidden form element to be send with form submit
-   preview.js -> showing preview of the uploaded image to the article

Sass:

-   writing nested SCSS code, using mixins for repeated styles

Testing:

-   Jest & react-testing-library - simple unit tests aiming to check proper component rendering

Compiling:

-   Babel
-   Webpack

## API

API endpoints for the frontend are defined in ApiController.php file. Routes for these endpoints are provided in api.php.

API documentation is available at : https://app.swaggerhub.com/apis-docs/KATERINKAMELNICHUK/Blog/1.0.0

## Possible impovements

-   Create article form - retrieving old image from previous request, if form validation fails (currently the user has to upload the same image again)
-   Enable outside registrations - currenty outside registration are disabled and only existing registered users can login
-   Implement nested comments
-   Add fulltext search of related articles based on the main article keyword. Currenly keyword "cat" is hardcoded inside API URL (/articles/{keyword}) and fulltext search is done in articles title. As a potential future impovement, related articles could be retrieved dynamically based on article categories/tags keywords
-   Adding admin homepage with statistics about user activity (number of blog posts, user engagement etc.)
-   Implement articles sorting alphabetically or based on the date (https://blog.ekaterinamelnichuk.com/admin/articles)
-   Disable voting on own comments

## Domain & hosting

The website is hosted on Hostinger hosting provider on my personal domain ekaterinamelnichuk.com (blog subdomain).

## Domain & hosting

User accounts (for article creation/publication) are available for testing upon request.
