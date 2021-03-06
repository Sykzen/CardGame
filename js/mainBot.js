class Joueur {

    constructor(nom, joue, score) {
        this.nom = localStorage.nom;
        this.joue = joue;
        this.score = score;
    }
}

var joueurs = [];
const joueur = new Joueur(localStorage.nom, false, 0);



const divResultat = document.querySelector("#tableDiv");
const score_joueur1 = document.querySelector("#joueur1");
const score_joueur2 = document.querySelector("#joueur2");
tour = document.querySelector("#tour");

tour.innerHTML = "<div class='align-center alert alert-success' style='text-align:center;'>C'est le tour du joueur";

var tabJeu = [
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
];

// var tabResultat = [
//     [1,1,2,4],
//     [3,5,2,7],
//     [8,3,8,5],
//     [6,6,4,7]
// ];

var tabResultat = genereTableauAleatoire();

var oldSelection = [];
var nbAffiche = 0;
var ready = true;

afficherTableau();

function afficherTableau() {
    var txt = "";
    for (let i = 0; i < tabJeu.length; i++) {
        txt += "<div>";
        for (let j = 0; j < tabJeu[i].length; j++) {
            if (tabJeu[i][j] == 0) {
                txt += "<button class = ' btn btn-primary m-2' style = 'width:100px; height: 150px;' onClick = 'verif(\"" + i + "-" + j + "\");' > <img src = ../static/cartes/Dos.png  style = 'width:100px; height: 150px; margin:-14px;'> </button>";

            } else {
                txt += "<img src = '" + getImage(tabJeu[i][j]) + "' style = 'width:100px; height:150px;' class = 'm-2'>";
            }
        }
        txt += "</div>";
    }
    divResultat.innerHTML = txt;

};


/*On recupere les differentes images*/
function getImage(valeur) {
    var imgTxt = "../static/cartes/";
    switch (valeur) {
        case 1:
            imgTxt += "C1.png"
            break;
        case 2:
            imgTxt += "DK.png"
            break;
        case 3:
            imgTxt += "CJ.png"
            break;
        case 4:
            imgTxt += "D10.png"
            break;
        case 5:
            imgTxt += "P5.png"
            break;
        case 6:
            imgTxt += "T1.png"
            break;
        case 7:
            imgTxt += "PQ.png"
            break;
        case 8:
            imgTxt += "T2.png"
            break;
    }
    return imgTxt;
}

/*score_joueur2.innerHTML=joueur.score; */
score_joueur1.innerHTML = 0;
score_joueur2.innerHTML = 0;
tour_nb = 1;
tour.innerHTML = "<div class='align-center alert alert-success' style='text-align:center;'>C'est le tour du joueur " + tour_nb;
var choix = [
    [0, 0],
    [0, 1],
    [0, 2],
    [0, 3],
    [1, 0],
    [1, 1],
    [1, 2],
    [1, 3],
    [2, 0],
    [2, 1],
    [2, 2],
    [2, 3],
    [3, 0],
    [3, 1],
    [3, 2],
    [3, 3]
];

function retrouverIndice(tab, ligne, colonne) {
    for (var i = 0; i < tab.length; i++) {
        if (tab[i][0] === parseInt(ligne) && tab[i][1] === parseInt(colonne)) {
            return i;
        }
    }
    return -1;
}

function verif(bouton) {

    if (ready) {
        nbAffiche++;
        if (tour_nb == 1) {
            var ligne = bouton.substr(0, 1);
            var colonne = bouton.substr(2, 1);
            var ensemble = retrouverIndice(choix, ligne, colonne);
        } else {
            var ensemble = Math.floor(Math.random() * choix.length);
            var ligne = choix[ensemble][0];
            var colonne = choix[ensemble][1];
        }

        tabJeu[ligne][colonne] = tabResultat[ligne][colonne];
        afficherTableau();
        if (nbAffiche > 1) {
            ready = false;
            setTimeout(() => {
                /*si elles sont pas pareil alors on reretourne les cartes*/
                if (tabJeu[ligne][colonne] !== tabResultat[oldSelection[0]][oldSelection[1]]) {
                    tabJeu[ligne][colonne] = 0;
                    tabJeu[oldSelection[0]][oldSelection[1]] = 0;
                    tour_nb = tour_nb == 1 ? 2 : 1;
                } else {
                    if (choix.length == 2) {
                        if (score_joueur2.innerHTML > score_joueur1.innerHTML) {
                            window.alert("Vous avez perdu");
                        } else if (score_joueur2.innerHTML < score_joueur1.innerHTML) {
                            window.alert("Vous avez gagn??");
                        } else {
                            window.alert("Egalit??");
                        }

                    } else {
                        /* on enleve dans le tableau choix les deux retourn??es ca marche quand cesdt le bot mais pas quad cest l'humain*/
                        var enleve = choix.splice(ensemble, 1);
                        enleve = choix.splice(retrouverIndice(choix, oldSelection[0], oldSelection[1]), 1);
                        // console.log(colonneDispo);
                        /*si elles sont pareil alors on incremente le score du joueur*/
                        if (tour_nb == 1) {
                            score_joueur2.innerHTML++;
                            console.log(score_joueur2.innerHTML);
                        } else {
                            score_joueur1.innerHTML++;
                            console.log(score_joueur1.innerHTML);
                        }
                    }

                }

                tour.innerHTML = "<div class='align-center alert alert-success' style='text-align:center;'>C'est le tour du joueur " + tour_nb;

                afficherTableau();
                ready = true;
                nbAffiche = 0;
                /* ajouter le score des joueurs*/

            }, 1000)
        } else {
            oldSelection = [ligne, colonne];
        }
    }
}



/*On va generer le tableau de facon al??atoire en stockant le nombre d'image de chaque cat??gorie deja sorti*/
function genereTableauAleatoire() {
    var tab = [];
    var nbImagePosition = [0, 0, 0, 0, 0, 0, 0, 0];

    for (let i = 0; i < 4; i++) {
        var ligne = [];
        for (let j = 0; j < 4; j++) {
            var fin = false;
            while (!fin) {
                var randomImage = Math.floor(Math.random() * 8);
                if (nbImagePosition[randomImage] < 2) {
                    ligne.push(randomImage + 1);
                    nbImagePosition[randomImage]++;
                    fin = true;
                }
            }
        }
        tab.push(ligne);
    }

    return tab;
}