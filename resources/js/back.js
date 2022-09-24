require('./bootstrap');

const form_new_house = document.getElementById("form-new-house");
if (form_new_house) {
    form_new_house.onsubmit = function () {
        return validationCreate()
    }
};

const form_edit_house = document.getElementById("form-edit-house");
if (form_edit_house) {
    form_edit_house.onsubmit = function () {
        return validationEdit()
    }
};

function validationCreate() {
    const name_house = document.getElementById('name_house');
    const rooms = document.getElementById('rooms');
    const beds = document.getElementById('beds');
    const bathrooms = document.getElementById('bathrooms');
    const mq = document.getElementById('mq');
    const address = document.getElementById('query');
    const type = document.getElementById('type');
    const cover_photo = document.getElementById('cover_photo');
    const myservices = document.getElementById('myservices');
    const services = myservices.querySelectorAll('input');

    let myservice;
    services.forEach(service => {
        if (service.checked) {
            myservice = true
        }
    });

    if (name_house.value == "") {
        window.alert("Inserisci un nome");
        name_house.focus();
        return false;
    }
    if ((rooms.value)<1) {
        window.alert("Inserire il numero di stanze");
        rooms.focus();
        return false;
    }
    if ((beds.value)<1) {
        window.alert("Inserire il numero di letti");
        beds.focus();
        return false;
    }
    if ((bathrooms.value)<1) {
        window.alert("Inserire il numero dei bagni");
        bathrooms.focus();
        return false;
    }
    if ((mq.value)<1) {
        window.alert("Inserire la dimensione della struttura in mq");
        mq.focus();
        return false;
    }
    if (address.value == "") {
        window.alert("Inserire un indirizzo");
        mq.focus();
        return false;
    }
    if (type.value == "") {
        window.alert("Inserisci un tipo di struttura valido");
        type.focus();
        return false;
    }
    if (cover_photo.value == "") {
        window.alert("Inserisci una immagine");
        type.focus();
        return false;
    }
    if (!myservice) {
        window.alert("Inserisci almeno un servizio");
        type.focus();
        return false;
    }

    return true;

}

// function changeCover() {
//     var previous = document.getElementById("previous_image");
//     var change = document.getElementById("change_image");

//     if (previous.style.display === "block") {
//         previous.style.display = "none";
//     } if (change.style.display = "none") {
//         change.style.display = "block";
//   };

function validationEdit() {
    const name_house = document.getElementById('name_house');
    const rooms = document.getElementById('rooms');
    const beds = document.getElementById('beds');
    const bathrooms = document.getElementById('bathrooms');
    const mq = document.getElementById('mq');
    const address = document.getElementById('query');
    const type = document.getElementById('type');
    // const cover_photo = document.getElementById('cover_photo');
    const myservices = document.getElementById('myservices');
    const services = myservices.querySelectorAll('input');

    let myservice;
    services.forEach(service => {
        if (service.checked) {
            myservice = true
        }
    });

    if (name_house.value == "") {
        window.alert("Inserisci un nome");
        name_house.focus();
        return false;
    }
    if ((rooms.value)<1) {
        window.alert("Inserire il numero di stanze");
        rooms.focus();
        return false;
    }
    if ((beds.value)<1) {
        window.alert("Inserire il numero di letti");
        beds.focus();
        return false;
    }
    if ((bathrooms.value)<1) {
        window.alert("Inserire il numero dei bagni");
        bathrooms.focus();
        return false;
    }
    if ((mq.value)<1) {
        window.alert("Inserire la dimensione della struttura in mq");
        mq.focus();
        return false;
    }
    if (address.value == "") {
        window.alert("Inserire un indirizzo");
        mq.focus();
        return false;
    }
    if (type.value == "") {
        window.alert("Inserisci un tipo di struttura valido");
        type.focus();
        return false;
    }

    if (!myservice) {
        window.alert("Inserisci almeno un servizio");
        type.focus();
        return false;
    }

    return true;

}

window.validationRegister = function () {
    const name = document.getElementById('name');
    const surname = document.getElementById('surname');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const password = document.getElementById('password');
    const password_confirm = document.getElementById('password-confirm');


    if (name.value == "") {
        window.alert("Inserisci un nome");
        name.focus();
        return false;
    }
    if (surname.value == "") {
        window.alert("Inserisci un cognome");
        surname.focus();
        return false;
    }
    if (!email.value.includes('@') || !email.value.includes('.')) {
        window.alert("Inserisci un'email valida");
        email.focus();
        return false;
    }
    if (isNaN(phone.value)) {
        window.alert("Inserisci un numero valido");
        phone.focus();
        return false;
    }
    if (password.value.length < 8) {
        window.alert("La password è troppo corta");
        password.focus();
        return false;
    }
    if (password_confirm.value !== password.value) {
        window.alert("Le password non coincidono");
        password_confirm.focus();
        return false;
    }
    return true
}