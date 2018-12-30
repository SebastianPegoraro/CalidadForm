<header class="MasterHead">
    <div class='container'>
        <div class='row'>
            <div class="col-md-1">
                <img src="img/logo-sgt.png" alt="" id="logoSGT">
            </div>
            <div class='col-8 col-md-7'>
                <h4 class="titleHead regular">Gestión de Usuarios SGT</h4>
            </div>
            <div class='col-4 align-self-end'>
                <h6 class="titleHead regular codificacion"> FO-02-113-002 </h6>
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
                    Usuario Guardado Correctamente!
                </div>
            </div>
            <?php
        }
        ?>

        <div class='row'>
            <div class='col'>
                <!--<h2 class='title book'> Jurisdicción </h2>-->
                <form action='./clases/guardaUsuario.php' method='post'>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <h4 class="book">Autoridad solicitante</h4>
                        </div>
                        <div class='form-group col-sm-3'>
                            <label>N° Jurisdicción</label>
                            <input type='text' class='form-control' name='numero' placeholder='Número Jurisdicción' id='numeroJur' required>
                        </div>
                        <div class='form-group col-sm-9'>
                            <label>Denominación</label>  
                            <input type='text' class='form-control' name='denominacion' placeholder='Denominacion de Oficina' id='denominacionJur' readonly required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Nombre y Apellido</label>
                            <input type="text" class='form-control' name="nomyape" id="nomyape" placeholder="Nombre y Apellido" required>
                            <small>Director o Responsable</small>
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Oficina </label>
                            <input type="text" class='form-control' name="oficina" id="oficina" placeholder="Oficina" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label> Correo/Teléfono</label>
                            <input type="text" class='form-control' name="correotel" id="correotel" placeholder="Correo Electrónico o Teléfono" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label> D.N.I. </label>
                            <input type="text" class='form-control' name="dni" id="dni" placeholder="D.N.I." required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label> Fecha </label>
                            <input type="text" class='form-control' name="fecha" id="fecha" readonly required>
                        </div>
                    </div>

                    <div class='card' id='tramite'>
                        <div class='card-body'>
                            <div class='form-group col-sm-12'>
                                <h4 class="book"> Se solicita: </h4>
                            </div>
                            <hr>
                            <div class='row cuadro'>

                                <div class='form-group col-sm-2'>
                                    <label> D.N.I. </label>
                                    <input type='text' class='form-control' name='udni[]' placeholder='D.N.I.' required>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> Apellido y Nombre </label>  
                                    <input type='text' class='form-control' name='nombreyapellido[]' placeholder='Apellido y Nombre' required>
                                </div>
                                <div class='form-group col-sm-2'>
                                    <label> Teléfono / Celular </label>  
                                    <input type='text' class='form-control' name='tel[]' placeholder='Teléfono / Celular' required>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> Correo Electrónico </label>
                                    <input type='email' class='form-control' name='email[]' placeholder='Correo Electrónico' required>
                                </div>
                                <!-- Oficina -->        
                                <div class='form-group col-sm-3'>
                                    <label> CUOF - ANEXO - UNGI </label>  
                                    <input type='text' class='form-control' name='cuof[]' placeholder='CUOF - ANEXO - UNGI' required>
                                </div>
                                <div class='form-group col-sm-9'>
                                    <label> Denominación </label>  
                                    <input type='text' class='form-control' name='udenominacion[]' placeholder='Denominación' required>
                                </div>
                                <!-- Se solicita -->
                                <div class='form-group col-sm-2 offset-sm-2'>
                                    <label> Solicita </label>  
                                    <select class='custom-select' name='solicita[]' required>
                                        <option selected disabled>Solicita</option>
                                        <option value='Habilitar'>Habilitar</option>
                                        <option value='Modificar'>Modificar</option>
                                        <option value='Baja'>Baja</option>
                                    </select>
                                </div>
                                <!-- Perfil -->
                                <div class='form-group col-sm-2 offset-sm-4'>
                                    <label> Perfil </label>  
                                    <select class='custom-select' name='perfil[]' required>
                                        <option selected disabled>Perfil</option>
                                        <option value='consulta'>Consulta</option>
                                        <option value='operadorME'>Operador Mesa de Entrada</option>
                                        <option value='operadorMER'>Operador Mesa de Entrada y Reasigna</option>
                                        <option value='operadorR'>Operador de Registro</option>
                                        <option value='operadorRR'>Operador de Registro y Reasigna</option>
                                    </select>
                                </div>

                            </div>
                            <hr>              
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
                <a href="index.php" class='btn btn-outline-secondary boton'><i class="fas fa-arrow-left"></i> Volver </a>
            </div>
            <div class='col-sm-7'>
                <button class='btn btn-outline-success boton' onclick='add_row();'> Agregar otro... </button>
            </div>            
        </div>
    </div>
</section>

<script src='js/agregaUsuario.js'></script>

<?php
include 'foot.php';
?>