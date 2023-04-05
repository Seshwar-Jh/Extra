<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Extra Credits Course Portal - Dashboard</title>
  <link rel="stylesheet" href="dash.css">
  <script src="dashboard.js"></script>
</head>
<body>
  <!-- Navigation Bar -->
  <div class="navbar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Courses</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <!-- Shadowed Cards -->
  <div class="card-container">
    <div class="card">
      <h3>Total Credits</h3>
      <p id="totalCredits">0</p>
    </div>
    <div class="card">
      <h3>Credits Earned</h3>
      <p id="earnedCredits">0</p>
    </div>
    <div class="card">
      <h3>Credits Remaining</h3>
      <p id="remainingCredits">0</p>
    </div>
    <div class="card">
      <h3>Documents Uploaded</h3>
      <p id="uploadedDocs">0</p>
    </div>
  </div>

  <!-- Course Display and Certificate Upload Section -->
  <div class="course-section">
    <h2>Courses</h2>
    <div class="course-list">
      <!-- Course 1 -->
      <div class="course">
        <div class="course-details">
          <h3>Course 1</h3>
          <p>Course Description</p>
        </div>
        <div class="course-certificate">
          <h3>Upload Certificate</h3>
          <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="certificate">
            <input type="submit" value="Upload">
          </form>
        </div>
      </div>

      <!-- Course 2 -->
      <div class="course">
        <div class="course-details">
          <h3>Course 2</h3>
          <p>Course Description</p>
        </div>
        <div class="course-certificate">
          <h3>Upload Certificate</h3>
          <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="certificate">
            <input type="submit" value="Upload">
          </form>
        </div>
      </div>

      <!-- Add more courses here -->
    </div>
  </div>
</body>
</html>
