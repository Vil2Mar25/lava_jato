<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Editar servico</h1>
            </div>
            <form action="<?= base_url('servico/atualizar_servico') ?>" method="post">
                <div class="form-group">
                    <label class="col-8">Servico:
                        <input class="col-12" type="text" id="nome_servico" name="nome_servico" maxlength="60" value="<?= $servicos->nome_servico ?>">
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-8">Valor:
                        <input class="col-12" type="text" id="valor_servico" name="valor_servico" maxlength="8" value="<?= $servicos->valor_servico ?>">
                    </label>
                </div>
    
                <input class="col-12" type="hidden" id="id_servico" name="id_servico" value="<?= $servicos->id_servico ?>">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?= base_url('servico')?>">cancelar</a>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>