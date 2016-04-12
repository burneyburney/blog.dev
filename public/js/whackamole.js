"use strict";

// global variables
var holdOn = [];
var score = 0;
var lastItem = 0;
var mathRandomSeconds;
var interval;

// start button
$(".start").click(function() {
  random();

})

// random number -> push random number -> run appear()
function random() {
  mathRandomSeconds = 250 * (Math.floor(Math.random() * 3) + 1);
  interval = setInterval(function() {
    var RNG = Math.floor(Math.random() * 9);
    holdOn.push(RNG);
    lastItem = holdOn[holdOn.length - 1]
    appear();
  }, mathRandomSeconds);
}

// fade in the mole
function appear() {
  console.log("History: " + holdOn);
  console.log("Last Item =" + lastItem);
  $("#mole" + lastItem).addClass("up");

}

// when button is clicked -> change back opacity -> increase score by 1 ->  ( if score > 9, re run function) if > 10, alertspam
$(".mole").click(function() {
  if ($(this).hasClass("up")) {
    // $(".mole").removeClass("up");
    clearInterval(interval);
    random();
    $(this).removeClass("up");
    $(this).addClass("down");
    score++;
    if (score > 9) {
      random();
      $(".doubleTime").html("ITS GO TIME!!");

      if (score > 12) {
        clearInterval(interval);
        alert("HA! you lost, go outside");
        $(".mole").addClass("down");

        if ($(".mole").click()) {
          alert("seriously though, the cleaning crew's coming");
        }
      }
    }
    $(".theScore").html(score);
  }
});
	


