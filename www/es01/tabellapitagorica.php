<html>
<head>
    <title> TAVOLA PITAGORICA </title>
</head>
<head>
    <h1> TAVOLA PITAGORICA </h1>
</head>
<body>
<table border = "1">
<?php
	for($r = 1; $r <= 10; $r++) 
    {
		echo "<tr>";					//stampa riga
		for($c = 1; $c <=10; $c++) 
        {
			$prodotto = $c * $r;			//calcolo tabella pitagorica
			echo "<td> $prodotto </td>";	//stampo prodotto all'interno della colonna
		}
	    echo "</tr>";				
	}
?>
</table>
</body>
</html>