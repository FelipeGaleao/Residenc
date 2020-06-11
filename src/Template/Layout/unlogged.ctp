<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8" />
    <title>Smartest.energy | Seu consumo de energia mais inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartest.energy | Seu consumo de energia mais inteligente" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/needim/noty/77268c46/lib/noty.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="//cdn.rawgit.com/needim/noty/77268c46/lib/noty.min.js"></script>
    <script src="//cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>
    <script src="//cdn.jsdelivr.net/velocity/1.5/velocity.min.js"></script>
    <?php echo $this->Html->css(array(
        'dashboard/assets/libs/air-datepicker/css/datepicker.min.css',
        'dashboard/assets/libs/jqvmap/jqvmap.min.css',
        'dashboard/assets/css/app.min.css',
        'dashboard/assets/css/icons.min.css',
        'dashboard/assets/css/bootstrap.min.css',
    ));?>

</head>

<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- header -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
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
                    <i class="mdi mdi-message-text font-size-22"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                    <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-settings font-size-22"></i>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="chat-tab" role="tabpanel">

                <form class="search-bar py-4 px-3">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>

                <h6 class="px-4 py-3 mt-2 bg-light">Group Chats</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                        <span class="mb-0 mt-1">App Development</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                        <span class="mb-0 mt-1">Office Work</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                        <span class="mb-0 mt-1">Personal Group</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                        <span class="mb-0 mt-1">Freelance</span>
                    </a>
                </div>

                <h6 class="px-4 py-3 mt-4 bg-light">Favourites</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h6 class="px-4 py-3 mt-4 bg-light">Other Chats</h6>

                <div class="p-2 pb-4">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Sean Howse</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Dean Coward</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Hayley East</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="p-3 mb-0 mt-4 bg-light">Working Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <h6 class="p-3 mb-0 mt-4 bg-light">Upcoming Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <div class="p-3 mt-2">
                    <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                </div>

            </div>
            <div class="tab-pane" id="settings-tab" role="tabpanel">
                <h6 class="px-4 py-3 bg-light">General Settings</h6>

                <div class="p-4">
                    <h6 class="font-weight-medium">Online Status</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                    </div>

                    <h6 class="mt-4">Auto Updates</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                    </div>

                    <h6 class="mt-4">Backup Setup</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                        <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                    </div>

                </div>

                <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                <div class="p-4">
                    <h6 class="font-weight-medium">Application Alerts</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                        <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                    </div>

                    <h6 class="mt-4">API</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                        <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                    </div>

                </div>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


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

));?>
<!-- JAVASCRIPT -->

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
<script src="https://cdn.es.gov.br/scripts/jquery/jquery-mask/1.7.7/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.js"></script>
<script>
    $(document).ready(function(){
        $('.date').mask('11/11/1111');
        $('.time').mask('00:00:00');
        $('.date_time').mask('99/99/9999 00:00:00');
        $('.cep').mask('99999-999');
        $('.cpf').mask('999.999.999-99');
        $('.phone').mask('(99) 99999-9999');
        $('.phone_us').mask('(999) 999-9999');
        $('.mixed').mask('AAA 000-S0S');
    });</script>

</html>
