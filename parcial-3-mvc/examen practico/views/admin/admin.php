<!--Denisse Carolina Navarro Garcia-->
<?php
    require_once ("../admin/template/header.php");
?>
<div class="mx-auto p-5">
    <div class="card text-center">
    <div class="card-header">
        MENU
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            CREAR TORNEO
                        </div>
                        <div class="card-body">
                            <a href="frmTorneos.php" class="btn btn-primary">
                                <img src="../img/torneo-admin.png" alt="Crear un torneo." width="180"
                                height="180">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            LISTA DE TORNEOS
                        </div>
                        <div class="card-body">
                            <a href="readAllTorneos.php" class="btn btn-primary">
                                <img src="../img/lista-torneos-admin.png" alt="Listar torneos." width="180"
                                height="180">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            ESTADISTICAS
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            ANUNCIOS
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                
            </div>
    </div>
    <div class="card-footer text-body-secondary">
        Configuracion de torneos. Web App Basket-Ball.
    </div>
    </div>
</div>
<?php
    require_once ("../admin/template/footer.php");
?>