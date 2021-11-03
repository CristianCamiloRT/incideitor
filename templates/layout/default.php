<?php
    $cakeDescription = 'Incidents Admin';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php if ($this->Identity->isLoggedIn()): ?>
        <div class="wrapper">
            <?php include 'sections/leftbar.php' ?>
            <div class="main">
                <?php include 'sections/navbar.php'?>
                <main class="content">
                    <div class="container-fluid p-0">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                </main>
            </div>
        </div>
    <?php else: ?>
        <main class="d-flex w-100">
		    <div class="container d-flex flex-column">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
    <?php endif; ?>
    <footer>
    </footer>
    <?= $this->Html->script(['app']) ?>
    <?= $this->fetch('script') ?>
</body>

</html>
