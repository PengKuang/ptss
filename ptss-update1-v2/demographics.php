<!DOCTYPE html>
  <head>
    <title>Post Traumatic Stress Scale - Demographics</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="PTSS Demographics Form">
    <meta name="keywords" content="PTSS Demographics">
    <?php require './partial/_head.php';?>
  </head>

  <body>
  <?php require './partial/_header.php';?>
  <div class="content container" max-width="1220px">

  <!--assessment form-->
  <form action="section1.php" method="POST" id="ptss-form-section1">
  <!-- ids for the ptss assessment -->
<!--   <input type="hidden" name="clientid" value="">
  <input type="hidden" name="candidateid" value="">
  <input type="hidden" name="answerid" value=""> -->

  <!-- assessment date -->
    <div>
      <lable for="dateassessed">
        Date Assessed: <?php echo date('d-m-Y'); ?>
      </lable>
    </div>
    
    <br>

    <p>1 of 5 steps</p>
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:20%">
      20%
    </div>
    <br>

  <!-- demographics data -->
    <div>
      <h4>Demographics</h4>
      <div class="row">

        <div class="col-sm-5">
          <lable for="fname">First Name: </lable>
          <div>
            <input class="form-control" type="text" name="fname" placeholder="first name" requried>
          </div>
        </div>

        <div class="col-sm-5">
          <lable for="lname">Last Name: </lable>
          <div>
            <input class="form-control" type="text" name="lname" placeholder="last name" requried>
          </div>
        </div>
        
      </div>

      <lable for="dob">Date of Birth: </lable>
      <div class="input-group date">
        <!--input type="text" class="form-control" name="dob" value="dd-mm-yyyy"-->
        <input type="date" name="dob" value="<?=date('d-m-Y'); ?>" requried>
        <!--div class="input-group-addon">
          <i class="material-icons">today</i>
        </div-->
      </div>

      <div>
        <label type="text" for="gender">Gender: </lable>
        <select class="custom-select" name="gender" requried>
          <option selected>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="nonbinary">Non-binary</option>
          <option value="transgender">Transgender</option>
          <option value="intersex">Intersex</option>
          <option value="other">Other</option>
          <option value="notsay">Prefer not to say</option>
        </select>
      </div>

      <div>
        <label type="text" for="marriage">Marriage Status: </lable>
        <select class="custom-select" name="marriage" requried>
          <option selected>Marriage Status</option>
          <option value="married">Married</option>
          <option value="defacto">De facto</option>
          <option value="single">Single</option>
          <option value="divorced">Divorced</option>
          <option value="windowed">Widowed</option>
          <option value="nevermarried">Never Married/Partnered</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div>
        <label type="text" for="education">Education: </lable>
        <select class="custom-select" name="education" requried>
          <option selected>Education</option>
          <option value="primary">Primary</option>
          <option value="secondary">Secondary</option>
          <option value="vocational">Vocational</option>
          <option value="university">University</option>
        </select>
      </div>

      <div>
        <label type="text" for="employment">Employment: </lable>
        <select class="custom-select" name="employment" requried>
          <option selected>Employment</option>
          <option value="fulltime">Full-time</option>
          <option value="parttime">Part-time</option>
          <option value="unemployed">Unemployed</option>
          <option value="pension">Pension</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div>
        <label type="text" for="referal">Referal</lable>
        <select class="custom-select" name="referal" requried>
          <option selected>Referal</option>
          <option value="practioners">Psychologist/Counsellor/Psychiatrist</option>
          <option value="doctor">Doctor</option>
          <option value="family">Family Member</option>
          <option value="friend">Friend</option>
          <option value="legal">Solicitor/Legal advisor</option>
        </select>
      </div>

      <div>
        <h5>missing question 1</h5>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="d1" id="yes-d1" value="yes">
          <label class="form-check-label" for="yes-d1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="d1" id="no-d1" value="no">
          <label class="form-check-label" for="no-d1">No</label>
        </div>
      </div>

      <div>
        <h5>missing question 2</h5>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="d2" id="yes-d2" value="yes">
          <label class="form-check-label" for="yes-d2">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="d2" id="no-d2" value="no">
          <label class="form-check-label" for="no-d2">No</label>
        </div>
      </div>
    </div> 
    <!-- close the demographics section -->
    <br>
<!--     <a class="btn btn-primary" href="section1.php" role="button">Continue</a> -->
    <button class="btn btn-primary" onlick="section1.php" type="submit" name="submit">
      Continue
    </button>
  </form>

  </div> 
  <!-- close the container div -->
  <br>
  <?php require './partial/_footer.php';?>

  </body>
  
</html>

