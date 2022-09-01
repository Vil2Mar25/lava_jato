<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Editar cliente</h1>
            </div>
            <form action="<?= base_url('cliente/atualizar_cliente') ?>" method="post">

                <div class="form-group">
                    <label class="col-8">Nome:
                        <input class="col-12" type="text" id="nome_cliente" name="nome_cliente" value="<?= $cliente->nome_cliente ?>">
                    </label>
                    <label class="col-3">CPF/Cnpj:
                        <input class="col-12" type="text" id="cpf_cliente" name="cpf_cliente" value="<?= $cliente->cpf_cliente ?>">
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-4">Telefone:
                        <input class="col-12" type="text" id="telefone_cliente" name="telefone_cliente" value="<?= $cliente->telefone_cliente ?>">
                    </label>
                    <label class="col-7">E-mail:
                        <input class="col-12" type="email" id="email_cliente" name="email_cliente" value="<?= $cliente->email_cliente ?>">
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-2">Cep:
                        <input class="col-12" type="text" id="cep_cliente" name="cep_cliente" value="<?= $cliente->cep_cliente ?>">
                    </label>
                    <label class="col-2">Logradouro:
                        <input class="col-12" type="text" id="logradouro_cliente" name="logradouro_cliente" value="<?= $cliente->logradouro_cliente ?>">
                    </label>
                    <label class="col-2">Número:
                        <input class="col-12" type="text" id="=numero_cliente" name="numero_cliente" value="<?= $cliente->numero_cliente ?>">
                    </label>
                    <label class="col-5">Complemento:
                        <input class="col-12" type="text" id="complemento_cliente" name="complemento_cliente" value="<?= $cliente->complemento_cliente ?>">
                    </label>

                </div>

                <div class="form-group">
                    <label class="col-4">Bairro:
                        <input class="col-12" type="text" id="bairro_cliente" name="bairro_cliente" value="<?= $cliente->bairro_cliente ?>">
                    </label>
                    <label class="col-4">Cidade:
                        <input class="col-12" type="text" id="cidade_cliente" name="cidade_cliente" value="<?= $cliente->cidade_cliente ?>">
                    </label>
                    <label class="col-3">Estado:
                        <input class="col-12" type="text" id="estado_cliente" name="estado_cliente" value="<?= $cliente->estado_cliente ?>">
                    </label>
                </div>

                <input class="col-12" type="hidden" id="id_cliente" name="id_cliente" value="<?= $cliente->id_cliente ?>">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a type="button" class="btn btn-secondary" href="<?= base_url('cliente')?>">cancelar</a>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>