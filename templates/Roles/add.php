<div class="row">
    <div class="col-12 column-responsive">
        <div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Crear Rol</h5>
			</div>
            <?= $this->Form->create($role) ?>
            <div class="row card-body">
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('role', [
                                'class' => 'form-control',
                                'placeholder' => 'Nombre del Rol',
                                'type' => 'text',
                                'label' => false
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
