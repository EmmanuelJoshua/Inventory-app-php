window.onload = function() {
 var h, m, s;
 getTwelveHrs();

 function getTwelveHrs() {
  var tag = 'AM';
  checkTime();
  if(h > 12) {
   h -= 12
   tag = 'PM';
  }
  document.getElementById('timeSpan').innerHTML = h + ':' + m + ':' + s + ' ' + tag;
  t = setTimeout(function() {
   getTwelveHrs()
  }, 1000);
 }

 function checkTime() {
  var today = new Date();
  h = today.getHours();
  m = today.getMinutes();
  s = today.getSeconds();
  if(h < 10)
   h = '0' + h;
  if(m < 10)
   m = '0' + m;
  if(s < 10)
   s = '0' + s;
  return h, m, s;
 }
}

function displayTwelveHrs() {
 document.getElementById('timeSpan').style.display = '';
}