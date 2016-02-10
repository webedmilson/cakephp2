<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <h1>Teste Teste Teste</h1>
        <legend><?php echo __('Área Restrita'); ?></legend>
        <?php
        echo $this->Form->input('username',array(
        	'label'=>'Usuário'
        ));
        echo $this->Form->input('password',array(
        	'label'=>'Senha'
        ));
    	?>
    </fieldset> 
<?php echo $this->Form->end(__('Acessar'));?>
</div>