// Switch with validation button for Promotions delete
let tableau = document.getElementsByClassName("delete");
let tableauBis = document.getElementsByClassName("delete-confirm");
for (let i = 0; i < tableau.length; i++) {
    tableau[i].addEventListener("click", () => {
        tableau[i].style.display = "none";
        tableauBis[i].style.display = "block";
    })
}
for (let i = 0; i < tableauBis.length; i++) {}