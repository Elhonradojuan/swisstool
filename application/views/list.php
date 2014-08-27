<html>
<head>
</head>
<body>
<h1>Blog de desarrollo web</h1>

<?php
foreach($data as $post){
echo "-----------------------------------<br>";
echo "<b><font color ='orange'>".$post->title."</b></font>"."(Entrada numero ".$post->id.")<br>";
echo $post->content."<br>";
echo "Fecha: ".$post->date."<br>";
echo "-----------------------------------<br><br><br>";
}

//print_r ( $data2 );
?>

</body>
</html>
