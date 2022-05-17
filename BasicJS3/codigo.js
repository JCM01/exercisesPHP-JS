function mostrar()
{
    console.log("funcion mostrar");
}

function calcularFactura()
{
    var unidades=window.prompt("cuántas unidades");
    var precio=window.prompt("dime el precio");
    var descuento;
    if(unidades>100)
    {
        descuento=0.2;
    }
    else{
        descuento=0.1;
    }
    var total=unidades*precio*(1-descuento);
    window.alert("total factura "+total);
}
function verDireccion()

    //en un prompt pregunta de qué ciudad quieres la dirección 
    window.prompt("¿De qué ciudad desea nuestra dirección?");
    // si la ciudad es madrid
    var direccionMadrid="calle Arenal, 8 28001 Madrid"
    // si la ciudad es sevilla, la direccion es otra

    var direccion;
    
if(ciudad=="madrid")
{
   direccion="calle Arenal,8 28001 Madrid"; 
}
else if(ciudad=="sevilla")
{
    direccion="calle triana 10,65495 Sevilla";
}
else
{
    direccion="no tengo esa ciudad"
}

//si la ciudad es sevilla, la dirección es otra
window.alert(direccion);

function verPares()
{
//bucles: for, foreach, for in, while, do while...
for(i=0;i<100;i+2)
{
    if(i!=20){
        console.log(i);
    }
}
} //cierra function

function comprobar(){
    //manipular DOM document object model
    //librerías (js) con funciones ya creadas que mejoran esto:jquery
    var numero=document.getElementById("numero").nodeValue;
    console.log (numero);

}//cierra function