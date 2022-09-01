<div class="container-fluid">

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modelos cadastrados</h1>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar</a>
            </div>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Marca</th>
                        <th scope="col" class="w-25 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($modelos as $modelo) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $modelo->id_modelo ?></th>
                            <th scope="row"><?= $modelo->nome_modelo ?></th>
                            <td><?= $modelo->nome_marca ?></td>
                            <td  class="text-center">
                                <a type="button" class="btn btn-info" href="<?= base_url('modelo/editar_modelo/'.$modelo->id_modelo)?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('modelo/deletar_modelo/'.$modelo->id_modelo)?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar modelo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('modelo/adicionar_modelo') ?>" method="post">
                            <div class="form-group">
                                <label class="col-12">Modelo: 
                                    <input class="col-12" type="text" id="nome_modelo" name="nome_modelo" placeholder="Uno" required>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Marca:
                                    <select class="col-12" id="marca_modelo" name="marca_modelo"  required>
                                        <option value="">- Selecione -</option>
                                        <?php foreach($marcas as $marca): ?>
                                            <option value="<?= $marca->id_marca?>"><?= $marca->nome_marca?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </label>   
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>