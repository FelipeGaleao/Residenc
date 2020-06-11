<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informações gerais</h4>
                        <p class="card-title-desc">Em caso de dúvidas, consulte a fatura da concessionária de
                            energia..</p>
                        <?= $this->Form->create($load, ['type' => 'file']) ?>

                        <div>
                            <div class="form-group form-group-custom mb-4">
                                <input type="text" class="form-control" id="name" name="name" required="">
                                <label for="name">Nome da tomada</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <select class="form-control" name="estabilishment_id" id="estabilishment_id">
                                            <?php foreach($estabilishments as $estabilishment){
                                                ?>
                                                <option value="<?php echo $estabilishment->id;?>"><?php echo $estabilishment->name;?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <label for="address">Estabelecimento</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="number" class="form-control" id="voltage" name="voltage">
                                        <label for="power_calculated">Tensão (V)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="number" class="form-control" id="current" name="current">
                                        <label for="power_calculated">Corrente (A)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-custom mb-4">
                                        <input type="number" class="form-control" id="active_power" name="active_power">
                                        <label for="power_calculated">Potência Ativa (kVA)</label>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Equipamentos</h4>
                        <p class="card-title-desc">Informe quais equipamentos estão previstos para esse ponto de força</p>
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <th>Nome do equipamento</th>
                            <th>Potência (W)</th>
                            <th>Tensão (V)</th>
                            <th>Tempo de uso diário (hh:mm)</th>
                            <th></th>
                            </thead>
                            <tbody id="container">
                            <td>
                                <select class="form-control" name="equipment_id[]" id="equipment_id">
                                    <?php foreach($Dequipments as $dEquipment){
                                        ?>
                                        <option value="<?php echo $dEquipment->id;?>"><?php echo $dEquipment->name;?></option>
                                   <?php }?>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="power_consumption[]" id="power_consumption">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="voltage[]" id="voltage">
                            </td>
                            <td>
                                <input type="time" class="form-control" name="time_daily[]" id="time_daily">
                            </td>
                            <td>
                                <a id="buscarEqpt_botao" class="btn btn-sm btn-primary text-white" onclick="buscarEquipamento()"><i class="fa fa-search"></i> Buscar equipamento</a>
                                <a class="btn btn-sm btn-secondary text-white"><i class="fa fa-plus"></i> Adicionar um novo equipamento</a>
                                
                            </td>
                            </tbody>
                        </table>
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
<script>
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('           <td>
                                <select class="form-control" name="equipment_id[]" id="equipment_id">
                                    <?php foreach($Dequipments as $dEquipment){
                                        ?>
                                        <option value="<?php echo $dEquipment->id;?>"><?php echo $dEquipment->name;?></option>
                                   <?php }?>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="power_consumption[]" id="power_consumption">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="voltage[]" id="voltage">
                            </td>
                            <td>
                                <input type="time" class="form-control" name="time_daily[]" id="time_daily">
                            </td>
                            <td>
                                <a id="buscarEqpt_botao" class="btn btn-sm btn-primary text-white" onclick="buscarEquipamento()"><i class="fa fa-search"></i> Buscar equipamento</a>
                                <a class="btn btn-sm btn-secondary text-white"><i class="fa fa-plus"></i> Adicionar um novo equipamento</a>
                            </td>'); //add input box
            } else {
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
<script>
    function buscarEquipamento() {
        document.getElementById('buscarEqpt_botao').className = 'btn btn-sm btn-warning text-white';
        document.getElementById('buscarEqpt_botao').innerText = 'Carregando equipamento...';
        var xhttp = new XMLHttpRequest();
        var id = document.getElementById('equipment_id').value;
        var equipamento = [];
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                equipamento = JSON.parse(this.response);
                document.getElementById('power_consumption').value = equipamento['0'].power_consumption;
                document.getElementById('buscarEqpt_botao').className = 'btn btn-sm btn-primary text-white';
                document.getElementById('buscarEqpt_botao').innerText = 'Buscar equipamento';
            }
        };
        xhttp.open("GET", "/dequipments/consultar?id=" + id, true);
        xhttp.send();
    }
</script>
