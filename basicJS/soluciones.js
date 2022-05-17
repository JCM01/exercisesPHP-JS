function calcular()
{
    let unidades=document.getElementById("unidades").value;
    let precio=document.getElementById("precio").value;
    console.log("total sin iva "+unidades*precio);
    console.log("iva incluido "+unidades*precio*1.21);
}

function comprobar()
{
    let inicial=document.getElementById("inicial").value;
    let final=document.getElementById("final").value;
    
    console.log("comprobar");
    if(final>inicial)
    document.getElementById("btn1").disabled=false;
    else
    window.alert("el numero inicial debe ser el menor");
}

function verNumeros()
{
    let inicial=document.getElementById("inicial").value;
    let final=document.getElementById("final").value;

    for(let i=inicial;i<=final;i++)
    {
        if(i!=20)
        console.log(i);
    }
}


function verFecha()
{
    let ciudad=document.getElementById("ciudad").value;
    
    if(ciudad.toLowerCase()=="madrid"){
    console.log("la fecha de inicio es 01-12-2020");
    }
    else{
    console.log("la fecha de inicio es 15-12-2020");
    }
}