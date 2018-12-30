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

        <?php
        if (isset($_REQUEST['save'])) {
            ?>
            <div class="row">
                <div class="col-sm-12 alert alert-success text-center" role="alert">
                    Trámite de Oficina Guardado Correctamente!
                </div>
            </div>
            <?php
        }
        ?>

        <div class='row'>
            <div class='col'>
                <!--<h2 class='title book'> Jurisdicción </h2>-->
                <form action='./clases/guardaOficina.php' method='post'>

                    <div class='row'>
                        <div class='form-group col-sm-12'>
                            <h4 class='book'>Autoridad solicitante</h4>
                        </div>
                        <div class='form-group col-sm-3'>
                            <label>N° Jurisdicción</label>
                            <input type='text' class='form-control' name='numero' placeholder='Número Jurisdicción' id='numeroJur' required>
                        </div>
                        <div class='form-group col-sm-9'>
                            <label>Denominación</label>  
                            <input type='text' class='form-control' name='denominacion' placeholder='Denominacion de Oficina' id='denominacionJur' required readonly>
                        </div>
                        <div class='form-group col-sm-6'>
                            <label> Nombre y Apellido</label>
                            <input type='text' class='form-control' name='nomyape' id='nomyape' placeholder='Nombre y Apellido' required>
                            <small>Director o Responsable</small>
                        </div>
                        <div class='form-group col-sm-6'>
                            <label> Oficina </label>
                            <input type='text' class='form-control' name='oficina' id='oficina' placeholder='Oficina' required>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> Correo/Teléfono</label>
                            <input type='text' class='form-control' name='correotel' id='correotel' placeholder='Correo Electrónico o Teléfono' required>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> D.N.I. </label>
                            <input type='text' class='form-control' name='dni' id='dni' placeholder='D.N.I.' required>
                        </div>
                        <div class='form-group col-sm-4'>
                            <label> Fecha </label>
                            <input type='text' class='form-control' name='fecha' id='fecha' placeholder='Fecha' required readonly>
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
                                    <input type='text' class='form-control' name='numeroOficina' placeholder='Número' id='numeroOficina' required>
                                </div>
                                <div class='form-group col-sm-9'>
                                    <label>Denominación</label>  
                                    <input type='text' class='form-control' name='denominacionOficina' placeholder='Denominacion de Oficina' id='denominacionOficina' required>
                                </div>

                                <div class='form-group col-sm-12'>
                                    <h5 class='book'> GESTIÓN QUE SOLICITA </h5>
                                    <small>Seleccione la opción que requiera</small>
                                </div>
                                <div class='form-group form-check col-sm-4 text-center'>
                                    <input class='form-check-input' type='radio' name='gestion' id='habilitar' value='habilitar' required>
                                    <label class='form-check-label' for='habilitar'> Habilitar </label>
                                </div>
                                <div class='form-group col-sm-8'>
                                    <select class='custom-select' name='solicitahab' >
                                        <option selected disabled>Categoria Solicitada</option>
                                        <option value='Mesa de Entrada y Salida'>Mesa de Entrada y Salida</option>
                                        <option value='Mesa de Entrada'>Mesa de Entrada</option>
                                        <option value='Mesa de Salida'>Mesa de Salida</option>
                                        <option value='Oficina de Registro'>Oficina de Registro</option>
                                        <option value='Oficina sin Operador'>Oficina sin Operador</option>
                                        <option value='Mesa de Entrada sin Operador'>Mesa de Entrada sin Operador</option>
                                    </select>
                                </div>
                                <div class='form-group form-check col-sm-4 text-center'>
                                    <input class='form-check-input' type='radio' name='gestion' id='modificar' value='modificar' required>
                                    <label class='form-check-label' for='modificar'> Modificar </label>
                                </div>
                                <div class='form-group col-sm-8'>
                                    <select class='custom-select' name='solicitamod'>
                                        <option selected disabled>Categoria Solicitada</option>
                                        <option value='Mesa de Entrada y Salida'>Mesa de Entrada y Salida</option>
                                        <option value='Mesa de Entrada'>Mesa de Entrada</option>
                                        <option value='Mesa de Salida'>Mesa de Salida</option>
                                        <option value='Oficina de Registro'>Oficina de Registro</option>
                                        <option value='Oficina sin Operador'>Oficina sin Operador</option>
                                        <option value='Mesa de Entrada sin Operador'>Mesa de Entrada sin Operador</option>
                                    </select>
                                </div>
                                <div class='form-group form-check col-sm-4 text-center'>
                                    <input class='form-check-input' type='radio' name='gestion' id='inhabilitar' value='inhabilitar' required>
                                    <label class='form-check-label' for='inhabilitar'> Inhabilitar </label>
                                </div>
                                <div class='form-group col-sm-8'>                                    
                                    <input type='text' class='form-control' name='solicitainhab' placeholder='CUOF'>
                                    <small> Especificar CUOF destino </small>
                                </div>

                            </div>              
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-12 text-right'>
                        <input type='submit' value='Imprimir' name='guardar' class='btn btn-outline-primary boton'>
                        </div>            
                    </div>
                </form>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-5'>
                <a href='index.php' class='btn btn-outline-secondary boton'><i class='fas fa-arrow-left'></i> Volver </a>
            </div>          
        </div>
    </div>
</section>

<script src='js/agregaOficina.js'></script>

<?php
include 'foot.php';
?>