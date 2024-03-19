<div class="container">
  <div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="formdiv col-4 bg-white p-5">
      <a href="index.php"> <img class="d-flex m-auto mb-3" src="images/logo.png" width="100%"> </a>
      <form action="islem.php" method="post">
        <label class="form-label mt-4 ms-1">Doktor</label>
        
        <select class="form-select" name="doktorad" required>
          <?php 
            include 'baglan.php';
            $doktorAdlar = $db->query("SELECT * FROM doktorlar",PDO::FETCH_ASSOC);

            foreach($doktorAdlar as $doktor)
              echo '<option value="'.$doktor["doktor_adi"].'">'.$doktor["doktor_adi"].'</option>';
          ?>  
        </select>

        <button class="btn btn-danger mt-4" type="submit" name="doktor_giris"> Giriş Yap </button>
      </form>
    </div>
  </div>
</div>
