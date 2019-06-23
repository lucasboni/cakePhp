<!DOCTYPE html>
<html lang="pt-br">
<header>
  <meta charset="UTF-8">
  <title>Listar</title>
</header>

 <body>
 <div class="produtos index large-12 medium-8 columns content">
 <h3><?php echo 'Usuário'?></h3>
 
	<table>
	<thead>
			<tr>
			<th class = 'col'><?php echo $this->Paginator->sort('id');?></<th>
			<th class = 'col'><?php echo $this->Paginator->sort('nome');?></th>
			<th class = 'col'><?php echo $this->Paginator->sort('email',"");?></th>
			<th>AÇÕES</th>
			</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario):?>
	        <tr>
			<td><?php echo $usuario->id;?></td>
			<td><?php echo $usuario->nome;?></td>
			<td><?php echo $usuario->email;?></td>
			<td>VER EDITAR APAGAR</td>
			</tr>
	<?php endforeach;?>
	</tbody>
	</table>
	
	<?php 
	echo $this->Html->link(('Cadastrar Usuário'),['controller' => 'users','action' => 'add']);
	?>
	
	<div class="paginator">
	<ul class="pagination">
	<?php echo $this->Paginator->first('<< ' . __('Primeira'));?>
	<?php echo $this->Paginator->prev('< ' . __('Anterior'));?>
	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('Próximo') . ' >');?>
	<?php echo $this->Paginator->last(__('Última') . ' >>');?>
	</ul>
	
	<p>
	<?php 
	echo $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrado {{current}} registros de um total de {{count}}')]);
	?>
	</p>
	
	</div>
</div>
</body>
</html>



