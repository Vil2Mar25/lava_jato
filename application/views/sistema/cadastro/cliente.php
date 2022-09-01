<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Clientes cadastrados</h1>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-xl">Adicionar</a>
            </div>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Bairro</th>
                        <th scope="col" class="w-25 text-center" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $cliente->id_cliente ?></th>
                            <td><?= $cliente->nome_cliente ?></td>
                            <td><?= $cliente->bairro_cliente ?></td>
                            <td class="text-center">
                                <a type="button" class="btn btn-info" href="<?= base_url('cliente/editar_cliente/'.$cliente->id_cliente)?>">Editar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('cliente/deletar_cliente/'.$cliente->id_cliente)?>">Excluir</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-10 mx-auto">
                        
                            <form action="<?= base_url('cliente/cadastrar_cliente')?>" method="post">

                                <div class="form-group">
                                    <label class="col-8">Nome:
                                        <input class="col-12" type="text" id="nome_cliente" name="nome_cliente" placeholder="Francisco Guilherme" required>
                                    </label>
                                    <label class="col-3">CPF/Cnpj:
                                        <input class="col-12" type="text" id="cpf_cliente" name="cpf_cliente" placeholder="000.000.000-00">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="col-2">Telefone:
                                        <input class="col-12" type="text" id="telefone_cliente" name="telefone_cliente" placeholder="(00)0 0000 0000">
                                    </label>
                                    <label class="col-5">E-mail:
                                        <input class="col-12" type="email" id="email_cliente" name="email_cliente" placeholder="francisco@teste.com" required>
                                    </label>
                                    <label class="col-2">Cep:
                                        <input class="col-12" type="number" id="cep_cliente" name="cep_cliente" placeholder="00000000" minlength="8">
                                    </label>
                                    <a type="button" class="btn btn-success" id="btn_consulta">Consulta</a>

                                </div>

                                <div class="form-group">
                                    <label class="col-4">Logradouro:
                                        <input class="col-12" type="text" id="logradouro_cliente" name="logradouro_cliente" placeholder="Rua Alvares de castro">
                                    </label>
                                    <label class="col-2">Número:
                                        <input class="col-12" type="number" id="=numero_cliente" name="numero_cliente" placeholder="0000">
                                    </label>
                                    <label class="col-5">Complemento:
                                        <input class="col-12" type="text" id="complemento_cliente" name="complemento_cliente" placeholder="Prómixo ao galpão">
                                    </label>

                                </div>

                                <div class="form-group">
                                        <label class="col-4">Bairro:
                                            <input class="col-12" type="text" id="bairro_cliente" name="bairro_cliente" placeholder="Martins Oliveira">
                                        </label>
                                        <label class="col-4">Cidade:
                                            <input class="col-12" type="text" id="cidade_cliente" name="cidade_cliente" placeholder="Sobral">
                                        </label>
                                        <label class="col-3">Estado:
                                            <input class="col-12" type="text" id="estado_cliente" name="estado_cliente" placeholder="Ceará">
                                        </label>
                                </div>

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
        $('#btn_consulta').click(function() {
            var cep = $('#cep_cliente').val();
            var tam = cep.length;
            if(cep == '' || tam != 8){
                alert('Informar um cep com 8 digitos');
                $('#cep_cliente').focus();
                return false;
            }

            $('#btn_consulta').html('...');

            $.post("<?= base_url('cliente/consulta')?>", {
                cep:cep
            }, function(dados){
                if(dados.erro){
                    alert('CEP não encontrado, preencha o endereço manualmente');
                }else{
                    console.log(dados);
                    $('#logradouro_cliente').val(dados.logradouro);
                    $('#bairro_cliente').val(dados.bairro);
                    $('#cidade_cliente').val(dados.localidade);
                    $('#estado_cliente').val(dados.uf);
                }
                $('#btn_consulta').html('Consulta');
            },'json');
        });
    });
</script>