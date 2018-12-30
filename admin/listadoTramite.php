<?php
require_once '../clases/Accion.php';
require_once '../clases/Jurisdiccion.php';
require_once '../clases/Responsable.php';

$accionesTramites = Accion::showTramites();

?>

<header class='MasterHead'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-1'>
                <img src='../img/logo-sgt.png' alt='' id='logoSGT'>
            </div>
            <div class='col-8 col-md-7'>
                <h4 class='titleHead regular'>Listado de Tramites</h4>
            </div>
        </div>
    </div>
</header>
<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="card col">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Denominacion </th>
                                    <th> Nombre y Apellido </th>
                                    <th> Oficina </th>
                                    <th> Realizado </th>
                                    <th> Ver </th>
                                </tr>
                            </thead>
                            <?php
                            foreach($accionesTramites as $contenido){
                                $jurisdiccion = Jurisdiccion::buscarPorId($contenido['id_jurisdiccion']);
                                $responsable = Responsable::buscarPorId($contenido['id_responsable']);
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $jurisdiccion->getDenominacion(); ?></td>
                                        <td><?php echo $responsable->getNombre(); ?></td>
                                        <td><?php echo $responsable->getOficina(); ?></td>
                                        <td><?php echo $responsable->getFecha(); ?></td>
                                        <td><a href="verTramite.php?res=<?php echo $contenido['id_responsable'] ?>&jur=<?php echo $contenido['id_jurisdiccion'] ?>" class="btn btn-outline-primary"><i class="far fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class='col-sm-12'>
                <a href="index.php" class='btn btn-outline-secondary boton'><i class="fas fa-arrow-left"></i> Volver </a>
            </div>
        </div>
    </div>
</section>

<?php
include 'foot.php';
?>