<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Step | simple PHP template engine</title>

        <?php step::setSection('style') ?>

    </head>
    <body>
    <div class="content">
        <?php step::setSection('content'); ?>
    </div>

    <div class="footer">
        <p> https://github.com/dimasdwib </p>
    </div>
    </body>
</html>
