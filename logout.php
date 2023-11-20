<?php

session_start();  
   $_SESSION['role'];

   if ($_SESSION['role'] == "Admin") {
       	$_SESSION['id_user'];  
     	unset($_SESSION["id_user"]);

     }elseif ($_SESSION['role'] == "Siswa") {
     	$_SESSION['id_user'];   
        $_SESSION['id_siswa'];
     	unset($_SESSION["id_user"]);
     	unset($_SESSION["id_siswa"]);

     }elseif ($_SESSION['role'] == "Guru") {
     	$_SESSION['id_user'];  
        $_SESSION['id_guru'];
     	unset($_SESSION["id_user"]);
		unset($_SESSION["id_guru"]);
     } 





session_unset();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=login'>";

?>
  