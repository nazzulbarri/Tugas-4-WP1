<html>
<head>
<title>Menghitung Bilangan Faktorial menggunakan Do While pada PHP</title>
<style>
body{
color:#000;
background-image:url(background.jpg);
background-attachment:fixed;
font-size:18px;
font-family: Arial, sans-serif;
margin:0;
padding:48px;
}
h2{
color:black;
}
a{
text-decoration:none;
}
a:hover{
color:red;
}
.panel{
max-width:480px;
margin:1px auto 1px;
padding:24px;
border-radius:12px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
box-shadow:0 4px 8px blue;
}
input{
border-radius:8px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
font-size:18px;
padding:8px 14px;
margin:0 1px;
border:1px solid #888;
}
.field{
width:320px;
}
.tombol{
color:#fff;
background-color:#000;
}
.tombol:hover{
background-color:blue;
}
</style>
</head>
<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
if($n!=NULL){
$bil = 1;
$i=1;
do
{
	$bil = $bil*$i;
	$i++;
}
while($i<=$n);
}else{
$bil = 'Bilangan Tidak boleh kosong !';
}
}
date_default_timezone_set('Asia/Jakarta');
echo '<div class="panel">';
echo '<h2 align="center">Menghitung Bilangan Faktorial menggunakan Do While</h2>';
echo '<hr>';
echo '<h4>Masukan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '<hr>';
echo '<hr>';
if((isset($n))and($n!=NULL)){
$i=1;
do{
	echo $i.'x';
	$i++;
}while($i<$n);
echo $n;
echo '<br/>';
}
echo '<hr>';
echo '<hr>';
echo date("l, d-M-Y H:i:s");
echo '</div>';
?>
</body>
</html>