function myFunction() {
    alert("se enviado tu sugerencia");
  }

var num=1;

function adelante()
{
    num ++;
    if(num>5)
    {   
        var foto=document.getElementById("foto");
        foto.src="foto"+num+".jpg";
    }
}

function anterior()
{
    num --;
    if(num<1)
    {   num=5;
        var foto=document.getElementById("foto");
        foto.src="foto"+num+".jpg";
    }
}