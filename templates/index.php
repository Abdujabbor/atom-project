<?php require 'scripts/functions.php' ?>

<?php $this->inherits('base') ?>

<?php $this->beginBlock('content') ?>
    <p><?= encode($content) ?></p>
<?php $this->endBlock() ?>
