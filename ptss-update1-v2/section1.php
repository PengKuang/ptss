<!-- q1-3 -->

<!DOCTYPE html>

<html>

  <head>

    <title>Post Traumatic Stress Scale - Demographics</title>
    <?php require './partial/_head.php';?>

  </head>

  <body>

    <?php require './partial/_header.php';?>

    <div class="container">

      <p>2 of 5 steps</p>

      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:40%">40%</div>
      <br>

      <h4>Section 1</h4>

      <h5>1-A</h5>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1a" id="yes-q1a" value="yes">
          <label class="form-check-label" for="yes-q1a">Yes</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1a" id="no-q1a" value="no">
          <label class="form-check-label" for="no-q1a">No</label>
        </div>
      </div>

      <h5>1-B</h5>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1b" id="yes-q1b" value="yes">
          <label class="form-check-label" for="yes-q1b">Yes</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1b" id="no-q1b" value="no">
          <label class="form-check-label" for="no-q1b">No</label>
        </div>
      </div>

      <h5>1-C</h5>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1c" id="yes-q1c" value="yes">
          <label class="form-check-label" for="yes-q1c">Yes</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1c" id="no-q1c" value="no">
          <label class="form-check-label" for="no-q1c">No</label>
        </div>

        <!-- requied -->
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="event-q1c">Event</span>
          </div>
            <input class="form-control" type="text" name="q1c-event" id="event-q1c">
        </div>
      </div>

       <h5>1-D</h5>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="war-q1d" value="war">
          <label class="form-check-label" for="war-q1d">War</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="victim-q1d" value="victim">
          <label class="form-check-label" for="victim-q1d">Victim/Witness of crime</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="vehicle-q1d" value="vehicle">
          <label class="form-check-label" for="vehicle-q1d">Vehicle Accident</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="flood-q1d" value="flood">
          <label class="form-check-label" for="flood-q1d">Flood</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="fire-q1d" value="fire">
          <label class="form-check-label" for="fire-q1d">Fire</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="earthquake-q1d" value="earthquake">
          <label class="form-check-label" for="earthquake-q1d">
            Earthquake / avalanche / Volcano
          </label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="famine-q1d" value="famine">
          <label class="form-check-label" for="famine-q1d">Famine</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1d" id="terrorist-q1d" value="terroristt">
          <label class="form-check-label" for="terrorist-q1d">Terrorist Attack</label>
        </div>

        <div class="form-check form-check-inline input-gtoup" style="white-space: nowrap;">
          <input class="form-check-input" type="radio" name="q1d" id="other-q1d" value="other">
          <label class="form-check-label" for="q1d-other">Other (Please specify)</label>
          <input type="text" name="other-q1d" class="form-control">
        </div>
      </div> 

      <h5>2</h5>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="yes-q2" value="yes">
          <label class="form-check-label" for="yes-q2">Yes</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="no-q2" value="no">
          <label class="form-check-label" for="no-q2">No</label>
        </div>
      </div>

      <!-- digits only -->
      <h5>3-A</h5>
      <div>
        <input type="text" name="q3a" class="form-control">
      </div>

      <h5>3-B</h5>
      <div>
        <input type="text" name="q3b" class="form-control">
      </div>

      <br>

      <div>
        <a class="btn btn-primary" href="section2.php" role="button">Continue</a>
      </div>
      
    </div>

    <br>

    <?php require './partial/_footer.php';?>

  </body> 

  </html>
