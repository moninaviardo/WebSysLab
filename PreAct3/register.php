<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Viardo Blog</title>

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="assets/brand/logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Create account</h1>

    <div class="form-floating">
      <input name="username" type="username" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">username</label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">password</label>
    </div>

    <div class="form-floating">
      <input name="firstname" type="firstname" class="form-control" id="floatingInput" placeholder="First name">
      <label for="floatingInput">firstname</label>
    </div>

    <div class="form-floating">
      <input name="lastname" type="lastname" class="form-control" id="floatingInput" placeholder="Last name">
      <label for="floatingInput">lastname</label>
    </div>

    <div class="form-floating">
      <input name="age" type="age" class="form-control" id="floatingInput" placeholder="age">
      <label for="floatingInput">age</label>
    </div>

    <div class="form-floating">
      <input name="birthday" type="birthday" class="form-control" id="floatingInput" placeholder="birthday">
      <label for="floatingInput">birthday</label>
    </div>

    <div class="form-floating">
      <input name="address" type="address" class="form-control" id="floatingInput" placeholder="address">
      <label for="floatingInput">address</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input name="terms" type="checkbox" value="1"> I accept the terms and conditions
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>

    <div class="my-2"> Already have an account? <a href="login.php"> Login here!</a></div>

    <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
  </form>
</main>