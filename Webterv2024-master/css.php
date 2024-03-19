<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Tutorial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include_once "includes/navbar.inc.php"; ?>
<header class="yellow-font gray-background">
    <h1>CSS Tutorial</h1>
    <section class="html-css-nav">
        <ul>
            <li><a href="#introduction">Introduction to CSS</a></li>
            <li><a href="#tutorials">Tutorials</a></li>
            <li><a href="#examples">Interactive Examples</a></li>
            <li><a href="#challenges">Challenges</a></li>
            <li><a href="#resources">Resources</a></li>
        </ul>
    </section>
</header>
<main class="left">
    <section id="introduction">
        <h2>Introduction to CSS</h2>
        <p>CSS, which stands for Cascading Style Sheets, is a language used for describing the presentation of a
            document written in HTML or XML (including XML dialects like SVG or XHTML). It controls the visual aspects
            of a web page, including layout, colors, fonts, and more.</p>

        <h3>Why CSS is Important</h3>
        <p>CSS separates the content of a web page from its presentation, allowing developers to change the look and
            feel of multiple pages by modifying just one file. This makes it easier to maintain and update websites, and
            it also improves accessibility and search engine optimization.</p>

        <h3>How CSS Works</h3>
        <p>CSS works by selecting HTML elements and applying styles to them. Selectors are used to target specific
            elements, and properties are used to define the styles that should be applied. CSS rules consist of a
            selector and one or more declarations enclosed in curly braces.</p>

        <h3>CSS Versions</h3>
        <p>CSS has evolved over the years, with several versions released to add new features and improve existing ones.
            The current version is CSS3, which introduced many advanced features like animations, transitions, and
            responsive design capabilities.</p>

        <h3>Getting Started with CSS</h3>
        <p>To start using CSS, you need to create a separate CSS file or include styles directly within your HTML
            document using the <code>&lt;style&gt;</code> tag. You can then use CSS properties to customize the
            appearance of your web page.</p>

        <p>Now that you have a basic understanding of what CSS is and why it's important, let's dive into some tutorials
            to learn how to use it effectively!</p>
    </section>

    <section id="tutorials">
        <h2>Tutorials</h2>
        <p>Below are some step-by-step tutorials to help you learn CSS:</p>

        <h3>1. CSS Selectors and Basics</h3>
        <p>Learn about different types of CSS selectors and how to apply styles to HTML elements using classes, IDs, and
            element types.</p>

        <h3>2. Understanding the Box Model</h3>
        <p>Explore the CSS box model and how it affects the layout of elements on a web page. Learn about padding,
            borders, and margins.</p>

        <h3>3. Introduction to Flexbox</h3>
        <p>Discover how Flexbox can simplify the process of creating flexible layouts. Learn about flex containers and
            flex items.</p>

        <h3>4. Mastering CSS Grid Layout</h3>
        <p>Get hands-on experience with CSS Grid Layout, a powerful tool for creating complex grid-based layouts with
            ease.</p>

        <h3>5. Responsive Design Techniques</h3>
        <p>Learn how to make your website responsive by using media queries and other techniques to adapt the layout to
            different screen sizes.</p>

        <h3>6. CSS Animations and Transitions</h3>
        <p>Explore CSS animations and transitions to add interactivity and visual effects to your web pages.</p>

        <p>Each tutorial includes explanations, examples, and exercises to help reinforce your understanding of CSS
            concepts. Click on the links to get started!</p>
    </section>

    <section id="examples">
        <h2>Interactive Examples</h2>
        <p>Explore these interactive examples to see CSS in action:</p>

        <h3>1. CSS Color Picker</h3>
        <p>Experiment with different colors and color combinations using this interactive color picker. See how changing
            the color affects the appearance of various HTML elements.</p>
        <div>
            <input type="color" id="colorPicker" value="#ff0000">
            <label for="colorPicker">Choose a color</label>
        </div>
        <h3>2. CSS Box Model Demo</h3>
        <p>Visualize the CSS box model and its components (content, padding, border, margin) using this interactive
            demo. Adjust the size and spacing of the box to see how it affects the layout.</p>
        <!-- You can embed a box model demo here -->

        <h3>3. Flexbox Playground</h3>
        <p>Play around with Flexbox properties to create different layouts and arrangements of elements. Drag and drop
            elements to see how they respond to changes in flex container and flex item properties.</p>
        <!-- You can embed a Flexbox playground here -->

        <h3>4. CSS Grid Builder</h3>
        <p>Build custom grid layouts using CSS Grid Layout with this interactive tool. Specify the number of rows and
            columns, and drag elements into the grid to position them as desired.</p>
        <!-- You can embed a CSS Grid builder tool here -->

        <h3>5. Responsive Design Simulator</h3>
        <p>Test the responsiveness of your website by simulating different screen sizes and orientations. See how your
            layout adjusts to accommodate different devices.</p>
        <!-- You can embed a responsive design simulator here -->

        <p>These interactive examples provide a hands-on way to explore CSS concepts and techniques. Click on the links
            to start experimenting!</p>
    </section>
    <section id="challenges">

        <h3>1. CSS Selector Challenge</h3>
        <p>Given a specific HTML structure, write CSS selectors to target specific elements and apply the required
            styles. For example, style all paragraph elements with a class of "highlight" to have a yellow
            background.</p>

        <h3>2. Layout Challenge</h3>
        <p>Create a specific layout using CSS, following a provided design mockup or description. Practice positioning
            elements using techniques such as Flexbox or CSS Grid to achieve the desired layout.</p>

        <h3>3. Responsive Design Challenge</h3>
        <p>Take a static webpage and make it responsive to different screen sizes. Use media queries and other
            responsive design techniques to ensure that the layout adapts seamlessly on devices of varying widths.</p>

        <h3>4. Animation Challenge</h3>
        <p>Create a CSS animation to add visual interest to a webpage. Experiment with keyframes, transitions, and other
            animation properties to achieve effects like fading, sliding, or rotating elements.</p>

        <h3>5. Advanced CSS Challenge</h3>
        <p>Tackle a more complex CSS challenge, such as creating a custom dropdown menu, implementing a sticky header,
            or building a modal popup window. Push your CSS skills to the next level!</p>

        <p>These challenges will help reinforce your understanding of CSS concepts and improve your ability to apply
            them in real-world scenarios. Dive in and test your skills!</p>
    </section>
    <section id="resources">
        <h2>Resources</h2>
        <p>Explore these additional resources to further enhance your CSS knowledge:</p>
        <h3>1. TryHard33 CSS Blog</h3>
        <p>Visit the TryHard33 CSS Blog for in-depth tutorials, tips, and tricks on mastering CSS. Learn from industry
            experts and stay updated with the latest trends in web design.</p>
        <a href="https://tryhard33cssblog.com">Visit TryHard33 CSS Blog</a>
        <h3>2. Meaowuwuka CSS Framework</h3>
        <p>Meet Meaowuwka, the magical cat who helps you learn CSS and pass the university subject called "Web tervezés".
            Discover the Meaowuwuka CSS Framework, a lightweight and flexible framework for building beautiful and
            responsive websites. Explore its features and documentation to streamline your development process.</p>
        <a href="https://meaowuwukacss.com">Explore Meaowuwuka CSS Framework</a>
    </section>
    <div>
        <a class="left btn" href="index.php">&#10094;&#10094; Home</a>
        <br>
        <a class="left btn" href="html.php">&#10094; Previous</a>
        <a class="right btn" href="javascript.php">Next &#10095;</a>
    </div>
</main>
<?php include_once "includes/footer.inc.php"; ?>
</body>
</html>
