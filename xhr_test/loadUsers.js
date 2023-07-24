let btnLoadUsers = document.getElementById("loadUsers");
let usersDiv = document.getElementById("users");
btnLoadUsers.addEventListener("click", LoadUsersList);

function LoadUsersList(){
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "getusers.php", true);

    xhr.onload = function(){
        usersDiv.innerHTML = xhr.responseText;
    }

    xhr.send();
}

