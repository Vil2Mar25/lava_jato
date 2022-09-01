<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Marcas cadastrada</h1>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar</a>
            </div>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col" class="w-25 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($marcas as $marca) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $marca->id_marca ?></th>
                            <td><?= $marca->nome_marca ?></td>
                            <td  class="text-center">
                                <a type="button" class="btn btn-info" href="<?= base_url('marca/editar_marca/'.$marca->id_marca)?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('marca/deletar_marca/'.$marca->id_marca)?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar marca</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('marca/adicionar_marca')?>" method="post">
                            <div class="form-group">
                                <label class="col-12">Marca: 
                                    <input class="col-12" type="text" id="nome_marca" name="nome_marca" placeholder="Ex: Fiat" required>
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