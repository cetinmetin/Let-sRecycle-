<?php 
require_once 'nedmin/config/connection.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Geri Dönüşüm</title>
</head>
<body>

<!-- NAV MENU START -->
    <nav>
        <div class="menu">
            <a class="menuLink" href="#home">ANASAYFA</a>
            <a class="menuLink" href="#aboutUs">HAKKIMIZDA</a>
            <a class="menuLink" href="#recycleEarn">GERİ DÖNÜŞTÜR KAZAN</a>
            <a class="menuLink" href="#locations">GERİ DÖNÜŞÜM MERKEZLERİ</a>
            <a class="menuLink" href="#reportWaste">ATIK BİLDİR</a>
            <a class="menuLink" href="#contactUs">İLETİŞİM</a>
        </div>
    </nav>

<!-- NAV MENU END -->
<!-- HOME PAGE START -->
    <section class="home" id="home">
        <div class="darkBg"></div>
        <div class="homeTitle">
            <h1>DÜNYAMIZI KURTARMAK İÇİN YARDIM EDİN</h1>
            <p>Geri Dönüşebilen Atıklarınız İçin Sizlere Ödeme Yapıyoruz</p>
            <a href="#reportWaste" class="btn btn-primary">Hemen Atık Bildir</a>
        </div>
    </section>
<!-- HOME PAGE END -->
<!-- ABOUT US START -->
    <section class="aboutUs" id="aboutUs">
        <h1>NEDEN BİZ? ÇÜNKÜ DOĞAYI ÖNEMSİYORUZ</h1>
        <div class="row">
                <div class="col-md-4">
                    <div class="card centerCardContent">
                        <i class=" fa fa-power-off fa-4x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Güçlü Altyapı
                            </h5>
                            <p class="card-text">Her boyutta ihtiyaca cevap verecek kaynaklara sahibiz. 200'ü aşkın roll-off konteyner filomuz ve taşıma bağlantılarımızla, geri dönüşümlülerinizin bulundukları yerde toplanması için zamanında konteynerler temin edebiliyoruz ve hizmetlerinizde yetişecek ve faydalarınızı en üst düzeye çıkaracak personel ve altyapıya sahibiz.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card centerCardContent">
                        <i class="fa fa-clock fa-4x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Zamanında Teslim Alma</h5>
                            <p class="card-text">Çoğu durumda, işletmeniz tarafından oluşturulan geri dönüştürülebilir maddeleri depolamak için neredeyse hiç yer olmadığını biliyoruz. Boşluk ayırmayı göze alamazsınız, bu yüzden söyleyeceğimizde orada olacağımıza güveniyorsunuz. Zamanında teslim alma, geri dönüşüm programlarımızın bu kadar etkili olmasının bir nedenidir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card centerCardContent">
                        <i class="fa fa-tools fa-4x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Ekipmanlar</h5>
                            <p class="card-text">Daha büyük ölçekli operasyonlarda, gerekli ekipmanın sağlanmasında da yardımcı oluyoruz, çünkü doğru ekipman geri dönüşüm ihtiyaçlarınızı artıracaktır. Sıkıştırıcılar kaplarda daha fazla malzeme toplamanıza izin verir. Balya makineleri, kendi hurdalarınızı sahada işleme koymanıza izin verir.</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card centerCardContent">
                    <i class=" fa fa-recycle fa-4x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Güvenilir Hizmet
                        </h5>
                        <p class="card-text">Anahtar teslim hizmetimizle tüm ekipmanları sağlayabilir ve ihtiyaçlarınız için kişiselleştirilmiş bir sistem kurabiliriz, böylece geri dönüşüm programınıza hemen başlayabilirsiniz.İhtiyaçlarınızı karşılayan ve beklentilerinizi aşan harika bir geri dönüşüm programı oluşturmak için kaynaklara sahibiz. SADECE ŞİRKETİMİZ Özel Sistem Sunuyoruz Piyasada ilk yenilikler için tesisler, Tesisinizi genişletmek ve üretim hatlarınızı mükemmelleştirmek için ihtiyaç duyduğunuz ek ekipmanları sağlarız. Sizi, MÜŞTERİ MÜHENDİSLİ SİSTEMLERDEN Devam Eden Destek veya Potansiyel olarak faydalı materyallerin israfını önlemek için Kapsamlı Danışmanlık. Size TAM GERİ DÖNÜŞÜM YÖNETİMİ HATTI veriyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ABOUT US END -->
<!-- RECYCLE EARN START -->
    <section class="recycleEarn" id="recycleEarn">
        <h1>GERİ DÖNÜŞTÜR KAZAN</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="card centerCardContent">
                    <div class="card-body">
                        <h5 class="card-title">Zamanında teslim alma
                        </h5>
                        <p class="card-text">Çoğu durumda, işletmeniz tarafından oluşturulan geri dönüştürülebilir maddeleri depolamak için neredeyse hiçbir ilave oda bulunmadığını biliyoruz. Boşluk ayırmayı göze alamazsınız, bu yüzden söyleyeceğimizde orada olacağımıza güveniyorsunuz. Zamanında teslim alma, geri dönüşüm programlarımızın bu kadar etkili olmasının bir nedenidir.
                        </p>
                        <a href="#reportWaste" class="btn btn-primary">Form Doldurun</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card centerCardContent">
                    <div class="card-body">
                        <h5 class="card-title">Gelirinizi arttırın
                        </h5>
                        <p class="card-text">Geri dönüşüm işlemlerinizi günlük olarak izleriz ve hurda gelirinizi en üst düzeye çıkarmak için yeni yollar aramaya devam edeceğiz. Şirketimizin, malzemelerin geri dönüştürülmesini sağlamak için şirket politikaları geliştirmelerine yardımcı olmak için yılların deneyimine sahiptir. Bizimle iletişime geçerek daha detaylı bilgi alıp gelirinizi arttırabilirsiniz.
                        </p>
                        <a href="#contactUs" class="btn btn-primary">Bizimle İletişime Geçin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- RECYCLE EARN END -->
<!-- LOCATIONS START -->
    <section class="locations" id="locations">
        <!-- Geri Dönüşüm Merkezleri -->
        <h1>Daha Fazla Bilgiye Mi İhtiyacınız Var?</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card centerCardContent">
                    <i class="fa fa-map-marker-alt fa-4x"></i>
                    <div class="card-body">
                        <h5 class="card-title">ÇEVDENİZ - ÇEVDENİZ ÇEVRE HİZMETLERİ VE TEKNOLOJİLERİ SAN.TİC.LTD.ŞTİ.
                        </h5>
                        <p class="card-text">Adalet Mah. 2132/2 Sok. 3 Trend Office K:4 D:36 Bayraklı, İzmir Atık Yönetimi ve Geri Dönüşüm.
                        </p>
                        <p class="card-text"> Telefon: 02324631071
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card centerCardContent">
                    <i class="fa fa-map-marker-alt fa-4x"></i>
                    <div class="card-body">
                        <h5 class="card-title">ÖZKASAN GERİ DÖNÜŞÜM - ÖZKASAN GERİ DÖNÜŞÜM ATIK TOPLAMA SAN.TİC.LTD.ŞTİ.
                        </h5>
                        <p class="card-text">Karton Geri Dönüşümü Uzundere Mah. Eski İzmir Cad. 787 Karabağlar, İzmir Atık Yönetimi ve Geri Dönüşüm
                        </p>
                        <p class="card-text"> Telefon: 02324631073
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card centerCardContent">
                <i class="fa fa-map-marker-alt fa-4x"></i>
                <div class="card-body">
                    <h5 class="card-title">ENBİOCON - ENDÜSTRİYEL ATIK DÖNÜŞÜM SİSTEMLERİ TAAHHÜT SAN.TİC.LTD.ŞTİ.
                    </h5>
                    <p class="card-text">Katı Atık Geri Kazanımı Alsancak Mah. 1439. Sok. 11 Konak, İzmir Atık Yönetimi ve Geri Dönüşüm
                    </p>
                    <p class="card-text"> Telefon: 02324631076
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- LOCATIONS END -->
    <section class="reportWaste" id="reportWaste">
        <!-- Atık Bildiri formu -->
       <h1>Atık Bildirim Formu<br><small style="font-size:11px"> <?php if($_SESSION["reportWaste"]) echo  $_SESSION["reportWaste"];    ?></small></h1>
       
       <div class="row">
            <div class="col-lg-11 col-lg-offset-2">
              <form id="contact-form" method="post" action="nedmin/config/index.php" role="form">
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_name">İsim</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Lütfen isminizi giriniz" required="required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_lastname">Soyisim</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lütfen soyisminizi giriniz" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_email">Email</label>
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Lütfen e-mail adresinizi giriniz" required="required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_phone">Telefon Numarası</label>
                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Lütfen telefon numaranızı giriniz">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="form_message">Mesaj</label>
                      <textarea id="form_message" name="message" class="form-control" placeholder="Lütfen mesajınızı giriniz" rows="4" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_district">İlçe</label>
                            <select name="district" id="form_district" class="form-control">
                                <option value="seciniz" selected disabled hidden>Seçiniz..</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="wasteType">Atık Türü</label>
                            <select name="wasteType" id="wasteType" class="form-control">
                            <?php 
                                
                                $query = $db->query("SELECT * FROM atikturu", PDO::FETCH_ASSOC);

                                if ( $query->rowCount() ){
                                    foreach( $query as $row ){
                                        echo "<option value=".$row['atikTuruID'].">".$row['atikAd']."</option><br>";
                                    }
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity">Miktarı</label>
                            <input id="quantity" type="number" name="quantity" class="form-control" placeholder="Tahmini(Kg)" required="required">
                        </div>
                    </div>
                  <div class="col-md-12">
                    <input type="submit" name="reportWaste" id="reportWaste" class="btn btn-primary" value="Bizimle İletişime Geçin">
                  </div>
                    
                </div>
              </div>
              </form>
            </div>
          </div>
    </section>
    <section class="contactUs" id="contactUs">
        <!-- İletişim -->
        <h1>Daha Fazla Bilgiye Mi İhtiyacınız Var?</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="card centerCardContent">
                    <i class="fa fa-map-marker-alt fa-4x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Ofis Adresimiz
                        </h5>
                        <p class="card-text">4119. Sk. Selvili, 35130 Karabağlar/İzmir
                        </p>
                        <p class="card-text">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195.486356157827!2d27.126761428887274!3d38.37717124182647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdf207e7a7db9%3A0x5386b4650706eca!2sSelvili%2C%204119.%20Sk.%2C%2035130%20Karaba%C4%9Flar%2F%C4%B0zmir!5e0!3m2!1str!2str!4v1575577212031!5m2!1str!2str" width="350" height="170" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card centerCardContent">
                    <i class="fa fa-phone fa-4x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Telefon Numaralarımız
                        </h5>
                        <p class="card-text">GSM: 0555 555 55 55
                        </p>
                        <p class="card-text">Faks: 02324631073
                        </p>
                        <h6 class="card-title">Çalışma Saatlerimiz
                        </h6>
                        <p class="card-text"> Pazartesi - Cuma: 09:00 - 18:00
                        </p>
                        <p class="card-text"> Cumartesi: 10:00 - 15:00
                        </p>
                        <p class="card-text"> Pazar: 10:00 - 15:00
                        </p>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ilceler.js"></script>
</body>
</html>