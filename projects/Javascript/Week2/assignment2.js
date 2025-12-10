//Created by Brandon Lanoue
//Student number #0783032
//Assignment 2
//Date completed 01/24/2025

let rate = 0.25
let gst = 1.06
let pst = 1.08
let startingTime = prompt("What time did the call start?");
let endingTime = prompt("what time did the call end?");

let isDiscounted = (startingTime >= 1800 || startingTime < 800);

let startHours = Math.floor(startingTime/100)
let startMinutes = startingTime % 100;
startingTime = startHours * 60 + startMinutes

let endingHours = Math.floor(endingTime/100)
let endingMinutes = endingTime % 100;
endingTime = endingHours * 60 + endingMinutes


if (endingTime < startingTime)
{
    endingTime += 1440
}

let callDuration = endingTime - startingTime

if(callDuration >= 120)
{
    callDuration = 120;
}


if (isDiscounted)
{
    alert("The cost of the call was $" + ((callDuration * rate * gst * pst)*0.5))
}
else
{
    alert("The cost of the call was $" + (callDuration * rate * gst * pst))
}

