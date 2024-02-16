// Abassi Fedi 2A24

/// Exercice 1

function calcul(x, y) {
    var pi = 3.14;
    if (x > 0) {
        return (x + y) * pi;
    } else {
        return y * pi;
    }
}

//les erreurs que j'ai corrigé sont au niveau de la 1ére ligne de code ou j'ai remplacé def calcul = function(x,y) par la syntaxe correcte , 
//de plus la structure conditionelle est mal définie avec ":" et je les ai remplacé par les expressions convenables , il faut noter bien que ces erreurs de syntaxe et d'optimisation
//sont a l'origine des erreurs d'exécution que j'ai rencontré lors de ma premiére compilation du code.

/// Exercice 2

function Nombres_parfait(n) {
    for (let num = 2; num < n; num++) {
        let countdiv = 0;
        for (let i = 1; i < num; i++) {
            if (num % i === 0) {
                countdiv += i;
            }
        }
        if (countdiv === num) {
            console.log(num);
        }
    }
}

/// Exercice 3

function fusion(ch1,ch2){

let list=[];
for(let char1 of ch1){
    for(let char2 of ch2){
        list.push(char1+char2);
    }
}
console.log(list);
}

/// Exercice 4

function tableau(T){

T.sort((a,b)=>a-b);
console.log("tableau trié",T);
T.push(12);
console.log(T);
T.reverse();
console.log("tableau inversé",T);
console.log("indice de l'élement 17",T.indexOf(17));

T.splice(T.indexOf(38),1);
console.log("tableau avec suppression de l'élement 38",T);
let T1 = T.slice(1,3);
console.log("sous-tableau 1",T1);
let T2 = T.slice(0,2);
console.log("sous-tableau 2",T2);
let T3 = T.slice(2);
console.log("sous-tableau 3",T3);

}

/// Exercice 5

function entierAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function guess(x){

    let essais = 3 ;
    
    while(essais > 0 ){
        let choix = parseInt(prompt("Donner un nombre entre 0 et 10"));
        if(choix === x){
            alert("Bravo !");
            break;
        } else{ essais--; 
            if(essais > 0){
            alert("Incorrect ! il vous reste "+essais+" essais");}
           else{ alert("Vous avez epuisé tous vos essais ! le nombre était" + x);}
        
    }
}
    }

    /// Exercice 6

    // voir fichiers ex6.js et ex6.html 