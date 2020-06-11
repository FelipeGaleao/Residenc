<?= $this->Flash->render() ?>
<?php echo $this->Flash->render();?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">

                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar ..." aria-label="Pesquisar">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-clock-alert"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="
/files/Users/photo/
<?php
                            $session = $this->getRequest()->getSession();
    echo $session->read('Auth.User.photo');

    ?>
" alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">
                            <?php

                            $session = $this->getRequest()->getSession();
                            $firstname = $session->read('Auth.User.firstname');
                            $lastname = $session->read('Auth.User.lastname');
                            echo 'Olá, '.$firstname.' '.$lastname;
                            ?>

                        </span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="/ucs"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Minhas unidades consumidoras</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Minhas informações</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/sair/"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Sair</a>
                    </div>
                </div>
            </div>

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/img/logo_branco.png" alt="" height="50">
                                </span>
                    <span class="logo-lg">
                                    <img src="/img/logo_branco.png" alt="" height="50">
                                </span>
                </a>

                <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/img/logo_branco.png" alt="" height="50">
                                </span>
                    <span class="logo-lg">
                                    <img src="/img/logo_branco.png" alt="" height="50">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    Página inicial
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Estabelecimentos <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu dropdown-mega-menu-xl px-2" aria-labelledby="topnav-uielement">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div> Geral</div>

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <a href="/ucs/" class="dropdown-item">Visualizar todos</a>
                                                    <a href="/ucs/novo" class="dropdown-item">Adicionar um novo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div>Específico</div>

                                            <div>
                                                <a href="/circuitos/" class="dropdown-item">Circuitos</a>
                                                <a href="/comodos/" class="dropdown-item">Comodos</a>
                                                <a href="/cargas/" class="dropdown-item">Cargas</a>
                                                <a href="/equipments/" class="dropdown-item">Equipamentos</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sensores <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-message"></i></div> Meus sensores
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href="email-inbox.html" class="dropdown-item">Visualizar todos</a>
                                            <a href="email-read.html" class="dropdown-item">Relatórios</a>
                                        </div>
                                    </div>
                                    <a href="calendar.html" class="dropdown-item">
                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-schedule"></i></div> Adicionar um novo</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Financeiro <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Faturas <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login.html" class="dropdown-item">Visualizar todas</a>
                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header>
