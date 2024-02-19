/// Abassi Fedi 2A24
///////////////////////////////////////////////////////////////////////////////////////////////

// Partie 1 :

function validerDateOfBirth() {
    
    var dateNaissance = document.getElementById("date_naissance").value;
    
    var dateNaissance1 = new Date(dateNaissance);
    
    var dateAujourdhui = new Date();
    
    if (dateNaissance1 > dateAujourdhui) {

        alert("La date de naissance ne peut pas être ultérieure à la date d'aujourd'hui.");
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////

// Partie 2 :

/*function isEmailValide(email) {
    
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}*/

function isNomValide(nom) {
    return /^[a-zA-Z]+$/.test(nom) && nom.length >= 1;
}

function isPrenomValide(prenom) {
    return prenom.length >= 1;
}

function isTelephoneValide(telephone) {
    return /^[0-9]{8}$/.test(telephone);
}

function isDateNaissanceValide(dateNaissance) {
    const dateNaissanceObj = new Date(dateNaissance);
    return dateNaissanceObj < new Date() && dateNaissanceObj.toString() !== "Invalid Date";
}

function isMotDePasseValide(motDePasse) {
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(motDePasse);
}

////////////////////////////////////////////

function validerFormulaire(event) {
    event.preventDefault();
    const form = document.getElementById("inscription");

    
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const email = document.getElementById("email").value;
    const telephone = document.getElementById("telephone").value;
    const dateNaissance = document.getElementById("date_naissance").value;
    const motDePasse = document.getElementById("mot_de_passe").value;

    
    let hasError = false;

    
    if (!isNomValide(nom)) {
        const errorMessageNom = document.getElementById("erreurnom");
        errorMessageNom.textContent = "Le nom doit contenir uniquement des lettres et doit avoir au moins 1 caractère.";
        hasError = true;
    } else {
        const errorMessageNom = document.getElementById("erreurnom");
        errorMessageNom.textContent = "Correct";
        errorMessageNom.classList.add("success-message");
    }

    if (!isPrenomValide(prenom)) {
        const errorMessagePrenom = document.getElementById("erreurprenom");
        errorMessagePrenom.textContent = "Le prénom doit avoir au moins 1 caractère (lettres uniquement).";
        hasError = true;
    } else {
        const errorMessagePrenom = document.getElementById("erreurprenom");
        errorMessagePrenom.textContent = "Correct";
        errorMessagePrenom.classList.add("success-message");
    }

    if (!isTelephoneValide(telephone)) {
        const errorMessageTelephone = document.getElementById("erreurtel");
        errorMessageTelephone.textContent = "Le numéro de téléphone doit avoir au moins 8 chiffres.";
        hasError = true;
    } else {
        const errorMessageTelephone = document.getElementById("erreurtel");
        errorMessageTelephone.textContent = "Correct";
        errorMessageTelephone.classList.add("success-message");
    }

    /*if (!isEmailValide(email)) {
        const errorMessageEmail = document.getElementById("erreuremail");
        errorMessageEmail.textContent = "Le format de l'email doit être valide.";
        hasError = true;
    } else {
        const errorMessageEmail = document.getElementById("erreuremail");
        errorMessageEmail.textContent = "Correct";
        errorMessageEmail.classList.add("success-message");
    }*/

    if (!isDateNaissanceValide(dateNaissance)) {
        const errorMessageDateNaissance = document.getElementById("erreurdaten");
        errorMessageDateNaissance.textContent = "La date de naissance doit être inférieure à la date d'aujourd'hui et valide.";
        hasError = true;
    } else {
        const errorMessageDateNaissance = document.getElementById("erreurdaten");
        errorMessageDateNaissance.textContent = "Correct";
        errorMessageDateNaissance.classList.add("success-message");
    }

    if (!isMotDePasseValide(motDePasse)) {
        const errorMessageMotDePasse = document.getElementById("erreurpass");
        errorMessageMotDePasse.textContent = "Le format du mot de passe est incorrect ( le mot de passe doit contenir au moins 8 caractéres, incluant au moins un chiffre , une lettre minuscule et une lettre majuscule).";
        hasError = true;
    } else {
        const errorMessageMotDePasse = document.getElementById("erreurpass");
        errorMessageMotDePasse.textContent = "Correct";
        errorMessageMotDePasse.classList.add("success-message");
    }

    
    if (!hasError) {
        form.submit();
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////

 // Partie 3 :
 
function verifierEmail() {
    const email1 = document.getElementById("email");
    const email = email1.value;

    const email2 = document.getElementById("erreuremail");

    
    if (/@esprit\.tn$/.test(email)) {
        email2.textContent = "Email correct!";
        email2.classList.remove("error-message");
        email2.classList.add("success-message");
    } else {
        email2.textContent = "L'email doit être de format *@esprit.tn";
        email2.classList.remove("success-message");
        email2.classList.add("error-message");
    }
}
 
document.addEventListener("DOMContentLoaded", function() {
    const email1 = document.getElementById("email");
    email1.addEventListener("keyup", verifierEmail);
});



