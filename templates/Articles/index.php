<!-- File: Templates/Articles/index.php (edit links added) -->
<h1>Blog articles</h1>
<p><?= $this->Html->link("Adicionar artigo", ['action' => 'add']) ?></p>
<table>
<tr>
<th>Id</th>
<th>Título</th>
<th>Criado</th>
<th>Ações</th>
</tr>
<!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
<?php foreach ($articles as $article): ?>
<tr>
<td><?= $article->id ?></td>
<td> <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?> </td>
<td> <?= $article->created->format(DATE_RFC850) ?> </td>
<td><?= $this->Form->postLink( 'Eliminar', ['action' => 'delete', $article->id], ['confirm' => 'Tem certeza?']) ?>
<td> <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?> </td>
</tr>
<?php endforeach; ?>
</table>


<html>
