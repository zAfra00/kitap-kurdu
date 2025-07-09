<?php $title = "Ürün Ekle" ?>
<?php require "_header.php" ?>
<?php require "_nav.php" ?>
<?php require "urun-kontrol.php" ?>

    <div id = "content" > 
        <div class="form-container">
            <form action = " " method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="uisim"> Ürün İsmi : </label> 
                    <input type="text" name = "uisim" id="uisim"  value='<?php  if (isset($_POST["uisim"]))  echo $_POST["uisim"]; ?> ' >
                    <span class="girdi-hata"><?php echo $uisim ?></span>
                        
                </div>
                <div class="form-group">
                    <label for="uaciklama"> Ürün Açıklama : </label> 
                    <textarea name="uaciklama" id="uaciklama"></textarea> <?php  if (isset($_POST["uisim"]))  echo $_POST["ufiyat"]; ?> 

                    <span class="girdi-hata"><?php echo $uaciklama ?></span>

                </div>
                <div class="form-group">
                    <label for="ufiyat"> Ürün Fiyat : </label> 
                    <input type="number" name = "ufiyat" id="ufiyat" min="0" value='<?php  if (isset($_POST["uisim"]))  echo $_POST["uisim"]; ?> ' >>
                    <span class="girdi-hata"><?php echo $ufiyat ?></span>

                </div>
                <div class="form-group">
                    <label for="ukategori"> Katagoriler : </label> 
                    <select name="ukategori" id="ukategori">
                        <option value="0" disabled selected>Kategori seçiniz</option> 
                        <option value="1" <?php  if (isset($_POST["ukatagori"]) && $_POST["ukatagori"]== 1) echo "selected" ?> >Yüz Temizleyici</option>
                        <option value="2" <?php  if (isset($_POST["ukatagori"]) && $_POST["ukatagori"]== 2) echo "selected" ?> >Tonik</option>
                        <option value="3" <?php  if (isset($_POST["ukatagori"]) && $_POST["ukatagori"]== 3) echo "selected" ?> >Nemlendirici</option>
                        <option value="4" <?php  if (isset($_POST["ukatagori"]) && $_POST["ukatagori"]== 4) echo "selected" ?> >Maske</option>
                        <option value="5" <?php  if (isset($_POST["ukatagori"]) && $_POST["ukatagori"]== 5) echo "selected" ?> >Güneş Kremleri</option>
                    </select>
                    <span class="girdi-hata"><?php echo $ukatagori ?></span>

                </div>
                <div class="form-group">
                    <label for="ufoto"> Ürün Fotoğrafı : </label> 
                    <input type="file" name = "ufoto" id="ufoto">
                </div>     
                
               
                <div class="form-group">
                    <label for="ufiyat"> Ürün Reklam : </label> 
                    <input type="checkbox" name = "ureklam[]" id="ureklam"
                    value="internet"> Internet
                    <input type="checkbox" name = "ureklam[]" id="ureklam"
                    value="televizyon"> Televizyon
                    <input type="checkbox" name = "ureklam[]" id="ureklam"
                    value="sm"> Sosyal Medya  
                    <span class="girdi-hata"><?php echo $ureklam ?></span>
                                     
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Ürün Kaydet" 
                    class="btn" btn-primary> 
                </div>
                
            </form>
        </div>
    </div>

<?php require "_footer.php" ?>