<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Editar modelo</h1>
            </div>
            <form action="<?= base_url('modelo/atualizar_modelo') ?>" method="post">
                <div class="form-group">
                    <label class="col-6">Modelo:
                        <input class="col-12" type="text" id="nome_modelo" name="nome_modelo" value="<?= $modelo->nome_modelo ?>">
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-6">Marca:
                        <select class="col-12" id="marca_modelo" name="marca_modelo" required>
                        <?php  $selecionado = $modelo->id_marca; ?>

                            <option value="">- Selecione -</option>
                            <?php foreach($marcas as $marca): ?>
                                <?php $esse = ($selecionado == $marca->id_marca)?"selected":""; ?>
                                <option value="<?= $marca->id_marca?>" <?= $esse?> ><?= $marca->nome_marca?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
                <input type="hidden" id="id_modelo" name="id_modelo" value="<?= $modelo->id_modelo ?>">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?= base_url('modelo')?>">cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>