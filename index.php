<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Log In </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container my-5">
    <form action="conf_user.php" method="post">
      <h1 style="text-align : center">Log In</h1>
      <div class="form-group">
        </label>Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        </label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
      </div>


      <br><a href="forgot.php">Forgot Password</a><br><br>

      <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
      <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>