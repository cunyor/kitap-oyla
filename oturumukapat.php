
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <title>Kitap D�nyas�</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
* 
{
	margin:0px;
	padding:0;
}
body
 { background:#00FF33;}

ul.araccubuk
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.araccubuk li {float: left;}

ul.araccubuk li a 
{
	/* men� �ubu�undaki yaz�lar�n ayarlar*/
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.araccubuk li a:hover:not(.active) {background-color: #111;}

ul.araccubuk li a.active {background-color:red;}  /* anasaybuttonun arkaplan rengi */

ul.araccubuk li.right {float: right;} /* sa� men� konumu */







input[type="text"] 
{
    width: 200px;
}
input[type="password"] 
{
    width: 200px;
}


table
{
    border: 1px solid black;
	margin:30px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 80%;
	height: 80%;
   font-size:20px;
    border: 10px solid red;
	background:yellow;
}

td, th
 {
 border: 5px solid red;
padding:10px;
}


@media screen and (max-width:600px) and (min-width:100px)
{
  ul.araccubuk li.right, 
  ul.araccubuk li {float: none;}

 table{
    border: 1px solid black;
	margin:30px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 60%;
	height: 60%;
   font-size:15px;
    border: 15px solid red;
	background:yellow;
	}


input[type="text"] 
{
    width: 60px;
}
input[type="password"] 
{
    width: 60px;
}	
}

@media screen and (max-width:400px) and (min-width:80px)
{
  ul.araccubuk li.right, 
  ul.araccubuk li {float: none;}

 table{
    border: 1px solid black;
	margin:20px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 30%;
	height: 30%;
   font-size:8px;
    border: 8px solid red;
	background:yellow;
	}


input[type="text"] 
{
    width: 30px;
}
input[type="password"] 
{
    width: 30px;
}	
}

</style>


<ul class="araccubuk">
  <li><a class="active" href="index.php">Ana Sayfa</a></li>
  <li><a href="kitaplar.php">Kitaplar</a></li>
  <li><a href="yazarlar.php">Yazarlar</a></li>
  <li><a href="kategori.php">Kategoriler</a></li>
  <li class="right"><a href="iletisim.php">�leti�im</a></li>
<li class="right"><a href="hakkinda.php">Hakk�nda</a></li>
  <li class="right"><a href="kayitformu.php">�ye ol</a></li>
   <li class="right"><a href="oturumacmaformu.php">Giri�</a></li>
  
</ul>





<body>
   <div a>
	<table>
    
 <tr>
 
 /* buras� denenmedi hen�z */
<?php
session_start();
	session_destroy();
	
	
	echo "Oturumunuz Kapat�ld�...";
	echo "<br>Tekrar Oturum A�mak ��in <a href='oturumacmaformu.php'> T�klay�n�z </a>
	

?>
	
	
 
 </tr>
	
      </table><div class="a">  </div>



<div style="overflow-x:auto;">

<style type="text/css">
* 
{
	margin:0px;
	padding:0;
}
body
 {
background:gry;
}
table
{
    
	margin:30px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 80%;
	height: 80%;
   font-size:20px;

	background:yellow;
}

td, th
 {
 border: 5px solid red;
padding:10px;
}

 @media screen and (max-width:500px) and (min-width:100px) {
        /*E�er pencere boyutu 500px ile 100 px aras�nda ise*/
   
<body>
</html>