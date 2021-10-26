<div class="row">
    <div class="col-12 column-responsive">
        <div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Crear Usuario</h5>
			</div>
            <?= $this->Form->create($user) ?>
			    <div class="row card-body">
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('name', [
                                'class' => 'form-control',
                                'placeholder' => 'Nombre completo',
                                'type' => 'text',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('role_id', [
                                'options' => $roles, 
                                'class' => 'form-select',
                                'placeholder' => 'Seleccione un rol',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('email', [
                                'class' => 'form-control',
                                'placeholder' => 'Ingrese email',
                                'type' => 'email',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('password', [
                                'class' => 'form-control',
                                'placeholder' => 'Ingrese contraseña',
                                'type' => 'password',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('active',  [
                                'label' => 'Activo'
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary m-b-10 m-l-5']) ?>
                    </div>
                </div>
            <?= $this->Form->end() ?>
		</div>
    </div>
</div>
