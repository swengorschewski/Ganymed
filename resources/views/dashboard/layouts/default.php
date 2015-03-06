<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ganymed-Dashboard</title>

    <!-- build:css -->
    <link rel="stylesheet" href="/assets/dashboard/css/styles.css"/>
    <!-- endbuild -->

    <!-- build:livereload -->
    <script src="//localhost:35729/livereload.js"></script>
    <!-- endbuild -->
</head>
<body>

<nav class="panel shadow-z1">
    <h1 class="panel-brand">Ganymed-Dashboard</h1>

    <form class="panel-options" action="/logout" method="post">
        <button class="panel-button ripple">Logout</button>
    </form>
</nav>

<div class="content">
    <?php echo $renderedTemplate ?>
</div>

<!-- build:js -->
<script type="application/javascript" src="/assets/dashboard/js/app.js"></script>
<!-- endbuild -->
</body>
</html>