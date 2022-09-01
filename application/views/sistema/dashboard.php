<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <button class="btn btn-primary col-lg-2" type="button">Clientes
                <br>
                <span class="badge badge-light"><?= $clientes ?></span>
            </button>
            <button class="btn btn-info col-lg-2" type="button">Serviços
                <br>
                <span class="badge badge-light"><?= $servicos ?></span>
            </button>
            <button class="btn btn-success col-lg-2" type="button">Marcas
                <br>    
                <span class="badge badge-light"><?= $marcas ?></span>
            </button>
            <button class="btn btn-danger col-lg-2" type="button">Modelos
                <br>    
                <span class="badge badge-light"><?= $modelos ?></span>
            </button>
        </div>
    </div>
</div>