<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- build:css -->
    <link rel="stylesheet" href="/assets/dashboard/css/styles.css"/>
    <!-- endbuild -->

    <!-- build:livereload -->
    <script src="//localhost:35729/livereload.js"></script>
    <!-- endbuild -->
</head>
<body>

<div class="center-content">
    <form class="login-form shadow-z1" action="/login" method="post">

        <h1 class="slim">Sign In</h1>

        @if($session->hasErrors())
            <div class="errors">
                <ul>
                    @foreach($session->getErrors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input-group">
            <input type="text" name="email" required="" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
        </div>

        <div class="input-group">
            <input type="password" name="password" required="" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Password</label>
        </div>

        <button class="button">
            Submit
            <paper-ripple></paper-ripple>
        </button>
    </form>
</div>

<!-- build:js -->
<script type="application/javascript" src="/assets/dashboard/js/app.js"></script>
<!-- endbuild -->
</body>
</html>