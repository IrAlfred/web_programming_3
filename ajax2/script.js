//setInterval(Afficher, 500);
window.addEventListener("load", function(){
    Afficher();
});

let frm = document.getElementById("myform");

frm.addEventListener("submit", function(e){
    // empecher la page de se récharger
    e.preventDefault();

    let request = new XMLHttpRequest();
    request.open("POST", "process.php", true);
    request.onload = function(){
        if(this.status == 200 && this.readyState==4)
        {
            //Afficher la reponse à la console
            //alert(this.responseText);
            let msg = document.getElementById("msg");
            msg.innerHTML = this.responseText;
            Afficher();
        }
    }
    let data = new FormData(frm);
    request.send(data);
});

// let btn = document.getElementById("btn");
// btn.addEventListener("click", Afficher);

function Afficher(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "getUsers.php", true);
    xhr.onload = function(){
        if(this.status==200){
           // console.log(JSON.parse(this.responseText));
           let users = JSON.parse(this.responseText);
            let tabcontent="";
           for(let i in users){
            tabcontent += '<tr>'+
                '<td>'+users[i].id + '</td>'+
                '<td>'+users[i].nom + '</td>'+
                '<td>'+users[i].postnom +'</td>'+
                '</tr>';
           }
           document.getElementById("mytable").innerHTML = tabcontent;
        }
    }
    xhr.send();
}

document.getElementById("search").addEventListener("input", function(e){
    //let frm = document.getElementById("search_form");
    let search = e.target.value;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "getUsers.php?search="+search, true);
    xhr.onload = function(){
        if(this.status==200){
           // console.log(JSON.parse(this.responseText));
           let users = JSON.parse(this.responseText);
            let tabcontent="";
           for(let i in users){
            tabcontent += '<tr>'+
                '<td>'+users[i].id + '</td>'+
                '<td>'+users[i].nom + '</td>'+
                '<td>'+users[i].postnom +'</td>'+
                '</tr>';
           }
           document.getElementById("mytable").innerHTML = tabcontent;
        }
    }
    xhr.send();
})