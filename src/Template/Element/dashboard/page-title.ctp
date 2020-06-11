<?php
/*verifica qual o controlador e define condição para exibir o título da página */

$controlador =  $this->request->getParam('controller');
/* título para o controlador de Estabilishments */
if($controlador == 'Rooms'){
    ?>
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Cômodos</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Tenha controle de todos os cômodos na unidade consumidora selecionada</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings-outline mr-1"></i> Opções rápidas
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">Visualizar todas</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Imprimir uma lista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php

    /* caso não seja */
}
if($controlador == 'Estabilishments'){
    ?>
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Unidades consumidoras</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Tenha controle de todas as suas unidades consumidoras ativas</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-settings-outline mr-1"></i> Opções rápidas
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                            <a class="dropdown-item" href="#">Visualizar todas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Imprimir uma lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php

/* caso não seja */
}
if($controlador != ('Rooms' || 'Estabilishments')){
    ?>
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Dashboard</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Bem vindo ao Smartest.energy</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-settings-outline mr-1"></i> Opções rápidas
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                            <a class="dropdown-item" href="#">Ver sensores ativos</a>
                            <a class="dropdown-item" href="#">Relatório sobre meu consumo</a>
                            <a class="dropdown-item" href="#">Adicionar uma nova fatura</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
}
?>
