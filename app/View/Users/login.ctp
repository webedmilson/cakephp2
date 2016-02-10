<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Área Restrita'); ?></legend>
        Edmilson
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