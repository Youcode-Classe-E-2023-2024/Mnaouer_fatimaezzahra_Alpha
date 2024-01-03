<!doctype html>
<html lang="en">
<head>
<!--    --><?php //include_once 'includes/header.php' ?>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="index.php?page=register" method="post">
<!--        --><?//xml version="1.0" encoding="utf-8"?><!--<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve"><g><path d="M88.66,3.37h21.52L97.13,62c-2.51,11.15-4.23,17.97-5.18,20.52c3.37,15.51,8.3,23.25,14.73,23.25 c7.6,0,11.54-5.27,11.8-15.81h4.41c-0.26,9.81-2.03,17.76-5.36,23.85c-3.33,6.05-7.69,9.07-13.09,9.07c-4.45,0-7.78-1.81-9.98-5.44 c-2.16-3.63-4.54-11.06-7.04-22.25c-8.77,18.45-23.12,27.7-42.99,27.7c-13.61,0-24.37-5.31-32.41-15.9C4.02,96.39,0,81.23,0,61.48 C0,42.08,4.36,27,13.13,16.2C21.91,5.4,32.45,0,44.76,0c8.68,0,15.81,3.07,21.39,9.25c5.57,6.14,10.5,16.2,14.78,30.11L88.66,3.37 L88.66,3.37z M77.51,53.01c-3.93-13.52-8.38-24.11-13.26-31.76c-4.88-7.6-10.72-11.41-17.54-11.41 c-15.42,0-23.12,18.06-23.12,54.14c0,34.26,7.39,51.37,22.12,51.37c12.79,0,22.25-15.12,28.39-45.37L77.51,53.01L77.51,53.01z"/></g></svg>        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>-->
        <img src="./assets/css/alpha-icon.png" style="width: 100px; height: 100px" alt="hahh">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
            <label for="floatingUsername">Username</label>
        </div>

        <div class="form-floating">
            <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        <a href="index.php?page=login" class="w-100 btn btn-lg btn-success mt-2" type="button">Sign in</a>
        <a href="index.php?page=home" class="w-100 btn btn-lg btn-secondary mt-2" type="button">Back</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
    </form>
</main>

</body>
</html>
