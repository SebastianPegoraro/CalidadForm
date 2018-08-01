<header class="MasterHead">
    <div class='container'>
        <div class='row'>
            <div class='col-8'>
                <h4 class="titleHead regular">Gestión de Trámites</h4>
            </div>
            <div class='col-4 align-self-end'>
                <h6 class="titleHead regular codificacion"> FO-02-113-003 </h6>
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
                        <div class='form-group col-sm-3'>
                            <label>N° Jurisdicción</label>
                            <input type='text' class='form-control' name='numero' placeholder='Número Jurisdicción'>
                        </div>
                        <div class='form-group col-sm-9'>
                            <label>Denominación</label>  
                            <input type='text' class='form-control' name='denominacion' placeholder='Denominacion de Oficina'>
                        </div>
                    </div>

                    <div class='card' id='tramite'>
                        <div class='card-body'>
                            <div class='form-group col-sm-12'>
                                <h4 class="book">Trámite</h4>
                            </div>
                            <div class='row cuadro'>                                
                                <div class='form-group col-sm-2'>
                                    <label> ACCIÓN (1) </label>
                                    <select class='custom-select' name='accion[]'>
                                        <option selected disabled>Acción</option>
                                        <option value='IT'>IT</option>
                                        <option value='IC'>IC</option>
                                        <option value='MT'>MT</option>
                                        <option value='ET'>ET</option>
                                        <option value='EC'>EC</option>
                                    </select>
                                </div>
                                <div class='form-group col-sm-5'>
                                    <label> ASUNTO (2) </label>  
                                    <input type='text' class='form-control' name='asunto[]' placeholder='Asunto'>
                                </div>
                                <div class='form-group col-sm-5'>
                                    <label> CAUSA (3) </label>  
                                    <input type='text' class='form-control' name='causa[]' placeholder='Causa'>
                                </div>
                                <div class='form-group col-sm-12'>
                                    <label> DESCRIPCIÓN (4) </label>
                                    <textarea class='form-control' placeholder='Descripción' name='descripcion[]' rows='2'></textarea>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> CAMPO (5) </label>  
                                    <input type='text' class='form-control' name='campo1[]' placeholder='Something'>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> CAMPO (6) </label>  
                                    <input type='text' class='form-control' name='campo2[]' placeholder='Something'>
                                </div>
                                <div class='form-group col-sm-4'>
                                    <label> CAMPO (7) </label>  
                                    <input type='text' class='form-control' name='campo3[]' placeholder='Something'>
                                </div>
                            </div>              
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <h4 class="book">Responsable</h4>
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
                            <input type="text" class='form-control' name="fecha" id="fecha" placeholder="Fecha">
                        </div>
                    </div>

                    
                    <div class='row'>
                        <div class='col-12'>
                            <input type='submit' value='Imprimir' class='btn btn-outline-primary boton'>
                        </div>            
                    </div>
                </form>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <button class='btn btn-outline-success boton' onclick='add_row();'> Agregar otro... </button>
            </div>
        </div>
    </div>
</section>

<script src='js/agregar.js'></script>

<?php
include 'foot.php';
?>