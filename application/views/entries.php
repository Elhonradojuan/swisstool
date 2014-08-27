<html>
<body>
<h1>Lista de entradas</h1>
<?php echo "<a href='../index.php/Blog/load_insert/'>Inserta una entrada</a>"; ?>

<ul>
<?php foreach($entries as $entry)
{ 
//echo "<li>".$entry->title."</li>";
//	echo "<li><a href='../../index.php/Blog/by_id/".$entry->id."'>".$entry->title."</a></li>";

echo "-----------------------------------<br>";
echo "<b><a href='/~17698677/swisstool/index.php/Blog/by_id/".$entry->id."'>".$entry->title."</b></a>"."(Entrada numero ".$entry->id.")<br>";
echo "Fecha: ".$entry->date."<br>";
echo "-----------------------------------<br><br>";
} 
?>

</ul>
</body>
</html>
