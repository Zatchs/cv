const trous = document.querySelectorAll(
    '.trou'); // Je selectionne tous les "trou" que je nomme dans une constante "trous"
const scoreBoard = document.querySelector(
    '.score'); // Je selectionne le score que je nomme ScoreBoard, qui lui va changer(constante)
const romains = document.querySelectorAll(
    '.romain'); // Je selectionne tous les "romains" dans une constante nommée "romains"
const multiplie = document.querySelector('.multiplicateur');
let dernierTrou; // Déclare une variable limitée au bloc trou
let timeUp = false; // Pour dire que la variable ne se termine pas au départ
let score = 0; //On dit que le score est à 0.
let multiplicateur = 1; // On dit que le multiplicateur comme à 1


// Pour gerer le temps en seconde 
var cpt = 20; // 20 secondes
var x;
function decompte() {
    if (cpt >= 0) {
        if (cpt > 1) {
            var sec = " secondes.";
        } else {
            var sec = " seconde.";
        }
        document.getElementById("chrono").innerHTML = cpt + sec;
        cpt--;
        x = setTimeout("decompte()", 1000); //On retire 1 seconde chaque seconde.
        
}
}

// Pour faire pop les images avec un temps aléatoire
function randomTime(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

function randomTrou(trous) {
    const idx = Math.floor(Math.random() * trous.length); // Apparition aléatoire des trous
    const trou = trous[idx]; // On dit que ce qui apparait aléatoirement doit etre dans un trou
    if (trou === dernierTrou) { //si trou est utilisé plusieurs fois 
        return randomTrou(trous); // alors renvoyer la fonction
    }
    dernierTrou = trou; // On dit que le derniertrou est égal au trou utilisé
    return trou; // renvoyer trou
}

function apparait() { //Pour faire apparaitre les romains
    const time = randomTime(300, 1000); // les romains apparaissent entre 0.2 et 1 seconde
    const trou = randomTrou(trous); // on dit que trou apparait aléatoirement dans un des trous
    trou.classList.add('up'); // Pour faire monter romain
    setTimeout(() => {
        trou.classList.remove('up');
        if (!timeUp) apparait(); // Si le temps est pas fini (!) alors fait pooper des Romains
    }, time);
}

function startGame() {
    scoreBoard.textContent = 0; //
    multiplie.textContent = 1;
    timeUp = false; // Pour redire qu'au lancement de la partie, le temps de la partie n'est pas terminé
    score = 0;
    multiplicateur = 1;
    apparait(); // Pour lancer la fonction apparait au démarrage
    setTimeout(() => timeUp = true, 20000); // La partie dure 20 secondes (20000)
    decompte()
    cpt= 20;
}

function bonk(e) {
    if (!e.isTrusted) return; //Tricheur!
    score++; // Le score augmente quand on clique
    if (score >= 10) { // si le socre est supérieur ou égal à 10
        score += 2; // Le socre par clic est de 2 au lieu de 1 avant
        multiplicateur = 2; // Le multiplicateur est de 2 (affichage)
        document.getElementById("brah").src = "images/romain7.gif" // l'image va apparaitre dans la div id=brah
    }
    if (score >= 30) {
        score += 3;
        multiplicateur = 3;
    }
    if (score >= 50) {
        score += 4;
        multiplicateur = 5;
    }
    if (score >= 80) {
        score += 5;
        multiplicateur = 6;
        document.getElementById("brah").src = "images/romain10.gif"
    }
    if (score >= 220) {
        score += 6;
        multiplicateur = 7;
    }
    if (score >= 280) {
        score += 7;
        multiplicateur = 8;
        document.getElementById("brah").src = "images/romain4.gif"
    }
    if (score >= 340) {
        score += 8;
        multiplicateur = 9;
    }
    if (score >= 400) {
        score += 9;
        multiplicateur = 10;
    }
    if (score >= 500) {
        score += 29;
        multiplicateur = 30;

    }
    if (score > 1000) {
        score += 49;
        multiplicateur = 50;
        document.getElementById("brah").src = "images/romain6.gif"
    }


    this.parentNode.classList.remove('up');
    scoreBoard.textContent = score;
    multiplie.textContent = multiplicateur;
}


romains.forEach(romain => romain.addEventListener('click', bonk));

// Fonction qui permet de lire une musique sur le site
var audio = new Audio('musique.mp3');
audio.play();

function JouerSon() {
    var sound = document.getElementById("MonSon");
    sound.play();
}

document.getElementById('punch').addEventListener('click', function () {
    JouerSon();
});
