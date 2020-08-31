window.onload = function() {
    let recaptcha = document.querySelector('#g-recaptcha-response');

    if(recaptcha) {
        recaptcha.setAttribute("required", "required");
    }
};