require('./bootstrap');

 // funzione per la validation della mail
  const email = document.getElementById("email");

  email.addEventListener("input", (event) => {
    if (email.validity.typeMismatch) {
      email.setCustomValidity("I am expecting an e-mail address!");
      email.reportValidity();
    } else {
     email.setCustomValidity("");

    }
    });


