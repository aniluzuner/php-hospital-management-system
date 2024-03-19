<?php include 'header.php'; ?>

  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="formdiv col-4 bg-white p-5">

          <a href="<?php if(@$_GET['kullanici'] == "doktor") echo 'anamenu.php?kullanici=doktor'; else echo 'anamenu.php'; ?>"> <img class="d-flex m-auto mb-3" src="images/logo.png" width="100%"> </a>

          <?php
          if(@$_GET['kullanici'] == "doktor"){
            echo '
            <form action="islem.php" method="post">

              <h2 class="h3 fw-bold pt-3 d-flex">TEMEL BİLGİLER <i style="cursor: pointer;" onclick="editprofile()" class="fa-solid fa-pen h5 ms-auto my-auto"></i></h2>

              <label class="form-label mt-3 ms-1 text-muted lh-1">AD SOYAD</label>
              <p id="p_adsoyad" class="ps-1 fw-bold fs-4 lh-1">'.$_SESSION['patienthasta_Tc'].'&nbsp;&nbsp;</p>
              <input id="adsoyad" style="display:none;" class="form-control" type="text" name="edit_ad"">

              <div class="row">

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">YAŞ</label>
                  <p id="p_date" class="ps-1 fw-bold fs-4 lh-1">'.$doktorveri['doktor_yas'].'&nbsp;&nbsp;</p>
                  <input id="date" style="display:none;" class="form-control" type="number" step="1" min="0" max="150" name="edit_yas">
                </div>

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">BOY</label>
                  <p id="p_boy" class="ps-1 fw-bold fs-4 lh-1">'.$doktorveri['doktor_boy'].'&nbsp;&nbsp;</p>
                  <input id="boy" style="display:none;" class="form-control" type="number" step="1" min="0" max="300" name="edit_boy">
                </div>

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">KİLO</label>
                  <p id="p_kilo" class="ps-1 fw-bold fs-4 lh-1">'.$doktorveri['doktor_kilo'].'&nbsp;&nbsp;</p>
                  <input id="kilo" style="display:none;" class="form-control" type="number" step="0.5" min="0" max="300" name="edit_kilo">
                </div>

              </div>

              <input type="hidden" name="edit_id" value="'.$doktorveri['doktor_id'].'">
              <button id="edit-button" style="display:none;" class="btn btn-danger mt-4" type="submit" name="edit_doktor"> Kaydet </button>
              <a id="cancel-button" style="display:none;" class="btn mt-4 fw-bold" href="profil.php?kullanici=doktor" role="button">İptal</a>

            </form>
            ';
          }
          else {
            echo '
            <form action="islem.php" method="post">

              <h2 class="h3 fw-bold pt-3 d-flex">TEMEL BİLGİLER <i style="cursor: pointer;" onclick="editprofile()" class="fa-solid fa-pen h5 ms-auto my-auto"></i></h2>

              <div class="row">
                <div class="col-6">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">AD</label>
                  <p id="p_ad" class="ps-1 fw-bold fs-4 lh-1">'.$hastacek['hasta_ad'].' &nbsp;&nbsp;</p>
                  <input id="ad" style="display:none;" class="form-control" type="text" name="edit_ad">
                </div>

                <div class="col-6">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">SOYAD</label>
                  <p id="p_soyad" class="ps-1 fw-bold fs-4 lh-1">'.$hastacek['hasta_soyad'].' &nbsp;&nbsp;</p>
                  <input id="soyad" style="display:none;" class="form-control" type="text" name="edit_soyad">
                </div>
              </div>


              <label class="form-label mt-3 ms-1 text-muted lh-1">ŞİFRE</label>
              <p id="p_sifre" class="ps-1 fw-bold fs-4 lh-1"> ********** &nbsp;&nbsp;</p>
              <input id="sifre" style="display:none;" class="form-control" type="password" name="edit_sifre">

              <div class="row">

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">YAŞ</label>
                  <p id="p_date" class="ps-1 fw-bold fs-4 lh-1">'.$hastacek['hasta_yas'].'&nbsp;&nbsp;</p>
                  <input id="date" style="display:none;" class="form-control" type="number" step="1" min="0" max="150" name="edit_yas">
                </div>

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">BOY</label>
                  <p id="p_boy" class="ps-1 fw-bold fs-4 lh-1">'.$hastacek['hasta_boy'].'&nbsp;&nbsp;</p>
                  <input id="boy" style="display:none;" class="form-control" type="number" step="1" min="0" max="300" name="edit_boy">
                </div>

                <div class="col-4">
                  <label class="form-label mt-3 ms-1 text-muted lh-1">KİLO</label>
                  <p id="p_kilo" class="ps-1 fw-bold fs-4 lh-1">'.$hastacek['hasta_kilo'].'&nbsp;&nbsp;</p>
                  <input id="kilo" style="display:none;" class="form-control" type="number" step="0.5" min="0" max="300" name="edit_kilo">
                </div>

              </div>

              <input type="hidden" name="edit_id" value="'.$hastacek['hasta_id'].'">
              <button id="edit-button" style="display:none;" class="btn btn-danger mt-4" type="submit" name="edit_hasta"> Kaydet </button>
              <a id="cancel-button" style="display:none;" class="btn mt-4 fw-bold" href="profil.php" role="button">İptal</a>

            </form>
            ';
          }
          ?>

        </div>
      </div>
    </div>

  </body>
</html>    
