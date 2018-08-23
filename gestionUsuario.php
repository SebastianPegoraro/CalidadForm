<header class="MasterHead">
    <div class='container'>
        <div class='row'>
            <div class='col-8'>
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
        <div class='row'>
            <div class='col'>
                <!--<h2 class='title book'> Jurisdicción </h2>-->
                <form action=''>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <h4 class="book">Autoridad solicitante</h4>
                        </div>
                        <div class='form-group col-sm-3'>
                            <label>N° Jurisdicción</label>
                            <input type='text' class='form-control' name='numero' placeholder='Número Jurisdicción' id='numeroJur'>
                        </div>
                        <div class='form-group col-sm-9'>
                            <label>Denominación</label>  
                            <input type='text' class='form-control' name='denominacion' placeholder='Denominacion de Oficina' id='denominacionJur'>
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Nombre y Apellido</label>
                            <input type="text" class='form-control' name="nomyape" id="nomyape" placeholder="Nombre y Apellido">
                            <small>Director o Responsable</small>
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Oficina </label>
                            <input type="text" class='form-control' name="oficina" id="oficina" placeholder="Oficina">
                        </div>
                        <div class="form-group col-sm-4">
                            <label> Correo/Teléfono</label>
                            <input type="text" class='form-control' name="correotel" id="correotel" placeholder="Correo Elctrónico o Teléfono">
                        </div>
                        <div class="form-group col-sm-4">
                            <label> D.N.I. </label>
                            <input type="text" class='form-control' name="dni" id="dni" placeholder="D.N.I.">
                        </div>
                        <div class="form-group col-sm-4">
                            <label> Fecha </label>
                            <input type="text" class='form-control' name="fecha" id="fecha" placeholder="Fecha" disabled>
                        </div>
                    </div>

                    <div class='card' id='tramite'>
                        <div class='card-body'>
                            <div class='form-group col-sm-12'>
                                <h4 class="book"> Se solicita: </h4>
                            </div>
                            <div class='row cuadro'>

                                <div class='form-group col-sm-2'>
                                    <label> D.N.I. </label>
                                    <input type='text' class='form-control' name='udni[]' placeholder='D.N.I.'>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> Apellido y Nombre </label>  
                                    <input type='text' class='form-control' name='nomyape[]' placeholder='Apellido y Nombre'>
                                </div>
                                <div class='form-group col-sm-2'>
                                    <label> Teléfono / Celular </label>  
                                    <input type='text' class='form-control' name='tel[]' placeholder='Teléfono / Celular'>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> Correo Electrónico </label>
                                    <input type='email' class='form-control' name='email[]' placeholder='Correo Electrónico'>
                                </div>
                                <!-- Oficina -->        
                                <div class='form-group col-sm-3'>
                                    <label> CUOF - ANEXO - UNGI </label>  
                                    <input type='text' class='form-control' name='cuof[]' placeholder='CUOF - ANEXO - UNGI'>
                                </div>
                                <div class='form-group col-sm-9'>
                                    <label> Denominación </label>  
                                    <input type='text' class='form-control' name='udenominacion[]' placeholder='Denominación'>
                                </div>
                                <!-- Se solicita -->
                                <div class='form-group col-sm-2 offset-sm-2'>
                                    <label> Solicita </label>  
                                    <select class='custom-select' name='solicita[]'>
                                        <option selected disabled>Solicita</option>
                                        <option value='habilitar'>Habilitar</option>
                                        <option value='modificar'>Modificar</option>
                                        <option value='baja'>Baja</option>
                                    </select>
                                </div>
                                <!-- Perfil -->
                                <div class='form-group col-sm-2 offset-sm-4'>
                                    <label> Perfil </label>  
                                    <select class='custom-select' name='perfil[]'>
                                        <option selected disabled>Perfil</option>
                                        <option value='consulta'>Consulta</option>
                                        <option value='operadorME'>Operador Mesa de Entrada</option>
                                        <option value='operadorMER'>Operador Mesa de Entrada y Reasigna</option>
                                        <option value='operadorR'>Operador de Registro</option>
                                        <option value='operadorRR'>Operador de Registro y Reasigna</option>
                                    </select>
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