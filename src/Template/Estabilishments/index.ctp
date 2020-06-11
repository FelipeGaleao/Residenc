<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Todas as unidades consumidoras</h4>
                <p class="card-title-desc">Listando todas as unidades consumidoras cadastradas para esse CPF
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>UC</th>
                        <th>Nome do estabelecimento</th>
                        <th>Tipo de cliente</th>
                        <th>Tensão de entrada</th>
                        <th>Situação</th>
                        <th>Última modificação</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($estabilishments as $estabilishment){
                        ?>
                    <tr>
                        <td><?php echo $estabilishment->uc;?></td>
                        <td><?php echo $estabilishment->name;?></td>
                        <td><?php echo $estabilishment->aggroupment_customer;?></td>
                        <td><?php echo $estabilishment->voltage_customer;?></td>
                        <td>
                            <?php
                            /* condições para o status */
                            if($estabilishment->status == ''){
                                echo '<a class="badge badge-light"> Consumo inativo </a>';
                            }
                            if($estabilishment->status == 1){
                                echo '<a class="badge badge-success text-white"> Consumo ativo </a>';
                            }
                            ?>
                        </td>
                        <td><?php echo $estabilishment->modified;?></td>
                        <td><a class="btn btn-sm btn-primary" href="/estabilishments/view/<?php echo $estabilishment->id;?>"><i class="mdi mdi-view-agenda"> </i> Visualizar</a>
                            <a class="btn btn-sm btn-secondary" href="/estabilishments/edit/<?php echo $estabilishment->id;?>"><i class="mdi mdi-account-edit"> </i> Editar</a>
                            <a class="btn btn-sm btn-danger" href="/estabilishments/delete/<?php echo $estabilishment->id;?>"><i class="mdi mdi-delete"> </i> Apagar</a>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
