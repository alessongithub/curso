<?= $this->extend('Layout/principal')?>


<?= $this->section('titulo') ?> <?= $titulo; ?> <?= $this->endSection() ?>




<?= $this->section('estilos') ?> 
<!-- AQUI COLOCO OS ESTILOS DA VIEW -->

<?= $this->endSection() ?>


<?= $this->section('conteudo') ?> 
<div class="row">
    <div class="col-lg-4">
    <div class="block">
        <div class="text-center">
            <?php if($usuario->imagem == null): ?>
                <img src="<?php echo site_url('recursos/img/usuario_sem_imagem.png'); ?>" class="card-img-top" style="width: 90%;" alt="Usuário sem imagem">


            <?php else: ?>
                <img src="<?php echo site_url("usuarios/imagem/$usuario->imagem"); ?>" class="card-img-top" style="width: 90%;" alt="<?php echo esc($usuario->nome); ?>">
            <?php endif ?>
            <a href="<?php echo site_url("usuarios/editarimagem/$usuario->id") ?>" class="btn btn-btn-outline-primary btn-sm mt-3">Alterar Imagem</a>


        </div>
        <hr class="border-secondary">

         <h5 class="card-tittle mt-2"><?php echo esc($usuario->nome); ?></h5>       
        <p class="card-text"> <?php echo esc($usuario->email); ?></p> 
        <p class="card-text">Criado <?php echo $usuario->criado_em->humanize(); ?></p>
        <p class="card-text">Atualizado <?php echo $usuario->atualizado_em->humanize(); ?></p>
        
        <!-- Example single danger button -->
        <!-- Example single danger button -->
        <div class="btn-group">
         <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Ações
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url("usuarios/editar/$usuario->id"); ?>">Editar Usuário</a>

          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Separated link</a>
         </div>
        </div>

        <a href="<?php echo site_url("usuarios") ?>" class="btn btn-secondary ml-2">Voltar</a>


    </div><!-- ./ block -->



            </div>
</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?> 
<!-- AQUI COLOCO OS SCRIPTS DA VIEW -->

<?= $this->endSection() ?>