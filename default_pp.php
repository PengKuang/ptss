<!DOCTYPE html>
<lang="en">
<html>
  <head>
    <title>Post Traumatic Stress Scale - Create User ID</title>
    <link rel-"stylesheet" href="css/default.css">
    <?= require '_head.php';?>
  </head>
  <body>
    <?= require '_header.php';?>
    <div class="container">
      <div>
          <p>Thursday, 15 February 2018</p>
          <p>Quickscore Login Successful</p>
      </div>

      <h2>Create UserID for client</h2>

      <ul>
          <li>You need to create a unique UserID for the client. This is your identification for the client. </li>
          <li>It can consist of any grouping of numbers and letter but no spaces. (e.g. KJM001 )</li>
      </ul>

      <form>
          <div>
              <p>Please create a Client UserID</p>
              <label>Client UserID</lable>
              <input> </input>
          </div>

          <div>
              <button>Continue</button>
              <button>Clear</button>
          </div>
      </form>
    </div>

    <?= require '_footerscript.js';?>
  </body>
</html>