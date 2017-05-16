<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="style.css">
    <title>Question 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div id="rcorners2">
   <p class="p1"> <b>How much do you know about Computer!<b>
        <p class="p2">
            Question 1 of 10
            </p>
            <br>
            <p class="p3">
            Which of the following languages is more suited to a structured program?
            <p class="p4"> 
            <form action="my1.php" method="post"> 
             
<input type="radio" name="q2" value="PL/1" />
PL/1<br>
<input type="radio" name="q2" value="FORTAN" />
FORTRAN<br>
<input type="radio" name="q2" value="BASIC" />
BASIC<br>
<input type="radio" name="q2" value="PASCAL" />
PASCAL<br>
<input type="radio" name="q2" value="None of the above" />
None of the above
</p><br><br>

</p>
 </p> 
 <p>
  <div class="absolute1">
 <button type="submit" name="submit" value="Submit" formaction="index.html" class="btn btn-info btn-lg "data-toggle="tooltip" data-placement="left" title="Instructions" >
          <span class="glyphicon glyphicon-hand-left" ></span> Back
        </a>
</div>
<div class="absolute">
<button type="submit" name="submit" value="Submit" class="btn btn-info btn-lg "data-toggle="tooltip" data-placement="right" title="Next Question">
  Next <span class="glyphicon glyphicon-hand-right"></span>
  </button>
      </div>
      </form>
</p>
</div>
<div class="absolute2">
<span id="countdown" class="timer"></span>
<script>
var seconds = 60;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "ques2.html";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>