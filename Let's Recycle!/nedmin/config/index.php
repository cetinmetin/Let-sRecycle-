<?php 
require_once 'connection.php';
if($_POST['reportWaste']){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $district = $_POST['district'];
    $wasteType = $_POST['wasteType'];
    $quantity = $_POST['quantity'];
    $query = $db->prepare("INSERT INTO talep SET
    talepAd = ?,
    talepSoyad = ?,
    talepEmail = ?,
    talepTelefon = ?,
    talepMesaj = ?,
    ilceID = ?,
    atikTuruID = ?,
    talepMiktar = ?,
    talepDurum = 0
    ");
    $insert = $query->execute(array(
            $name, $surname, $email, $phone, $message,$district,$wasteType,$quantity
    ));
    if ( $insert ){
        $_SESSION["reportWaste"]="Talebiniz başarıyla alınmıştır. En kısa sürede sizinle iletişime geçilecektir.";
        header('Location: ../../index.php#reportWaste');
    }
}
if($_GET['id']){
    $id= $_GET['id'];
    $state = $_GET['durum'];
    $query = $db->prepare("UPDATE talep SET
    talepDurum = :yeni_talepDurum
    WHERE talepID = :eski_talepID");
    $update = $query->execute(array(
        "yeni_talepDurum" => $state,
        "eski_talepID" => $id
    ));
    if ( $update ){
        $_SESSION["reportWarning"]=$id."id'li talebin durumu güncellenmiştir.";
         header('Location: ../toding/production/index.php');
    }
}

if($_POST['talepSilButton']){
    $id=$_POST['talepSil'];
    $query = $db->prepare("DELETE FROM talep WHERE talepID = :id");
    $delete = $query->execute(array(
        "id" => $id
    ));
    if ( $delete ){
        $_SESSION["reportWarning"]=$id."id'li talep silinmiştir.";
         header('Location: ../toding/production/index.php');
         
    }
}
if($_POST['login']){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $query = $db->query("SELECT * FROM kullanici WHERE kullaniciAd='{$username}' && kullaniciSifre='{$password}'",PDO::FETCH_ASSOC);
        if($say= $query -> rowCount() ){
            if($say >0 ){
                $_SESSION['login']=true;
                $_SESSION['username']=$username;
                foreach ($query as $row) {
                    $_SESSION["userState"] = $row["kullaniciDurum"];
                    $_SESSION["nameSurname"]= $row["kullaniciIsim"]." ".$row["kullaniciSoyad"];
                }
                header('Location:../toding/production/index.php');
            }
            else{
                $_SESSION["userWarning"] = "Kullanici Adi veya Şifre yanlış.";
                header('Location:../toding/production/login.php');
            }
        }
        else{
            $_SESSION["userWarning"] = "Kullanici Adi veya Şifre yanlış.";
            header('Location:../toding/production/login.php');
        }
}
if($_GET['logout']){
    $_SESSION['login']=false;
    $_SESSION['username']=null;
    $_SESSION["userState"]=null;
    $_SESSION["nameSurname"]=null;
    $_SESSION["userWarning"]=null;
    session_destroy();
    header('Location:../toding/production/index.php');
}

if($_POST["employeeSignIn"]){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $query = $db->query("SELECT * FROM kullanici", PDO::FETCH_ASSOC);
    $kontrol =0;
    foreach ($query as $row) {
        if($row["kullaniciAd"]==$username)
            $kontrol=1;
    }
    if($kontrol==0){
        $query2 = $db->prepare("INSERT INTO kullanici SET
        kullaniciAd = ?,
        kullaniciSifre = ?,
        kullaniciIsim = ?,
        kullaniciSoyad = ?,
        kullaniciEmail = ?,
        kullaniciTelefon = ?
        ");
        $insert = $query2->execute(array(
            $username, $password, $name, $surname,$email,$phone
        ));
        header('Location:../toding/production/index.php');
    }
    else{

    }
}

if($_POST['removeUserButton']){
    $id=$_POST['removeUserID'];
    $query= $db->query("SELECT kullaniciDurum FROM kullanici WHERE kullaniciID = {$id}");
    
    foreach ($query as $row) {
        if($row["kullaniciDurum"]==0){
         header('Location: ../toding/production/removeemployee.php');
         exit;
        }
    }
    
    $query2 = $db->prepare("DELETE FROM kullanici WHERE kullaniciID = :id");
    $delete = $query2->execute(array(
        "id" => $id
    ));
    if ( $delete ){
        $_SESSION["employeeRemove"]= $id." id'li çalışan silinmiştir.";
         header('Location: ../toding/production/removeemployee.php');
    }
}

?>