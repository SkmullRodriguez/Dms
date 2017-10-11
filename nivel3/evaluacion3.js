window.onload=function(){ 
    ocultarFor1();
    
    btnSig=document.getElementById('btnH');
    btnSig.addEventListener('click', siguiente1);
    
    btnSigue=document.getElementById('btn1');
    btnSigue.addEventListener('click', siguiente2); 
   
    btnSigue1=document.getElementById('btn2');
    btnSigue1.addEventListener('click', siguiente3);
    
    btnSigue2=document.getElementById('btn3');
    btnSigue2.addEventListener('click', siguiente4);
    
    btnSigue3=document.getElementById('btn4');
    btnSigue3.addEventListener('click', siguiente5);
    
    btnRe=document.getElementById('btn5');
    btnRe.addEventListener('click', nivel);
    
    btnRe1=document.getElementById('btn6');
    btnRe1.addEventListener('click', Redire1);
    
};
function nivel(){
    window.location.replace("http://localhost:8080/integrador/nivel4/introduccion.php");
}
function Redire1(){
    window.location.replace("http://localhost:8080/integrador/nivel3/iniciar.php");
}

function ocultarFor1(){    
    document.getElementById("form1").style.display="block";
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="none";
    document.getElementById("form4").style.display="none";
    document.getElementById("form5").style.display="none";
    document.getElementById("form6").style.display="none";
    }
function siguiente1(){
    document.getElementById("form1").style.display="none";
    document.getElementById("form2").style.display="block";
    document.getElementById("form3").style.display="none";
    document.getElementById("form4").style.display="none";
    document.getElementById("form5").style.display="none";
    document.getElementById("form6").style.display="none";
    }
    
function siguiente2(){
    document.getElementById("form1").style.display="none";
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="block";
    document.getElementById("form4").style.display="none";
    document.getElementById("form5").style.display="none";
    document.getElementById("form6").style.display="none";
    }

function siguiente3(){
    document.getElementById("form1").style.display="none";
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="none";
    document.getElementById("form4").style.display="block";
    document.getElementById("form5").style.display="none";
    document.getElementById("form6").style.display="none";
    }
    
function siguiente4(){
    document.getElementById("form1").style.display="none";
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="none";
    document.getElementById("form4").style.display="none";
    document.getElementById("form5").style.display="block";
    document.getElementById("form6").style.display="none";
    }

function siguiente5(){
    document.getElementById("form1").style.display="none";
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="none";
    document.getElementById("form4").style.display="none";
    document.getElementById("form5").style.display="none";
    document.getElementById("form6").style.display="block";
    }