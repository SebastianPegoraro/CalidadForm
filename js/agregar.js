function add_row(){
    $rowno=$("#tramite .row").length;
    $rowno=$rowno+1;
    $("#tramite .row:last").after("<div class='row cuadro'><div class='form-group col-sm-2'> <label> ACCIÓN (1) </label> <select class='custom-select' name='accion' id='accion'><option selected disabled>Acción</option><option value='IT'>IT</option><option value='IC'>IC</option><option value='MT'>MT</option><option value='ET'>ET</option><option value='EC'>EC</option> </select></div><div class='form-group col-sm-5'> <label> ASUNTO (2) </label> <input type='text' class='form-control' name='asunto' id='asunto' placeholder='Asunto'></div><div class='form-group col-sm-5'> <label> CAUSA (3) </label> <input type='text' class='form-control' name='causa' id='causa' placeholder='Causa'></div><div class='form-group col-sm-12'> <label> DESCRIPCIÓN (4) </label><textarea class='form-control' placeholder='Descripción' name='descripcion' id='descripcion' rows='4'></textarea></div><div class='form-group col-sm-4'> <label> CAMPO (5) </label> <input type='text' class='form-control' name='campo' id='campo' placeholder='Something'></div><div class='form-group col-sm-4'> <label> CAMPO (6) </label> <input type='text' class='form-control' name='campo' id='campo' placeholder='Something'></div><div class='form-group col-sm-4'> <label> CAMPO (7) </label> <input type='text' class='form-control' name='campo' id='campo' placeholder='Something'></div></div>");
    //$("#tramite .row:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name'></td><td><input type='text' name='age[]' placeholder='Enter Age'></td><td><input type='text' name='job[]' placeholder='Enter Job'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}

function delete_row(rowno){
    $('#'+rowno).remove();
}