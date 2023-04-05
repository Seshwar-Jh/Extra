<!DOCTYPE html>
<html>
<head>
  <title>Student Login - Extra Credit Course Portal</title>
  <link rel="stylesheet" type="text/css" href="stud_login.css">
</head>
<body>
  <div class="container">
    <h1>Student Login</h1>
    <div class="shadow-box">
      <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit" class="login-btn">Login</button>

        <div class="options">
          <a href="stud_signup.php">Sign Up</a>
          <a href="forgot-password.php">Forgot Password</a>
        </div>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
