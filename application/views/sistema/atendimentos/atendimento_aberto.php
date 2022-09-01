<div class="container-fluid">

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Atendimentos agendados</h1>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-xl">Adicionar</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="w-25">Cliente</th>
                        <th scope="col" class="w-25">Serviços</th>
                        <th scope="col">Data inicio</th>
                        <th scope="col">Data finalização</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($agendamentos as $agendamento) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $agendamento->id_atendimento ?></th>
                            <td><?= $agendamento->cliente_atendimento ?></td>
                            <td><?= $agendamento->nome_servico ?></td>
                            <td><?= $agendamento->data_criacao_atendimento ?></td>
                            <td><?= $agendamento->data_finalizacao_atendimento ?></td>
                            <td><?= $agendamento->status_atendimento ?></td>
                            <td class="text-center">
                                <a type="button" class="btn btn-info" href="<?= base_url('atendimento/visualizar_atendimento/' . $agendamento->id_atendimento) ?>">Visualizar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar atendimento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-10 mx-auto">
                            <form action="<?= base_url('atendimento/cadastrar_atendimento') ?>" method="post">

                                <div class="form-group">
                                    <label class="col-8">Cliente
                                        <select class="col-12" id="cliente_consulta" name="cliente_consulta" required>
                                            <option value="">- Selecione -</option>
                                            <?php foreach ($clientes as $cliente) : ?>
                                                <option value="<?= $cliente->nome_cliente ?>"><?= $cliente->nome_cliente ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label>
                                    <a type="button" class="btn btn-success col-2" id="consulta_cliente">Consultar</a>
                                </div>

                                <div class="form-group">
                                    <label class="col-8">Email
                                        <input class="col-12" type="text" id="email_cliente" name="email_cliente" disabled>
                                    </label>
                                    <label class="col-3">Telefone
                                        <input class="col-12" type="text" id="telefone_cliente" name="telefone_cliente" disabled>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="col-4">CEP
                                        <input class="col-12" type="text" id="cep_cliente" name="cep_cliente" disabled>
                                    </label>
                                    <label class="col-5">Logradouro
                                        <input class="col-12" type="text" id="logradouro_cliente" name="logradouro_cliente" disabled>
                                    </label>
                                    <label class="col-2">Número
                                        <input class="col-12" type="text" id="numero_cliente" name="numero_cliente" disabled>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="col-3">Complemento
                                        <input class="col-12" type="text" id="complemento_cliente" name="complemento_cliente" disabled>
                                    </label>
                                    <label class="col-3">Bairro
                                        <input class="col-12" type="text" id="bairro_cliente" name="bairro_cliente" disabled>
                                    </label>
                                    <label class="col-2">Cidade
                                        <input class="col-12" type="text" id="cidade_cliente" name="cidade_cliente" disabled>
                                    </label>
                                    <label class="col-3">Estado
                                        <input class="col-12" type="text" id="estado_cliente" name="estado_cliente" disabled>
                                    </label>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label class="col-4">Modelo do veiculo
                                        <select class="col-12" id="veiculo_modelo" name="veiculo_modelo" required>
                                            <option value="">- Selecione -</option>
                                            <?php foreach ($modelos as $modelo) : ?>
                                                <option value="<?= $modelo->id_modelo ?>"><?= $modelo->nome_modelo ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label>
                                    <label class="col-3">Placa do veiculo
                                        <input class="col-12" type="text" id="placa_veiculo" name="placa_veiculo">
                                    </label>
                                    <label class="col-4">servicos_atendimento
                                        <select name="servicos_atendimento" id="servicos_atendimento">
                                            <option value="">- Selecione -</option>
                                            <?php foreach ($servicos as $servico) : ?>
                                                <option value="<?= $servico->id_servico ?>"><?= $servico->nome_servico ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label>
                                </div>

                                <hr>

                                <div class="d-flex justify-content-center">
                                    <div class="col-lg-3">
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

</div>
<script type="text/javascript">
    $(function() {
        $('#consulta_cliente').click(function() {
            var cliente = $('#cliente_consulta').val();
            console.log(cliente);

            //console.log(u_name, u_comment);
            $.ajax({
                url: '<?= base_url('atendimento/consulta') ?>',
                method: 'POST',
                data: {
                    cliente: cliente
                },
                dataType: 'json'
            }).done(function(result) {
                $('#email_cliente').val(result.email_cliente);
                $('#telefone_cliente').val(result.telefone_cliente);
                $('#cep_cliente').val(result.cep_cliente);
                $('#logradouro_cliente').val(result.logradouro_cliente);
                $('#numero_cliente').val(result.numero_cliente);
                $('#complemento_cliente').val(result.complemento_cliente);
                $('#bairro_cliente').val(result.bairro_cliente);
                $('#cidade_cliente').val(result.cidade_cliente);
                $('#estado_cliente').val(result.estado_cliente);
                console.log(result);
            });
        });
    });
</script>