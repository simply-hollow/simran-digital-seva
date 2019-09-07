console.log('Hello world!');

function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var show = document.getElementById("show");
  if (checkBox.checked == true){
    show.style.display = "block";
  } else {
    show.style.display = "none";
  }
}