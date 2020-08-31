class Rgpd {
    constructor() {
        this.rgpdBtn = document.getElementById("cookie-accept");
        this.divCookie = document.getElementById("cookie-rgpd");
        this.rgpdBtn.addEventListener("click", this.rgpdCookie.bind(this));
        window.addEventListener("load", this.checkCookie.bind(this));
    }

    rgpdCookie() {
        this.divCookie.style.display = "none";
        document.cookie = 'RgpdAccept=True; path=/; max-age= 2592000';
        localStorage.setItem("firstVisit", "true");
    }

    checkCookie() {
        if (localStorage.getItem("firstVisit") === null) {
            document.cookie = 'RgpdAccept=No; path=/; max-age= 2592000';
        }

        const rgpdCookie = document.cookie.split('; ').find(row => row.startsWith('Rgpd')).split('=')[1];

        if (rgpdCookie === "No") {
            this.divCookie.classList.remove("d-none");
        }
    }
}

const rgpd = new Rgpd();