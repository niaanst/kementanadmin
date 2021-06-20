<?php
use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        include('phpmailer/Exception.php');
        include('phpmailer/PHPMailer.php');
        include('phpmailer/SMTP.php');
        $koneksi = new mysqli("localhost","root","","museum");
        session_start();
$id=$_GET['id'];
$order=$_GET['order'];
$ambil=$koneksi->query("SELECT nama,email FROM tabel_reservasikunjungan WHERE id_reservasi=".$id."");
$pecah = $ambil->fetch_assoc();
    $email_pengirim = 'niairwantinst99@gmail.com'; // Isikan dengan email pengirim
    $nama_pengirim = $_SESSION['namaadmin'];; // Isikan dengan nama pengirim
    $email_penerima = ''.$pecah['email'].''; // Ambil email penerima dari inputan form
    echo $email_penerima;
    $nama_penerima = ''.$pecah['nama'].'';
    $subjek = "testing"; // Ambil subjek dari inputan form
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = $email_pengirim; // Email Pengirim
    $mail->Password = 'niairwanti99'; // Isikan dengan Password email pengirim
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
    $mail->setFrom($email_pengirim, $nama_pengirim);
    $mail->addAddress($email_penerima, '');
    $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
    // Load file content.php
    ob_start();
    if($order==1){
    include "content_terima.php";}
    elseif($order==0){
        include "content_tolak.php";  
    }
    $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
    ob_end_clean();
    $mail->Subject = $subjek;
    $mail->Body = $content;
    // $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email // Jika tanpa attachment
    $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            echo "<h1>Email berhasil dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kunjungan'>";
        }else{ // Jika Email gagal dikirim
            echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kunjungan'>";
            // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
        }

?>