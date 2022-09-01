<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Serviços cadastrados</h1>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar</a>
            </div>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $servico->id_servico ?></th>
                            <td><?= $servico->nome_servico ?></td>
                            <td><?= $servico->valor_servico ?></td>
                            <td><?= $servico->descricao_servico ?></td>
                            <td class="text-center">
                                <a type="button" class="btn btn-info" href="<?= base_url('servico/editar_servico/'.$servico->id_servico)?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('servico/deletar_servico/'.$servico->id_servico)?>">Excluir</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar serviço</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('servico/adicionar_servico')?>" method="post">
                            <div class="form-group">
                                <label class="col-12">Serviço: 
                                    <input class="col-12" type="text" id="nome_servico" name="nome_servico" placeholder="Limpeza" required>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Valor: 
                                    <input class="col-12" type="text" id="valor_servico" name="valor_servico">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Descrição: 
                                    <textarea class="col-12" id="descricao_servico" name="descricao_servico"></textarea>
                                </label>
                            </div>
                            <div class="form-group mx-auto">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>