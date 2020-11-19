var num=1;

function adelante()
{
    num++;
    if(num>5)
      num=1;
        var foto=document.getElementById("foto");
        foto.src="foto"+num+".jpg";
    
}

function anterior()
{
    num--;
    if(num<1)
      num=5;
        var foto=document.getElementById("foto");
        foto.src="foto"+num+".jpg";
    
}