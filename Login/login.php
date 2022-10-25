<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LTMS LOGIN</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    
  </script>
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form method="post" action="logincontroller.php">
      <div class="txt_field">
        <input type="text" id="username" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" id="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div>
        <?php if(isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
          </div>          
      </div>
      <?php }  ?>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="register.php">Signup</a>
      </div>
    </form>
  </div>

</body>

</html>