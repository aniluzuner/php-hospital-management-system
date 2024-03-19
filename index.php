<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon Sistemi</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <?php
        if(@$_GET['giris'] == "hasta")
          include 'giris/hastagiris.html';

        elseif(@$_GET['giris'] == "doktor")
          include 'giris/doktorgiris.php';

        elseif(@$_GET['giris'] == "kayıt")
          include 'giris/hastakayit.html';
        
        else 
          include 'giris/girissec.html';
      ?>
    <script src="https://kit.fontawesome.com/a3f76828ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
