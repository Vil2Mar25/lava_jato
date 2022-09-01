<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Visualizar atendimento</h1>
            </div>
            <form action="<?= base_url('atendimento/atualizar_atendimento') ?>" method="post">

                <div class="form-group">
                    <label class="col-4">Data registro:
                        <input class="col-12" type="text" id="data_criacao" name="data_criacao" value="<?= $consultas->data_criacao_atendimento?>" disabled>
                    </label>
                    <label class="col-4">Data de finalização:
                        <input class="col-12" type="email" id="data_finalizacao" name="data_finalizacao" value="<?= $consultas->data_finalizacao_atendimento?>"disabled>
                    </label>
                    <label class="col-3">Status:
                        <input class="col-12" type="email" id="status_atendimento" name="status_atendimento" value="<?= $consultas->status_atendimento?>" disabled>
                    </label>
                </div>

                <hr>

                <div class="form-group">
                    <label class="col-11">Cliente:
                         <input class="col-12" type="text" id="cliente_atendimento" name="cliente_atendimento" value="<?= $consultas->cliente_atendimento?>" disabled>                
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-4">Telefone:
                        <input class="col-12" type="text" id="telefone_cliente" name="telefone_cliente" value="<?= $consultas->telefone_cliente?>" disabled>
                    </label>
                    <label class="col-7">E-mail:
                        <input class="col-12" type="email" id="email_cliente" name="email_cliente" value="<?= $consultas->email_cliente?>" disabled>
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-2">Cep:
                        <input class="col-12" type="text" id="cep_cliente" name="cep_cliente" value="<?= $consultas->cep_cliente?>" disabled>
                    </label>
                    <label class="col-2">Logradouro:
                        <input class="col-12" type="text" id="logradouro_cliente" name="logradouro_cliente" value="<?= $consultas->logradouro_cliente?>" disabled>
                    </label>
                    <label class="col-2">Número:
                        <input class="col-12" type="text" id="=numero_cliente" name="numero_cliente" value="<?= $consultas->numero_cliente?>" disabled>
                    </label>
                    <label class="col-5">Complemento:
                        <input class="col-12" type="text" id="complemento_cliente" name="complemento_cliente" value="<?= $consultas->complemento_cliente?>" disabled>
                    </label>

                </div>

                <div class="form-group">
                    <label class="col-4">Bairro:
                        <input class="col-12" type="text" id="bairro_cliente" name="bairro_cliente" value="<?= $consultas->bairro_cliente?>" disabled>
                    </label>
                    <label class="col-4">Cidade:
                        <input class="col-12" type="text" id="cidade_cliente" name="cidade_cliente" value="<?= $consultas->cidade_cliente?>" disabled>
                    </label>
                    <label class="col-3">Estado:
                        <input class="col-12" type="text" id="estado_cliente" name="estado_cliente" value="<?= $consultas->estado_cliente?>" disabled>
                    </label>
                </div>

                <input class="col-12"  type="hidden" id="id_atendimento" name="id_atendimento" value="<?= $consultas->id_atendimento?>">
                <input class="col-12"  type="hidden" id="data_finalizacao" name="data_finalizacao" value="<?= date('m-d-Y h:i:s a', time()); ?>">

                <div class="form-group">
                    <div class="col-lg-6 mx-auto">
                        <?php
                            $fn = $consultas->status_atendimento;
                            $hab = ($fn == 'aberto')?'':'disabled';

                        ?>
                        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?= base_url('atendimento/agendar')?>">Voltar</a>
                        <button type="submit" class="btn btn-primary" <?= $hab ?>>Finalizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>