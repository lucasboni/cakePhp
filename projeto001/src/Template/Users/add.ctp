<h1>Cadastrar Usuário</h1>
<?php 
echo $this->Form->create($user);
echo $this->Form->control('nome');
echo $this->Form->control('email');
echo $this->Form->button('Cadastrar');
echo $this->form->end();
?>