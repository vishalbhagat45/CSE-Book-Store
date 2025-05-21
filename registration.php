<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Sign Up </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container my-5">
    <form action="add_user.php" method="post">
      <h1 style="text-align : center">Registration</h1>
      <div class="form-group">
        </label> Name</label>
        <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off">
      </div>
      <div class="form-group">
        </label>email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        </label>Mobile</label>
        <input type="text" class="form-control" placeholder="Mobile number" name="mobile" autocomplete="off">
      </div>
      <div class="form-group">
        </label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
      </div>
      <div class="form-group">
        </label>Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" autocomplete="off">
      </div><br>




      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <p>Already have an account? <a href="index.php">Login Now</a></p>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>