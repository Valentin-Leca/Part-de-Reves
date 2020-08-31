let body = document.querySelector('body');
let slider = document.querySelectorAll(".slider")

if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?home" ||
    document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?_ijt=d9ka4mtbk5s0vlehf228ndi95i" ||
    document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?_ijt=d82e92dic3oko4csaotkms17c2") {
    body.classList.add("crossfade");
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?engagements") {
    body.classList.add("engagements");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?customTravel") {
    body.classList.add("custom-travel");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?productsPartners") {
    body.classList.add("products-and-partners");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?whereWhen") {
    body.classList.add("where-and-when");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?contact" ||
    document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?appointmentForm" ||
    document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?contactForm") {
    body.classList.add("contact");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?knowMore" ||
    "http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?rgpdPage") {
    body.classList.add("know-more");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?login") {
    body.classList.add("login");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
} else if (document.location.href ==="http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?administration" ||
    "http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?promotionList" ||
    "http://localhost:63342/P5_Part_de_R%C3%AAves/index.php?getUpdatePromotionPage") {
    body.classList.add("administration");
    body.classList.remove("crossfade");
    slider.forEach(element => {
        element.style.display = "none"
    });
}