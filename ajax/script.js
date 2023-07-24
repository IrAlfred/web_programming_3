let frm = document.getElementById("myform");
frm.addEventListener("submit", Enregistrer);
let nom = document.getElementById("nom");
let postnom = document.getElementById("postnom");

function Enregistrer(e)
{
    //console.log(nom.value + " "+postnom.value);
    e.preventDefault();
    
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "traitement.php?nom="+nom.value+"&postnom="+postnom.value, true);

    xhr.onload = function(){
        if(this.status == 200){
            console.log(this.responseText);
            nom.value = "";
            postnom.value = "";
        }
    }
    xhr.send();
}