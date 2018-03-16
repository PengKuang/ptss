<!DOCTYPE html>

<lang="en">

<html>

  <head>

    <title>Post Traumatic Stress Scale - Create User ID</title>
    <link rel-"stylesheet" href="css/header.css">
    <link rel-"stylesheet" href="css/index.css">
    <?php require '_head_new.php';?>

  </head>

  <body>

    <?php require '_header_new.php';?>

    <div class="container content" max-width="1220px">
      
      <div>
          <p id="login-info">Quickscore Login Successful</p>
          <p id="time-info"><?php echo date('l, jS F Y, h:m A, T P'); ?></p>
      </div>

      <h3>Create UserID for client</h3>

      <ul>
          <li>
            You need to create a unique UserID for the client. This is your identification for the client. 
          </li>
          <li>
            It can consist of any grouping of numbers and letter but no spaces. (e.g. KJM001)
          </li>
      </ul>

      <form id="clientform" acition="submit_16032018.php" method="POST" >
          <div>
              <p>Please create a Client UserID</p>
              <label>Client UserID  </lable>
              <input type="text" name="clientid" id="clientid"/>
          </div>

          <div class="row">
              <a href="demographics_16032018.php" class="btn btn-primary" type="submit">
                Continue
              </a>
              <button class="btn btn-light">Clear</button>
          </div>

      </form>

    </div>

    <br>

    <?php require '_footer.php';?>
    <?php require '_footerscript.js';?>

  </body>

</html>