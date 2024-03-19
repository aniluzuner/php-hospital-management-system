function editprofile(){
  var adsoyad = document.getElementById("adsoyad");
  var ad = document.getElementById("ad");
  var soyad = document.getElementById("soyad");
  var sifre = document.getElementById("sifre");
  var date = document.getElementById("date");
  var boy = document.getElementById("boy");
  var kilo = document.getElementById("kilo");

  date.style.display = "block";
  boy.style.display = "block";
  kilo.style.display = "block";

  if(adsoyad){
    adsoyad.style.display = "block";
  }

  if(ad){
    ad.style.display = "block";
  }

  if(soyad){
    soyad.style.display = "block";
  }

  if(sifre){
    sifre.style.display = "block";
  }

  var p_adsoyad = document.getElementById("p_adsoyad");
  var p_ad = document.getElementById("p_ad");
  var p_soyad = document.getElementById("p_soyad");
  var p_sifre = document.getElementById("p_sifre");
  var p_date = document.getElementById("p_date");
  var p_boy = document.getElementById("p_boy");
  var p_kilo = document.getElementById("p_kilo");


  p_date.style.display = "none";
  p_boy.style.display = "none";
  p_kilo.style.display = "none";

  if (p_adsoyad){
    p_adsoyad.style.display = "none";
  }

  if (p_ad){
    p_ad.style.display = "none";
  }

  if (p_soyad){
    p_soyad.style.display = "none";
  }

  if (p_sifre){
    p_sifre.style.display = "none";
  }

  var button = document.getElementById("edit-button");
  var button2 = document.getElementById("cancel-button");

  button.style.display = "inline-block";
  button2.style.display = "inline-block";
}

function kliniksecim(){
  var klinik_sec = document.getElementById("select-klinik");
  var id = klinik_sec[klinik_sec.selectedIndex].id;
  var doktor_sec = document.getElementById("select-doktor");
  var doktor_label = document.getElementById("doktor-label");
  doktor_sec.style.display = "inline-block";
  doktor_label.style.display = "inline-block";
  doktor_sec.selectedIndex = "0";

  document.querySelectorAll("#select-doktor option").forEach(opt => {
    if (opt.id != id) { //opt.id = Doktor id , id = Klinik İd
      opt.style.display = "none";
    }
    else {
      opt.style.display = "inline-block";
    }
  });
}

function hasta_id_al(){
  var hastasec = document.getElementById("hastasec");
  var id = hastasec[hastasec.selectedIndex].id;

  document.getElementById("hidden").value = id;
}

function confirmDel() {
  var agree=confirm("Bu randevuyu silmek istediğinize emin misiniz?");
  if (agree) {
    return true; }
  else {
    return false; }
}