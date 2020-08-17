
let bouton = document.querySelector(".btn-secondary");
//on ecoute un evenement click sur le bouton
bouton.onclick = e =>{
    e.preventDefault();
    window.print();   
}

let corpsPage = document.querySelector("body");
let tableau = ["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"];

let random = Math.floor(Math.random()*tableau.length);

window.addEventListener("DOMContentLoaded", ()=>{
    corpsPage.style.backgroundImage = `url("public/assets/img/${tableau[random]}")`;
})



console.log(random);
