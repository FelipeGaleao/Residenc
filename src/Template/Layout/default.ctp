<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8" />
    <title>Smartest.energy | Seu consumo de energia mais inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartest.energy | Seu consumo de energia mais inteligente" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="//cdn.rawgit.com/needim/noty/77268c46/lib/noty.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css">

    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->


    <?php echo $this->Html->css(array(
        'dashboard/assets/libs/air-datepicker/css/datepicker.min.css',
        'dashboard/assets/libs/jqvmap/jqvmap.min.css',
        'dashboard/assets/css/app.min.css',
        'dashboard/assets/css/icons.min.css',
        'dashboard/assets/css/bootstrap.min.css',
        'dashboard/assets/libs/summernote/summernote-bs4.css',
        'dashboard/assets/libs/dropzone/min/dropzone.min.css',
        'dashboard/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        'dashboard/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
        'dashboard/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'

    ));?>

</head>

<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">

<!-- Begin page -->
<div id="layout-wrapper">

   <!-- header -->
<?php echo $this->Element('header/header');?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
<?php echo $this->Element('/dashboard/page-title');?>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                </div> <!-- container-fluid -->
            </div>
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2020 © Smartest.energy
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                         Um TCC desenvolvido por Maycon Felipe Mota e Andrey Tagliaferro
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                    <i class="mdi mdi-clock-alert font-size-22"></i>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="chat-tab" role="tabpanel">


                <h6 class="px-4 py-3 mt-4 bg-light">Sensores</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="/img/sensor/sensor_ok.png" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Sensor 1 (Circuito 2, FASE ABC</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">V: 127, A: 32a, P: 17kwH</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="/img/sensor/sensor_ok.png" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Sensor 1 (Circuito 2, FASE ABC</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">V: 127, A: 32a, P: 17kwH</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="/img/sensor/sensor_ok.png" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Sensor 1 (Circuito 2, FASE ABC</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">V: 127, A: 32a, P: 17kwH</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h6 class="px-4 py-3 mt-4 bg-light">Notificações</h6>

                <div class="p-2 pb-4">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="/img/logo.png" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Sistema</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">Seja bem vindo ao Smartest.energy</p>
                                </div>
                            </div>
                        </div>
                    </a>


                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
<?php echo $this->Flash->render();?>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>



<?php echo $this->Html->script(array(
    'dashboard/assets/libs/jquery/jquery.min.js',
    'dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js',
    'dashboard/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
    'dashboard/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
    'dashboard/assets/libs/jszip/jszip.min.js',
    'dashboard/assets/libs/pdfmake/build/pdfmake.min.js',
    'dashboard/assets/libs/pdfmake/build/vfs_fonts.js',
    'dashboard/assets/libs/datatables.net-buttons/js/buttons.html5.min.js',
    'dashboard/assets/libs/datatables.net-buttons/js/buttons.print.min.js',
    'dashboard/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js',
    'dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js',
    'dashboard/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
    'dashboard/assets/js/pages/datatables.init.js',
));?>
</body>

<?php echo $this->Html->script(array(
    'dashboard/assets/libs/jquery/jquery.min.js',
    'dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
    'dashboard/assets/libs/metismenu/metisMenu.min.js',
    'dashboard/assets/libs/simplebar/simplebar.min.js',
    'dashboard/assets/libs/node-waves/waves.min.js',
    'dashboard/assets/libs/air-datepicker/js/datepicker.min.js',
    'dashboard/assets/libs/node-waves/waves.min.js',
    'dashboard/assets/js/pages/coming-soon.init.js',
    'dashboard/assets/libs/air-datepicker/js/i18n/datepicker.en.js',
    'dashboard/assets/libs/apexcharts/apexcharts.min.js',
    'dashboard/assets/js/app.js',
    'dashboard/assets/libs/jquery-knob/jquery.knob.min.js',
    'dashboard/assets/libs/jqvmap/jquery.vmap.min.js',
    'dashboard/assets/libs/jqvmap/maps/jquery.vmap.usa.js',
    'dashboard/assets/js/pages/dashboard.init.js',
    'dashboard/assets/js/pages/summernote.init.js',
    'dashboard/assets/libs/summernote/summernote-bs4.min.js',
    'dashboard/assets/libs/dropzone/min/dropzone.min.js'

));?>
<!-- JAVASCRIPT -->

<!-- init js -->

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
<script src="https://cdn.es.gov.br/scripts/jquery/jquery-mask/1.7.7/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.js"></script>

<script src="//cdn.rawgit.com/needim/noty/77268c46/lib/noty.min.js"></script>
<script src="//cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.5/velocity.min.js"></script>
</html>

