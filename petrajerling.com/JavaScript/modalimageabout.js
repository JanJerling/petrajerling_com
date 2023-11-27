//Petra
var modalp = document.getElementById('Modalp');

var imgp= document.getElementById('petraImage');
var modalImgp= document.getElementById("imgp");

imgp.onclick = function(){
    modalp.style.display = "block";
    modalImgp.src = this.src;
}

var span = document.getElementsByClassName("close") [0];

span.onclick = function() { 
    modalp.style.display = "none";
}







