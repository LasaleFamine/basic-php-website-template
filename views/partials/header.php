<!DOCTYPE html>

<html>

    <head>
        <!-- NOTE: Insert your OG tag here -->

        <?php if (isset($title)): ?>
            <title>YourWebsite.it: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>YourWebsite.it</title>
        <?php endif ?>

        <!-- NOTE: css here -->
        <link href="/css/app.css" rel="stylesheet"/>

    </head>

    <body>

        <div class="container">
            <div id="top">
                <div>
                    <a href="/"><img src="https://godev.space/images/godev-icon.png"/></a>
                </div>
                    <ul class="nav nav-pills">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
            </div>

            <div id="middle">
