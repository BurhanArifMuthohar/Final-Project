/*  Oleh  : Burhan Arif Muthohar
    NIM   : 1800018043
    Kelas : A
*/
function jam() {
    var time = new Date(), //variabel time untuk new date
    hours = time.getHours(), //variabel jam
    minutes = time.getMinutes(), //variabel menit
    seconds = time.getSeconds(); //variabel detik
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds); //untuk menampilkan jam:menit:detik
      
    function harold(standIn) {
        if (standIn < 10) {
          	standIn = '0' + standIn //menambahkan nilai standin
        }
        return standIn; //mengembalikan nilai ke standin
        }
    }
    setInterval(jam, 1000); //mengatur interval
    
function cari() {
    var kata = document.formcari.keyword.value; //memasukkan keyword dari form ke variabel
    var hasil = "http://www.google.com/search?q=" + kata ; //menambahkan var kata dan memasukkan nya ke var hasil
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') //membuka window baru untuk mencari ke google
};

function validasi() {
        var nama = document.getElementById("nama").value; //memasukkan nama dan lain-lain ke variabel
        var email = document.getElementById("email").value;
        var alamat = document.getElementById("alamat").value;
        var status = document.getElementById("status").value;
        var komentar = document.getElementById("komentar").value;
        if (nama != "" && email!="" && alamat !="" && status !="" && komentar !="") { //jika variabel tidak sama dengan kosong
            alert('Data Anda Berhasil Disimpan !'); //tampilkan peringatan data berhasil disimpan
        }else{ //jika sebaliknya
            alert('Anda harus mengisi data dengan lengkap !'); //menampilkan peringatan data harus dilengkapi
        }
    }

document.getElementById("copy").innerHTML = "&copy;COPYRIGHT BURHAN ARIF MUTHOHAR"; //copy akan dipanggil ke html