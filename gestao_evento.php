<html>
<head>
<link rel='stylesheet' 
	href='Registo.css'>
<link rel='stylesheet'
	href='Detalhe.css'>
<link rel='stylesheet'
	href='Cabeçalho.css'>	
</head>
<body>
<h1> Gestão de eventos </h1>
<p> Bem vindo <p>
<hr>
<table>
  <?php 
  $db=new SQLite3('evento.sqlite');
  if(!$db)
    echo "error";
  $col='Evento,Categoria,Data,Local,Artista,Preço';
  $col="*";
  $lista=$db->query("select $col from produtos");
  while($row=$lista->fetchArray(SQLITE3_ASSOC)){
  	echo'<tr>';
  	foreach($row as $V)
  		echo"<td> $V </td>";
  	echo'</tr>';
  }
  $db->close();
  ?>
</table> 
<hr>
<table>
 
</table>
<hr>

</body>
</html>
