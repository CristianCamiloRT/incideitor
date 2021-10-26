<div class="row">
    <div class="col-12 column-responsive">
        <div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Editar Ticket</h5>
			</div>
            <?= $this->Form->create($ticket) ?>
			    <div class="row card-body">
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->textarea('ticket', [
                                'class' => 'form-control',
                                'placeholder' => 'Escriba el problema presentado',
                                'type' => 'text',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->textarea('comment', [
                                'class' => 'form-control',
                                'placeholder' => 'Escriba la solución presentada',
                                'type' => 'email',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('user_id', [
                                'options' => $users, 
                                'class' => 'form-select',
                                'placeholder' => 'Seleccione un rol',
                                'label' => false
                            ]);
                        ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?=
                            $this->Form->control('status',  [
                                'label' => 'Estado ticket'
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
