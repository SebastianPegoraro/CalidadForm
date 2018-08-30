<header class='MasterHead'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-1'>
                <img src='img/logo-sgt.png' alt='' id='logoSGT'>
            </div>
            <div class='col-8 col-md-7'>
                <h4 class='titleHead regular'>Gestión de Oficinas SGT</h4>
            </div>
            <div class='col-4 align-self-end'>
                <h6 class='titleHead regular codificacion'> FO-02-113-001 </h6>
            </div>
        </div>
    </div>
</header>
<br><br>
<section>
    <div class='container content'>
        <div class='row'>
            <div class='col'>
                <!--<h2 class='title book'> Jurisdicción </h2>-->
                <form action=''>

                    <div class='row'>
                        <div class='form-group col-sm-12'>
                            <h4 class='book'>Autoridad solicitante</h4>
                        </div>
                        <div class='form-group col-sm-3'>
                            <label>N° Jurisdicción</label>
                            <input type='text' class='form-control' name='numeroJur' placeholder='Número Jurisdicción' id='numeroJur'>
                        </div>
                        <div class='form-group col-sm-9'>
                            <label>Denominación</label>  
                            <input type='text' class='form-control' name='denominacion' placeholder='Denominacion de Oficina' id='denominacionJur'>
                        </div>
                        <div class='form-group col-sm-6'>
                            <label> Nombre y Apellido</label>
                            <input type='text' class='form-control' name='nomyape' id='nomyape' placeholder='Nombre y Apellido'>
                            <small>Director o Responsable</small>
                        </div>
                        <div class='form-group col-sm-6'>
                            <label> Oficina </label>
                            <input type='text' class='form-control' name='oficina' id='oficina' placeholder='Oficina'>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> Correo/Teléfono</label>
                            <input type='text' class='form-control' name='correotel' id='correotel' placeholder='Correo Electrónico o Teléfono'>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> D.N.I. </label>
                            <input type='text' class='form-control' name='dni' id='dni' placeholder='D.N.I.'>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> Fecha </label>
                            <input type='text' class='form-control' name='fecha' id='fecha' placeholder='Fecha' disabled>
                        </div>
                    </div>

                    <div class='card' id='tramite'>
                        <div class='card-body'>
                            <div class='form-group col-sm-12'>
                                <h4 class='book'> Se solicita: </h4>
                            </div>
                            <div class='row cuadro'>

                                <div class='form-group col-sm-12'>
                                    <h5 class='book'> OFICINA </h5>
                                    <h5 class='book'> CUOF - ANEXO - UNGI </h5>
                                    <small>Oficina sobre la que solicita que se realice alguna gestión en SGT</small>
                                </div>
                                <div class='form-group col-sm-3'>
                                    <label>Número</label>
                                    <input type='text' class='form-control' name='numeroOficina[]' placeholder='Número' id='numeroOficina'>
                                </div>
                                <div class='form-group col-sm-9'>
                                    <label>Denominación</label>  
                                    <input type='text' class='form-control' name='denominacionOficina[]' placeholder='Denominacion de Oficina' id='denominacionOficina'>
                                </div>

                                <div class='form-group col-sm-12'>
                                    <h5 class='book'> GESTIÓN QUE SOLICITA </h5>
                                    <small>Seleccione la opción que requiera</small>
                                </div>
                                <div class='form-group form-check col-sm-4'>
                                    <input class='form-check-input' type='radio' name='gestion[]' id='habilitar' value='habilitar'>
                                    <label class='form-check-label' for='habilitar'> Habilitar </label>
                                </div>
                                <div class='form-group col-sm-8'>
                                    <select class='custom-select' name='solicita[]'>
                                        <option selected disabled>Categoria Solicitada</option>
                                        <option value='mes'>Mesa de Entrada y Salida</option>
                                        <option value='me'>Mesa de Entrada</option>
                                        <option value='ms'>Mesa de Salida</option>
                                        <option value='or'>Oficina de Registro</option>
                                        <option value='oso'>Oficina sin Operador</option>
                                        <option value='meso'>Mesa de Entrada sin Operador</option>
                                    </select>
                                </div>
                                <div class='form-group form-check col-sm-4'>
                                    <input class='form-check-input' type='radio' name='gestion[]' id='modificar' value='modificar'>
                                    <label class='form-check-label' for='modificar'> Modificar Categoria </label>
                                </div>
                                <div class='form-group col-sm-8'>
                                    <select class='custom-select' name='solicita[]'>
                                        <option selected disabled>Categoria Solicitada</option>
                                        <option value='mes'>Mesa de Entrada y Salida</option>
                                        <option value='me'>Mesa de Entrada</option>
                                        <option value='ms'>Mesa de Salida</option>
                                        <option value='or'>Oficina de Registro</option>
                                        <option value='oso'>Oficina sin Operador</option>
                                        <option value='meso'>Mesa de Entrada sin Operador</option>
                                    </select>
                                </div>
                                <div class='form-group form-check col-sm-4'>
                                    <input class='form-check-input' type='radio' name='gestion[]' id='inhabilitar' value='inhabilitar'>
                                    <label class='form-check-label' for='inhabilitar'> Inhabilitar </label>
                                </div>
                                <div class='form-group col-sm-8'>                                    
                                    <input type='text' class='form-control' name='udni[]' placeholder='CUOF'>
                                    <small> Especificar CUOF destino </small>
                                </div>

                            </div>              
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-12 text-right'>
                            <input type='submit' value='Imprimir' class='btn btn-outline-primary boton'>
                        </div>            
                    </div>
                </form>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-5'>
                <a href='index.php' class='btn btn-outline-secondary boton'><i class='fas fa-arrow-left'></i> Volver </a>
            </div>
            <div class='col-sm-7'>
                <button class='btn btn-outline-success boton' onclick='add_row();'> Agregar otro... </button>
            </div>            
        </div>
    </div>
</section>

<script src='js/agregaOficina.js'></script>

<?php
include 'foot.php';
?>