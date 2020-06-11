<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informações gerais</h4>
                        <p class="card-title-desc">Em caso de dúvidas, consulte a fatura da concessionária de
                            energia..</p>
                        <?= $this->Form->create($room, ['type' => 'file']) ?>

                        <div>
                            <div class="form-group form-group-custom mb-4">
                                <input type="text" class="form-control" id="name" name="name" required="" value="<?php echo $room->name;?>">
                                <label for="name">Nome do comôdo</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <select class="form-control" name="estabilishment_id" id="estabilishment_id">
                                            <?php foreach($estabilishments as $estabilishment){
                                                ?>
                                                <option <?php if($estabilishment->id == $room->estabilishment_id){echo 'selected';}?> value="<?php echo $estabilishment->id;?>"><?php echo $estabilishment->name;?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <label for="address">Estabelecimento</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="number" class="form-control" id="power_calculated" name="power_calculated">
                                        <label for="power_calculated">Potência planejada no projeto (W)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="sensor" value="1" name="sensor">
                                <label class="custom-control-label font-weight-normal" for="sensor">Cômodo está sendo monitorado pelo sensor</a></label>
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

