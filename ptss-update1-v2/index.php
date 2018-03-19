 <?php session_start();?>

<!DOCTYPE html>

<lang="en">

<html>

  <head>

    <?php require './partial/_head.php';?>

    <title>
      Post Traumatic Stress Scale - Create User ID</title>
    <link rel-"stylesheet" href="css/index.css">
    
  </head>

  <body>

    <?php require './partial/_header.php';?>

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

      <form id="clientform" acition="controller/client_controller.php" method="POST" >
          <div>
              <p>Please create a Client UserID</p>
              <label>Client UserID  </lable>
              <input type="text" name="clientid" id="clientid"/>
          </div>

          <div class="row">
              <a href="demographics.php" class="btn btn-primary col-sm-2" type="submit">
                Continue
              </a>
 <!--              <button class="btn btn-primary col-sm-2" type="submit" name="submit" value="submit">
                Continue
              </button> -->
              <button class="btn btn-light col-sm-2">Clear</button>
          </div>

      </form>

    </div>

    <br>

    <?php require './partial/_footer.php';?>
    <?php require './js/_footerscript.js';?>

  </body>

</html>