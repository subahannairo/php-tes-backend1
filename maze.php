<!DOCTYPE html>
<html>
<head><title>Generate Maze</title>
<link rel="stylesheet"type="text/css"href="maze.css"/>
</head>
<body>
<div class="kalkulator">
<h2 class="judul">Generate Maze</h2>
<form method="POST"action="maze.php">
<input type="text"name="S"class="bil"placeholder="masukkan bil positive"/>
<input type="submit"name="buat"class="tombol"value="Buat"/>
</form>
<?php
if(isset($_POST["buat"])){
$S=$_POST['S'];
echo "<h3>***Hasil***</h3><br/>";
for($a=0;$a<$S;$a++){
for($b=0;$b<$S;$b++){
if($a%2!=0){
if(($b<1)||($b>$S-2)){
echo "@";
}else{echo "&nbsp";}//&nbsp sebagai ganti dari spasi agar bisa di loop di html
}else{if(($a/2)%2==0){
if($b==1){echo "&nbsp";}else{echo "@";}
}else{
if($b==$S-2){echo "&nbsp";}else{echo "@";}
}
}
}echo "<br/>";
}
}
?>
</div>
</body>
</html>