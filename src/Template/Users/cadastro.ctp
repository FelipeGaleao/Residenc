<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <a href="#" class="logo"><img src="/img/logo.png" height="150" alt="logo"></a>
                    <h5 class="font-size-16 mb-4" style="color: #3051D3;">Smartest.energy | Seu consumo de energia mais eficiente</h5>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-xl-8 col-sm-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <h5 class="mb-5 text-center">Registre sua conta para entrar</h5>
                            <?php echo $this->Form->create($user, ['type' => 'file']); ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" name="firstname" id="firstname" required>
                                            <label for="firstname">Nome</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" name="lastname" id="lastname" required>
                                            <label for="lastname">Sobrenome</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control cpf" name="cpf" id="cpf" required>
                                            <label for="CPF">CPF</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control phone" name="phone" id="phone" required>
                                            <label for="Telefone">Telefone</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" name="address" id="address" required>
                                            <label for="address">Endereço</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" name="city" id="city" required>
                                            <label for="city">Cidade</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <select class="form-control" id="uf" name="uf">
                                                <option disabled selected>Selecione seu estado</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                            <label for="uf">Estado</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="file" class="form-control" id="photo" name="photo" required>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" class="form-control" name="password1" id="password1" required>
                                            <label for="password1">Insira sua senha</label>
                                        </div>
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" class="form-control" name="password" id="password" required>
                                            <label for="password2">Confirme sua senha</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input  required type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                            <label class="custom-control-label font-weight-normal" for="term-conditionCheck">Eu concordo com <a href="#" class="text-primary"> os termos de uso</a></label>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Cadastrar</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="/login" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Já possui uma conta?</a>
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

