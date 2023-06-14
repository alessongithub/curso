<div class="form-group">
    <label class="form-control-label">Nome</label>
    <input type="text" name="nome" placeholder="Insira o nome Completo" class="form-control" value="<?php echo esc($usuario->nome);?>">
</div>
<div class="form-group">
    <label class="form-control-label">E-mail</label>
    <input type="email" name="email" placeholder="Insira o e-mail de acesso" class="form-control" value="<?php echo esc($usuario->email);?>">
</div>
<div class="form-group">       
    <label class="form-control-label">Senha</label>
    <input type="password" name="password" placeholder="Senha de Acesso" class="form-control">
</div>
<div class="form-group">       
    <label class="form-control-label">Confirmação de Senha</label>
    <input type="password" name="password_confirmation" placeholder="Confirme a Senha de Acesso" class="form-control">
</div>

<div class="custom-control custom-checkbox">
    <input type="hidden" name="ativo" value="0">
    <input type="checkbox" name="ativo" class="custom-control-input" id="ativo"<?php if($usuario->ativo == true): ?> checked <?php endif ?>>
    <label class="custom-control-label" value="1" for="ativo">Usuário Ativo</label>
</div>