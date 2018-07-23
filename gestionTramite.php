<?php
include 'base.html';
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Gestión de Trámites</h2>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center"> Jurisdicción </h3>
                <form action="">
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label>N°</label>
                            <input type="text" class="form-control" name="num" id="num" placeholder="Número">
                        </div>
                        <div class="form-group col-sm-9">
                            <label>Denominación</label>  
                            <input type="text" class="form-control" name="denominacion" id="denominacion" placeholder="Denominacion de Oficina">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-sm-2">
                                    <label> ACCIÓN (1) </label>
                                    <select class="custom-select" name="accion" id="accion">
                                        <option selected disabled>Acción</option>
                                        <option value="IT">IT</option>
                                        <option value="IC">IC</option>
                                        <option value="MT">MT</option>
                                        <option value="ET">ET</option>
                                        <option value="EC">EC</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-5">
                                    <label> ASUNTO (2) </label>  
                                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto">
                                </div>
                                <div class="form-group col-sm-5">
                                    <label> CAUSA (3) </label>  
                                    <input type="text" class="form-control" name="causa" id="causa" placeholder="Causa">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label> DESCRIPCIÓN (4) </label>
                                    <textarea class="form-control" placeholder="Descripción" name="descripcion" id="descripcion" rows="4"></textarea>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Imprimir" class="btn btn-outline-primary">
                        </div>            
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <button class="btn btn-outline-success plus"> Agregar otro... </button>
            </div>
        </div>
    </div>
</section>

<script src="js/agregar.js"></script>

<?php
include 'foot.php';
?>