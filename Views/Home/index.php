<?= $this->extend('Layout/principal')?>


<?= $this->section('titulo') ?> <?= $titulo; ?> <?= $this->endSection() ?>




<?= $this->section('estilos') ?> 
<!-- AQUI COLOCO OS ESTILOS DA VIEW -->

<?= $this->endSection() ?>


<?= $this->section('conteudo') ?> 
<!-- AQUI COLOCO O CONTEÚDO DA VIEW -->

<?= $this->endSection() ?>


<?= $this->section('scripts') ?> 
<!-- AQUI COLOCO OS SCRIPTS DA VIEW -->

<?= $this->endSection() ?>