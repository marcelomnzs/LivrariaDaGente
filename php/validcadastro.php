<?php 
$cadastrados = file('cadastro.csv');

for ($i = 0; $i < sizeof($cadastrados); $i++){
	$cadastrados[$i] = explode(';',$cadastrados[$i]);
}
?>
<table>
	<tr>
		<th>usuarios</th>
		<th>emails</th>
		<th>senhas</th>
	</tr>
	<?php foreach ($cadastrados as $cadastrado): ?>
		<tr>
			<td><?= $cadastrado[0]; ?></td>
			<td><?= $cadastrado[1]; ?></td>
			<td><?= $cadastrado[2]; ?></td>
		</tr>
	<?php endforeach ?>
</table>