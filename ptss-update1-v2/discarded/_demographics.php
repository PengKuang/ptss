<?php

<!DOCTYPE html>

<html>
  <head>
    <title>Post Traumatic Stress Scale - Demographics</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="PTSS Demographics Form">
    <meta name="keywords" content="PTSS Demographics">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>

  <div class="content container" style="width:1220px">
  <div class="row">

  //assessment form
  <form action="submit.php" method="POST" id="ptss-form">
  //ids for the ptss assessment
  <input type="hidden" name="clientid" value="">
  <input type="hidden" name="candidateid" value="">
  <input type="hidden" name="answerid" value="">

  //assessment date
    <div>
      <lable for="dateassessed">Date Assessed: </lable>
      <input type="date" name="dateassessed" value="<?= echo date('d-m-Y'); ?>">
    </div>

    <div class="progress-bar progress-bar-striped" role="progressbar" style="width:20%">20%</div>

  //demographics data
    <div>
      <h3>demographics</h3>

      <lable for="fname">First Name: </lable>
      <div>
        <input class="form-control" type="text" name="fname" placeholder="first name"></input>
      </div>

      <lable for="lname">Last Name: </lable>
      <div>
        <input class="form-control" type="text" name="lname" placeholder="last name"></input>
      </div>

      <lable for="dob">Date of Birth: </lable>
      <div class="input-group date">
        <input type="text" class="form-control" name="dob" value="dd-mm-yyyy">
        <div class="input-group-addon">
          <i class="material-icons">today</i>
        </div>
      </div>

      <div>
        <label type="text" for="gender">Gender: </lable>
        <select class="custom-select" name="gender">
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
        <select class="custom-select" name="marriage">
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
        <select class="custom-select" name="education">
          <option selected>Education</option>
          <option value="primary">Primary</option>
          <option value="secondary">Secondary</option>
          <option value="vocational">Vocational</option>
          <option value="university">University</option>
        </select>
      </div>

      <div>
        <label type="text" for="employment">Employment: </lable>
        <select class="custom-select" name="employment">
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
        <select class="custom-select" name="referal">
          <option selected>Referal</option>
          <option value="practioners">Psychologist/Counsellor/Psychiatrist</option>
          <option value="doctor">Doctor</option>
          <option value="family">Family Member</option>
          <option value="friend">Friend</option>
          <option value="legal">Solicitor/Legal advisor</option>
        </select>
      </div>

      <div>
        <h4>missing question 1</h4>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="yes-q7" id="yes-q7" value="yes">
          <label class="form-check-label" for="yes-q7">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="no-q7" id="no-q7" value="no">
          <label class="form-check-label" for="no-q7">No</label>
        </div>
      </div>

      <div>
        <h4>missing question 2</h4>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="yes-q8" id="yes-q8" value="yes">
          <label class="form-check-label" for="yes-q8">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="no-q8" id="no-q8" value="no">
          <label class="form-check-label" for="no-q8">No</label>
        </div>
      </div>

    </div> //close the demographics section
    <a class="btn btn-primary" href="#" role="button">Next</a>
  </form>

  </div> //close the row div
  </div> //close the container div

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
?>
