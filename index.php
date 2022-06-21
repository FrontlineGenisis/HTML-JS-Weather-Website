<!DOCTYPE HTML>
<html>
<head>
<title>Loading Counter...</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Robots" content="NOINDEX,NOFOLLOW">
<style>
@import url('https://fonts.googleapis.com/css2?family=Anek+Latin&family=Poppins:ital,wght@1,800&display=swap');
  body{
background-color: #000;
cursor: none;
width: 100%;
height: 100%;
overflow: hidden;
}
#counter {
  font-size: 60px;
color: #fff;
font-family: 'Poppins', sans-serif;
 margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
::-moz-selection {
    background-color: transparent;
    color: #fff;
}

::selection {
    background-color: transparent;
    color: #fff;
}
#redirect {
display: none;
color: #fff;
 margin: 0;
  position: absolute;
  top: 44%;
  left: 50%;
  transform: translate(-50%, -50%);
font-family: 'Anek Latin', sans-serif;
}
.myclass::-moz-selection,
.myclass::selection { ... }
</style>
</head>
<body>  
<p id="counter"></p>
<p id="redirect">Redirecting...</p>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 25, 2022 16:10:10").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="counter"
  document.getElementById("counter").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
document.title = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s" 
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("counter").innerHTML = "0d 0h 0m 0s";
document.getElementById("redirect").style.display = "block";
window.location.href = "https://google.com";
  }
}, 1000);
</script>
</body>
</html>