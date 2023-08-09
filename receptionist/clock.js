
let date = new Date();
let day = date.getDay();
let dates = date.getDate();
let month = date.getMonth();
let year = date.getFullYear();

switch (day) {
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4 :
    day = "Thursday";
    break;
  case 5 :
    day = "Friday";
    break;
  case 6 :
    day = "Saturday";
    break;
  case 7 :
    day = "Sunday";
}

document.getElementById("day").innerHTML = day + ", " + dates + " - " + month + " - " + year;

// hour 
setInterval(function(){
  let time = new Date();
  let hour = time.getHours();
  let minute = time.getMinutes();
  let seconds = time.getSeconds();

  document.getElementById("clock").innerHTML = hour + " : " + minute + " : " + seconds;
}, 500);