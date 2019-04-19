$(function(){
    $("#aramamenuac").click(function(){
        $("#aramamenu").toggle();
    });
});

function myFunction(deger,deger2) {
    var x = document.getElementById(deger);
    if (x.style.display === "none") {
      x.style.display = "block";
      document.getElementById(deger2).focus();
    } else {
      x.style.display = "none";
    }
  }