<?php 
 echo "Form Kontrol";
 echo "<br>";
 $uisim = $uaciklama = $ufiyat = $ukatagori = $ureklam= "";

if(isset($_POST["submit"])){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo"<br>";

    echo "<pre>";
    print_r($_FILES["ufoto"]);
    echo "</pre>";*/


    if(empty($_POST["uisim"])){
        $uisim="Ürün isim alanı boş olamaz. <br>";
    }
    if(empty($_POST["uaciklama"])){
        $uaciklama= "Ürün açıklama alanı boş olamaz. <br>";
    }
    if(empty($_POST["ufiyat"])){
        $ufiyat="Ürün fiyat alanı boş olamaz. <br>";
    }
    if(empty($_POST["ukategori"])){
        $ukatagori= "Ürün kategori alanı boş olamaz. <br>";
    }    
    
    if (isset($_POST["ureklam"]) ||  empty($_POST["ureklam"])){
        $ureklam= "Ürün reklam alanı boş olamaz. <br>";
    }

    

}


?>