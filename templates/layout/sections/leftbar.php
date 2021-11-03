<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Incideitor</span>
        </a>
        <?php $ruta = $this->request->getParam('controller'); ?>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Paginas Disponibles
            </li>
            <?php if ($this->Identity->get('role_id') == 1) : ?>
                <li class="sidebar-item <?= $ruta == 'Users' ? 'active' : '' ?>">
                    <?php echo $this->Html->link('<i class="align-middle" data-feather="user"></i> <span class="align-middle">Usuarios</span>', 
                        [
                            'controller' => 'Users',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false,
                            'class' => 'sidebar-link'
                        ]
                    );?>
                </li>

                <li class="sidebar-item <?= $ruta == 'Roles' ? 'active' : '' ?>">
                    <?php echo $this->Html->link('<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Roles</span>', 
                        [
                            'controller' => 'Roles',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false,
                            'class' => 'sidebar-link'
                        ]
                    );?>
                </li>

                <li class="sidebar-item <?= $ruta == 'Tickets' ? 'active' : '' ?>">
                    <?php echo $this->Html->link('<i class="align-middle" data-feather="book"></i> <span class="align-middle">Todos los Tickets</span>', 
                        [
                            'controller' => 'Tickets',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false,
                            'class' => 'sidebar-link'
                        ]
                    );?>
                </li>
            <?php else : ?>
                <li class="sidebar-item <?= $ruta == 'Tickets' ? 'active' : '' ?>">
                    <?php echo $this->Html->link('<i class="align-middle" data-feather="book"></i> <span class="align-middle">Mis Tickets</span>', 
                        [
                            'controller' => 'Tickets',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false,
                            'class' => 'sidebar-link'
                        ]
                    );?>
                </li>
            <?php endif; ?>
            <li class="sidebar-item">
                <?php echo $this->Html->link('<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Log out</span>', 
                    [
                        'controller' => 'Users',
                        'action' => 'logout'
                    ],
                    [
                        'escape' => false,
                        'class' => 'sidebar-link'
                    ]
                );?>
            </li>

        </ul>
    </div>
</nav>
