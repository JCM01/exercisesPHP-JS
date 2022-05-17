console.log("js funciona");
$("#contenido").append("un texto");
/*Acceso a datos : con jquery acceder a un fichero xml*/
/*Comunicacion sincronica : request - response. me tengo que esperar a la response*/
/*Comunicacion asincronica : request - response. NO me tengo que esperar a la response 
: la pagina NO se congela*/
/*request pedir un archivo xml para pintarlo en html: sincrono - asincrono*/
/*ajax : asincrono javascript xml : se puede hacer con jquery con una funcion llamada ajax*/
/*pedir el archivo xml con jquery con la funcion ajax y pintarlo en html*/
$.ajax({//comunicacion asincrona
    type: "GET",
    url: "data.xml",
    //data: "data",
    dataType: "xml",
    success: function (response) {//funcion anónima
        //console.log(response);
        var data = $('item', response).get();
        $(data).each(function () { 
             console.log($(this));
             var parrafo=document.createElement('h2');
             parrafo.append($(this).find('title').text());
             $("#contenido").append(parrafo);
             
             var descripcion=document.createElement('desc');
             descripcion.append($(this).find('desc').text());
             $("#contenido").append(descripcion);    

             var foto=document.createElement('img');
             foto.src=$(this).find('image').text();
             $("#contenido").append(foto);

             var enlace=document.createElement('a');
             enlace.append("pincha aqui");
             enlace.href=$(this).find('url').text();
             enlace.target="blank";
             $("#contenido").append(enlace);


             



        });
    }//cierra la función anónima
});