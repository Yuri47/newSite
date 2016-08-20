<html>
<body>
<h1>Listagem de produtos</h1>
<table>
<?php foreach ($users as $p): ?>
<tr>
<td><? = $p->name ?> </td>
<td><? = $p->email ?> </td>
<td><? = $p->id3 ?> </td>
 
</tr>
<?php endforeach ?>
</table>