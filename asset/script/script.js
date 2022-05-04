// Fonction qui permet d'ajouter une option à au select ayant pour id : "liste_cat"
function addOption(text, value){
    const select = document.getElementById("liste_cat");
    const newOption = new Option(text, value);
    select.options.add(newOption);
}

