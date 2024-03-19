<?php include 'header.php'; ?>

  <body>
    <div class="d-flex position-absolute">
      <img src="images/logo.png" width="300px" class="m-5">
    </div>

    <div class="container d-flex" style="height: 100vh">
      <div class="row justify-content-center my-auto">
        <div class="col-11 col-md-10 d-flex justify-content-center align-items-center" style="padding-bottom: 2rem;">
          <div class="fs-2 fw-bold text-white text-center menu-kart py-4 w-100 lh-1">Hoşgeldiniz, Sayın <?php if(@$_GET['kullanici'] == 'doktor') echo "Prof. Dr. ".$_SESSION['patienthasta_Tc']; else echo $hastacek['hasta_ad']." ".$hastacek['hasta_soyad'] ?> </div>
        </div>
      
        <div class="col-11 col-md-5 d-flex pe-3 pb-3">
          <div class="menu-kart w-100 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-address-book text-white text-center" style="width: 30%; font-size: 4rem;"></i>
            <span class="fs-2 fw-bold text-white text-center" style="width: 70%;">Profil</span>
            <a href="<?php if(@$_GET['kullanici'] == 'doktor') echo 'profil.php?kullanici=doktor'; else echo 'profil.php'; ?>" class="stretched-link"></a>
          </div>
        </div>

        <div class="col-11 col-md-5 d-flex ps-3 pb-3">
          <div class="menu-kart w-100 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-calendar-days text-white text-center" style="width: 30%; font-size: 4rem;"></i>
            <span class="fs-2 fw-bold text-white text-center" style="width: 70%;">Randevularım</span>
            <a href="<?php if(@$_GET['kullanici'] == 'doktor') echo 'liste.php?kullanici=doktor'; else echo 'liste.php?kullanici=hasta'; ?>" class="stretched-link"></a>
          </div>
        </div>

        <div class="col-11 col-md-5 d-flex pe-3 pt-3">
          <div class="menu-kart w-100 d-flex align-items-center justify-content-center">
            <i class="fa-solid <?php if(@$_GET['kullanici'] == 'doktor') echo 'fa-syringe'; else echo 'fa-clipboard-list'; ?> text-white text-center" style="width: 30%; font-size: 4rem;"></i>
            <span class="fs-2 fw-bold text-white text-center" style="width: 70%;"><?php if(@$_GET['kullanici'] == 'doktor') echo 'İlaç Yaz'; else echo 'Reçetelerim'; ?></span>
            <a href="<?php if(@$_GET['kullanici'] == 'doktor') echo 'ilacyaz.php'; else echo 'liste.php'; ?>" class="stretched-link"></a>
          </div>
        </div>

        <div class="col-11 col-md-5 d-flex ps-3 pt-3">
          <div class="menu-kart w-100 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-arrow-right-from-bracket text-white text-center" style="width: 30%; font-size: 4rem;"></i>
            <span class="fs-2 fw-bold text-white text-center" style="width: 70%;">Çıkış Yap</span>
            <a href="islem.php?logout" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>



  </body>
</html>
