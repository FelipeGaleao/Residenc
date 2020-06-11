<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <a href="index.html" class="logo"><img src="/img/logo.png" height="150px" alt="logo"></a>
                    <h5 class="font-size-16 mb-4" style="color: #3051D3;">Smartest.energy | Seu consumo de energia mais eficiente</h5>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-xl-5 col-sm-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <h5 class="mb-5 text-center">Faça login para acessar o Smartest.energy</h5>
                            <?php echo $this->Form->create(); ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control cpf"  name="username" id="username" required>
                                            <label for="username">CPF</label>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <label for="password">Senha</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-md-right mt-3 mt-md-0">
                                                    <a href="/resetar" class="text-muted"><i class="mdi mdi-lock"></i> Esqueceu sua senha?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Entrar</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="/cadastro" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Criar uma nova conta</a>
                                        </div>
                                    </div>
                                </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
