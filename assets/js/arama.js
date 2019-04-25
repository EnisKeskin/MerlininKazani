

function myFunction(deger,deger2) {
    var x = document.getElementById(deger);
    if (x.style.display === "none") {
      x.style.display = "block";
      document.getElementById(deger2).focus();
    } else {
      x.style.display = "none";
    }
}

function popOpen(checknum) {
  var haber = document.getElementById('konu_haber');
  var inceleme = document.getElementById('konu_inceleme');
  var teknoloji = document.getElementById('konu_tekno');
  if(checknum == 1) {
    haber.style.display = "block";
    inceleme.style.display = "none";
    teknoloji.style.display = "none";
  }else if(checknum == 2) {
    haber.style.display = "none";
    inceleme.style.display = "block";
    teknoloji.style.display = "none";
  }else if (checknum == 3) {
    haber.style.display = "none";
    inceleme.style.display = "none";
    teknoloji.style.display = "block";
  }
}