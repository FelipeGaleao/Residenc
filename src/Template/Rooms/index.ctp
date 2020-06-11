<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Todas os cômodos</h4>
                <p class="card-title-desc">Listando todos os cômodos registrados para esse CPF
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>UC</th>
                        <th>Nome do cômodo</th>
                        <th>Potência calculada (W)</th>
                        <th>Sensor instalado</th>
                        <th>Última modificação</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($rooms as $room){
                        ?>
                        <tr>
                            <td><?php echo $room->estabilishment->name;?></td>
                            <td><?php echo $room->name;?></td>
                            <td><?php echo $room->power_calculated;?></td>
                            <td><?php if($room->sensor == '1'){echo 'Ativo';}else{'Não ativo';}?></td>
                            <td><?php echo $room->modified;?></td>
                            <td><a class="btn btn-sm btn-primary" href="/rooms/view/<?php echo $room->id;?>"><i class="mdi mdi-view-agenda"> </i> Visualizar</a>
                                <a class="btn btn-sm btn-secondary" href="/rooms/edit/<?php echo $room->id;?>"><i class="mdi mdi-account-edit"> </i> Editar</a>
                                <a class="btn btn-sm btn-danger" href="/rooms/delete/<?php echo $room->id;?>"><i class="mdi mdi-delete"> </i> Apagar</a>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
