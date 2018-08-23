$("#numeroJur").keyup(function(event) {
    $(this).removeClass("is-invalid");
    $.ajax({
        url: "clases/api.php?action=getJurName&numeroJur="+$("#numeroJur").val(),
        processData: false, 
        async:false,
        contentType: "application/json"
    }).done(function(data, textStatus, jqXHR){
        var obj = JSON.parse(data);//convertimos el resultado json en algo que el jquery pueda procesar (en un array)
        document.getElementById("denominacionJur").value = obj[0].denominacionJur;	
    });
 });