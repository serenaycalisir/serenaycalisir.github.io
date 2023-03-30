function buton(){
    alert("Websiteme Hoşgeldiniz");
}

function medium(){
    window.location.href = "https://www.google.com";
  }

  function RenkDegistir() {
    var element = document.getElementById("p1");

    element.style.color = "purple";
}

function myFunction() {
    var at = document.getElementById("email").value.indexOf("@");

    submitOK = "true";

  
    if (at == -1) {
      alert("Geçerli Değil!");
      submitOK = "false";
    }
  
    if (submitOK == "false") {
      return false;
    }
  }