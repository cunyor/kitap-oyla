<table align="center" cellpadding="5">
<br>
<br>
<br>
<br>
<br>
<center>
 <?php
	session_start();	
	if(!isset($_SESSION["kullanicino"]))
	{
		echo "Bu Sayfayi G�rmek i�in L�tfen Oturum A��n";
		exit;
	}	
 ?>
 </center>
 </table>