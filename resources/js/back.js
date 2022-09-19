require('./bootstrap');



// const form_register = document.getElementById("form-register");
// if (form_register) {
//     form_register.onsubmit = function () {
//         return validationRegister()
//     }
// };

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


window.validationHouses = function () {
    const name_house = document.getElementById('name_house');
    const rooms = document.getElementById('rooms');
    const beds = document.getElementById('beds');
    const bathrooms = document.getElementById('bathrooms');
    const mq = document.getElementById('mq');
    const type = document.getElementById('type');

    if (name_house.value == "") {
        window.alert("Inserisci un nome");
        name_house.focus();
        return false;
    }
    if (isNaN(rooms.value)) {
        window.alert("Inserisci un numero valido");
        rooms.focus();
        return false;
    }
    if (isNaN(beds.value)) {
        window.alert("Inserisci un numero valido");
        beds.focus();
        return false;
    }
    if (isNaN(bathrooms.value)) {
        window.alert("Inserisci un numero valido");
        bathrooms.focus();
        return false;
    }
    if (isNaN(mq.value)) {
        window.alert("Inserisci un numero valido");
        mq.focus();
        return false;
    }
    if (type.value == "") {
        window.alert("Inserisci un tipo di struttura valido");
        type.focus();
        return false;
    }
    return true

}
