let txtElt = document.getElementById("text");
let secondElt = document.getElementById('textContent');

txtElt.addEventListener('input', function(e){
    let value = e.target.value;
    secondElt.innerText = value;
});