function add_row(){
    $rowno=$("#tramite .row").length;
    $rowno=$rowno+1;
    $("#tramite .row:last").after("<hr><div class='row cuadro' id='row"+$rowno+"'> <div class='form-group col-sm-2'> <label> D.N.I. </label> <input type='text' class='form-control' name='udni[]' placeholder='D.N.I.' required> </div> <div class='form-group col-sm-4'> <label> Apellido y Nombre </label> <input type='text' class='form-control' name='nombreyapellido[]' placeholder='Apellido y Nombre' required> </div> <div class='form-group col-sm-2'> <label> Teléfono / Celular </label> <input type='text' class='form-control' name='tel[]' placeholder='Teléfono / Celular' required> </div> <div class='form-group col-sm-4'> <label> Correo Electrónico </label> <input type='email' class='form-control' name='email[]' placeholder='Correo Electrónico' required> </div> <!-- Oficina --> <div class='form-group col-sm-3'> <label> CUOF - ANEXO - UNGI </label> <input type='text' class='form-control' name='cuof[]' placeholder='CUOF - ANEXO - UNGI' required> </div> <div class='form-group col-sm-9'> <label> Denominación </label> <input type='text' class='form-control' name='udenominacion[]' placeholder='Denominación' required> </div> <!-- Se solicita --> <div class='form-group col-sm-2 offset-sm-2'> <label> Solicita </label> <select class='custom-select' name='solicita[]' required> <option selected disabled>Solicita</option> <option value='Habilitar'>Habilitar</option> <option value='Modificar'>Modificar</option> <option value='Baja'>Baja</option> </select> </div> <!-- Perfil --> <div class='form-group col-sm-2 offset-sm-4'> <label> Perfil </label> <select class='custom-select' name='perfil[]' required> <option selected disabled>Perfil</option> <option value='consulta'>Consulta</option> <option value='operadorME'>Operador Mesa de Entrada</option> <option value='operadorMER'>Operador Mesa de Entrada y Reasigna</option> <option value='operadorR'>Operador de Registro</option> <option value='operadorRR'>Operador de Registro y Reasigna</option> </select> </div><div class='form-group col-sm-12 text-right'> <button class='btn btn-outline-danger boton btn-sm' onclick=delete_row('row"+$rowno+"')> Borrar </button></div></div>");
    //$("#tramite .row:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name'></td><td><input type='text' name='age[]' placeholder='Enter Age'></td><td><input type='text' name='job[]' placeholder='Enter Job'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}

function delete_row(rowno){
    $('#'+rowno).remove();
}