<!--    Oleh  : Burhan Arif Muthohar
        NIM   : 1800018043
        Kelas : A
-->
<?php
if(isset($_POST['Submit'])){
    if(empty($_POST['nama']) || empty($_POST['alamat']) || empty($_POST['email']) || empty($_POST['status']) || empty($_POST['komentar'])){ //mengecek isi
        //echo"<script>alert('Lengkapi Formulir !');history.go(-1);</script>";  //menampilkan peringatan melengkapi formulir //gak jadi kupakai karena sudah kuganti javascript yg bagian alretnya
        echo"<script>history.go(-1);</script>"; //kembali ke halaman sebelumnya
    }else{
        $nama=$_POST['nama']; //memasukkan ke dalam variabel
        $alamat=$_POST['alamat'];
        $email=$_POST['email'];
        $status=$_POST['status'];
        $komentar=$_POST['komentar'];
        $tanggal=date('l, d-m-Y [h:i:s a]'); //membuat hari, tanggal dan jam
        $buka=fopen("datadiri.txt",'a'); //membuka datadiri.txt untuk ditulis
        fwrite($buka,"Nama : ${nama} <br> "); //menulis di dalam file
        fwrite($buka,"Alamat : ${alamat} <br> ");
        fwrite($buka,"E-mail : ${email} <br> ");
        fwrite($buka,"Status : ${status} <br> ");
        fwrite($buka,"Komentar : ${komentar} <br> ");
        fwrite($buka,"Dibuat : ${tanggal} <br> ");
        fwrite($buka,"<hr>"); //mwmbuat garis
        fclose($buka); //menutup file
        //echo"<script>alert('Data Berhasil diupload !');history.go(-1);</script>"; //menampilkan peringatan berhasil upload //gak jadi kupakai karena bagian alertnya udah kuganti di javascript
        echo"<script>history.go(-1);</script>"; //kembali ke halaman sebelumnya
    }
}