<?php
require_once '../clases/Accion.php';
require_once '../clases/Responsable.php';
require_once '../clases/Jurisdiccion.php';
require_once '../clases/Tramite.php';

$idJurisdiccion = $_REQUEST['jur'];
$idResponsable = $_REQUEST['res'];

$listaTramites = Accion::findTramite($idResponsable, $idJurisdiccion);
$responsable = Responsable::buscarPorId($idResponsable);
$jurisdiccion = Jurisdiccion::buscarPorId($idJurisdiccion);
?>

<header class='MasterHead'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-1'>
                <img src='../img/logo-sgt.png' alt='' id='logoSGT'>
            </div>
            <div class='col-8 col-md-7'>
                <h4 class='titleHead regular'>Tramite</h4>
            </div>
        </div>
    </div>
</header>
<br><br>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-12 form-group">
                            <h4 class="book">Autoridad solicitante</h4>
                        </div>
                        <br><hr>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label><strong> N° Jurisdicción: </strong></label>
                                <label><?php echo $jurisdiccion->getNumero() ?></label>
                            </div>
                            <div class="form-group col-sm-9">
                                <label><strong> Denominación: </strong></label>
                                <label><?php echo $jurisdiccion->getDenominacion() ?></label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label><strong> Nombre y Apellido: </strong></label>
                                <label><?php echo $responsable->getNombre() ?></label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label><strong> Oficina </strong></label>
                                <label><?php echo $responsable->getOficina() ?></label>
                            </div> 
                            <div class="form-group col-sm-4">
                                <label><strong> Correo/Teléfono </strong></label>
                                <label><?php echo $responsable->getCorreoTel() ?></label>
                            </div> 
                            <div class="form-group col-sm-4">
                                <label><strong> D.N.I. </strong></label>
                                <label><?php echo $responsable->getDni() ?></label>
                            </div> 
                            <div class="form-group col-sm-4">
                                <label><strong> Fecha </strong></label>
                                <label><?php echo $responsable->getFecha() ?></label>
                            </div>
                        </div>                        
                    </div>                
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class='form-group col-sm-12'>
                            <h4 class="book"> Se solicita: </h4>
                        </div>
                        <br>
                        <?php 
                        foreach ($listaTramites as $idTramite) {
                            $tramite = Tramite::buscarPorId($idTramite[0]);
                            ?>
                            <hr>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label><strong> ACCION: </strong></label>
                                    <label><?php echo $tramite->getAccion() ?></label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label><strong> ASUNTO: </strong></label>
                                    <label><?php echo $tramite->getAsunto() ?></label>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label><strong> CAUSA: </strong></label>
                                    <label><?php echo $tramite->getCausa() ?></label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label><strong> DESCRIPCION: </strong></label>
                                    <label><?php echo $tramite->getDescripcion() ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <hr><br>
                            </div>
                            <?php
                        }
                        ?>                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="row text-center">
            <div class='col-sm-12'>
                <a href="listadoTramite.php" class='btn btn-outline-secondary boton'><i class="fas fa-arrow-left"></i> Volver </a>
            </div>
        </div>
    </div>
</section>

<?php
include 'foot.php';
?>