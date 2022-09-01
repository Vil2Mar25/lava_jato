<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Editar marca</h1>
            </div>
            <form action="<?= base_url('marca/atualizar_marca') ?>" method="post">
                <div class="form-group">
                    <label class="col-6">Marca:
                        <input class="col-12" type="text" id="nome_marca" name="nome_marca" value="<?= $marca->nome_marca?>">
                    </label>
                </div>

                <input class="col-12" type="hidden" id="id_marca" name="id_marca" value="<?= $marca->id_marca?>">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?= base_url('marca')?>">cancelar</a>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>