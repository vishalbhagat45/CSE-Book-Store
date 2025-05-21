<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Forgot Password </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container my-5">
    <form action="update_pass.php" method="post">
      <h1 style="text-align : center">Reset Password</h1>
      <div class="form-group">
        </label>New Password</label>
        <input type="password" class="form-control" placeholder="New Password" name="password" autocomplete="off">
      </div>
      <div class="form-group">
        </label>Confirm New Password</label>
        <input type="password" class="form-control" placeholder="Confirm New Password" name="cpassword" autocomplete="off">
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Forgot Password</button>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
