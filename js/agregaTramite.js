function add_row(){
    $rowno=$("#tramite .row").length;
    $rowno=$rowno+1;
    $("#tramite .row:last").after("<hr><div class='row cuadro' id='row"+$rowno+"'><div class='form-group col-sm-2'> <label> ACCIÓN (1) </label> <select class='custom-select' name='accion[]' required> <option selected disabled>Acción</option> <option value='Incorporar Trámite'>Incorporar Trámite</option> <option value='Incorporar Causa'>Incorporar Causa</option> <option value='Modificar Trámite'>Modificar Trámite</option> <option value='Eliminar Trámite'>Eliminar Trámite</option> <option value='Eliminar Causa'>Eliminar Causa</option> </select> </div> <div class='form-group col-sm-5'> <label> ASUNTO (2) </label> <input type='text' class='form-control' name='asunto[]' placeholder='Asunto' required> </div> <div class='form-group col-sm-5'> <label> CAUSA (3) </label> <input type='text' class='form-control' name='causa[]' placeholder='Causa' required> </div> <div class='form-group col-sm-12'> <label> DESCRIPCIÓN (4) </label> <textarea class='form-control' placeholder='Agregue una descripción del Trámite' name='descripcion[]' rows='2' required></textarea> </div><div class='form-group col-sm-12 text-right'> <button class='btn btn-outline-danger boton btn-sm' onclick=delete_row('row"+$rowno+"')> Borrar </button></div></div>");
    //$("#tramite .row:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name'></td><td><input type='text' name='age[]' placeholder='Enter Age'></td><td><input type='text' name='job[]' placeholder='Enter Job'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}

function delete_row(rowno){
    $('#'+rowno).remove();
}