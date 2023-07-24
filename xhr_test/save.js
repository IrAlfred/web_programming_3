let myForm = document.getElementById("myForm");
myForm.addEventListener("submit", function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "form1_post.php", true);
    xhr.onload = function(){
        console.log(xhr.responseText);
    }
    let frmData = new FormData(myForm);
    xhr.send(frmData);
});