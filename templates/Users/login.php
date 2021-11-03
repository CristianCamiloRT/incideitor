<div class="row vh-100">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">
            <div class="text-center mt-4">
                <h1 class="h2">Bienvenido</h1>
                <p class="lead">
                    Por favor, inicia sesión
                </p>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create() ?>
                            <div class="mb-3">
                                <label class="form-label">Correo Electronico</label>
                                <?=
                                    $this->Form->control('email', [
                                        'required' => true,
                                        'class' => 'form-control form-control-lg',
                                        'placeholder' => 'Ingrese su correo electronico',
                                        'type' => 'email',
                                        'label' => false
                                    ]);
                                ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <?=
                                    $this->Form->control('password', [
                                        'required' => true,
                                        'class' => 'form-control form-control-lg',
                                        'placeholder' => 'Ingrese su contraseña',
                                        'type' => 'password',
                                        'label' => false
                                    ]);
                                ?>
                            </div>
                            <div class="text-center mt-3">
                                <?= $this->Form->submit(__('Login'),['class' => 'btn btn-lg btn-primary']); ?>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>