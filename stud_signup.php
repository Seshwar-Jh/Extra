<!DOCTYPE html>
<html>
<head>
  <title>Student signup - Extra Credit Course Portal</title>
  <link rel="stylesheet" type="text/css" href="stud_signup.css">
</head>
<div class="signup-container">
  <div class="shadow-box">
    <h2>Sign Up</h2>
    <form action="submit.php" method="post" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <input type="text" id="department" name="department" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="">--Select--</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input type="tel" id="mobile" name="mobile" required>
      </div>
      <div class="form-group">
        <label for="uid">UID</label>
        <input type="text" id="uid" name="uid" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </div>
</div>
