@php
try {
    if(DB::connection()->getPdo()) {
        echo "Selamat Datang Galang anda berhasil terkoneksi ke basis data 
        <b>".DB::connection()->getDatabaseName()."</b>";
        }
    } catch(Exception $e) {
        echo "Gagal Terkoneksi". $e;
    }
    @endphp