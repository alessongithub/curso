<?= $this->extend('Layout/principal')?>


<?= $this->section('titulo') ?> <?= $titulo; ?> <?= $this->endSection() ?>




<?= $this->section('estilos') ?> 
<!-- AQUI COLOCO OS ESTILOS DA VIEW -->

<?= $this->endSection() ?>


<?= $this->section('conteudo') ?> 
<div class="row">
    <div class="col-lg-6">
    <div class="block">

        <div class="block-body">
            <!-- Exibirá os retornos do backend -->
            <div id="response">

        </div>

        <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]) ?>

        <?php echo $this->include('Usuarios/_form'); ?>

            <div class="form-group mt-5 mb-2">

                <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger btn-sm mr-2">
                <a href="<?php echo site_url("usuarios/exibir/$usuario->id") ?>" class="btn btn-secondary btn-sm ml-2">Voltar</a>
        
            </div>

        <?php echo form_close(); ?>    

        </div>

    </div><!-- ./ block -->



            </div>
</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?> 
<!-- AQUI COLOCO OS SCRIPTS DA VIEW -->
<script>
 

    $(document).ready(function(){
        
        $("#form").on('submit', function(e){

            e.preventDefault();

            $.ajax({ 

                type: 'POST',
                url: '<?php echo site_url('usuarios/atualizar'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                    $("#response").html('');
                    $("#btn-salvar").val('Por favor, aguarde...');    
                },
                success: function(response){
                    $("#btn-salvar").val('Salvar');
                    $("#btn-salvar").removeAttr("disabled");

                    if(!response.erro){

                        $('[name=csrf_ordem]').val(response.token);
                        

                        if(response.info){
                            $("#response").html('<div class="alert alert-info">' + response.info + '</div>');
                            

                        }else{

                            // Tudo certo com a atualização do usuário
                            // Podemos agora redirecioná-lo tranquilamente
                            
                            window.location.href = "<?php echo site_url("/usuarios/exibir/$usuario->id"); ?>";


                    }else{

                        
                            //Existem erros de validação
                    }

                },
                 error: function(){

                     alert('Não foi possível processar a solicitação. Por favor entre em contato com o Suporte Técnico da G5 Digital.');
                     $("#btn-salvar").val('Salvar');
                     $("#btn-salvar").removeAttr("disabled");


                }

            });

        });

    });

    

</script>




<?= $this->endSection() ?>