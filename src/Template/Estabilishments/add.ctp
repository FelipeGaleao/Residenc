<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informações gerais</h4>
                        <p class="card-title-desc">Em caso de dúvidas, consulte a fatura da concessionária de
                            energia..</p>
                        <?= $this->Form->create($estabilishment, ['type' => 'file']) ?>

                        <div>
                            <div class="form-group form-group-custom mb-4">
                                <input type="text" class="form-control" id="uc" name="uc" required="">
                                <label for="uc">Unidade consumidora</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="type" class="form-control" id="name" name="name" required="">
                                        <label for="name">Nome do estabelecimento</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="text" class="form-control" id="address" name="address" required="">
                                        <label for="address">Endereço</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <select class="form-control" id="voltage_customer" name="voltage_customer">
                                            <option selected disabled>Selecione</option>
                                            <option value="127">Monofásico (127 v)</option>
                                            <option value="220">Bifásico (220 v)</option>
                                            <option value="380">Trifásico (380 v)</option>
                                        </select> <label for="voltage_customer">Tensão de entrada</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <select class="form-control" id="aggroupment_customer"
                                                name="aggroupment_customer">
                                            <option selected disabled>Selecione</option>
                                            <option value="A">Grupo A</option>
                                            <option value="B">Grupo B</option>
                                            <option value="Rural">Rural</option>
                                        </select> <label for="aggroupment_customer">Tipo de cliente</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="status" value="1" name="status">
                                <label class="custom-control-label font-weight-normal" for="status">Unidade está
                                    consumindo atualmente</a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-12">
                <div class="card ">
                    <div class="card-body">
                        <h4 class="header-title">Projeto</h4>
                        <p class="card-title-desc">Insira o arquivo .PDF do projeto elétrico
                        </p>

                        <input type="file" class="form-control dropzone" name="photos">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Descrição</h4>
                        <p class="card-title-desc">Insira uma descrição para essa unidade consumidora</p>
                        <textarea name="description" class="summernote" id="summernote" cols="30"
                                  rows="10">Descrição</textarea>
                        <div class="mt-4 justify-content-center align-content-center align-items-center">
                            <button class="pull-center btn btn-primary waves-effect waves-light" type="submit">Enviar
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <!-- end row -->

        <!-- end row -->

    </div>
    <!-- end container-fluid -->
</div>

