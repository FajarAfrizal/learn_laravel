@extends('layouts.main')
<html>
    <head>
        <title>SMK Wikrama Bogor</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li class="logo"><a class="logo-text">SMK Wikrama Bogor</a></li>
                <li><a href="sejarah">SEJARAH</a></li>
                <li><a href="kantin">KANTIN</a></li>
                <li><a href="perpustakaan">PERPUSTAKAAN</a></li>
                <li><a href="martikulasi">MARTIKULASAI</a></li>
            </ul>
        </nav>
    </div>
    <div class="heading">
        <h1>Kegiatan Matrikulasi Wikrama 2021/2022</h1>
    </div>
    <div class="gambar">
        <img src="{!! asset('assets/image/matrikulasi.png') !!}"
        class="gambar-gedung">
    </div>
    <div class="sejarah">
        <h4 class="sejarah-p">Martikulasi Sekolah Wikrama</h4>
        <h1 class="sejarah-h">Martikulasi</h1>
    </div>
    <div class="sejarah-a">
        <p>Selamat datang di SMK Wikrama Bogor.</p>
        <p>Sebelum masuk di pembelajaran baru tahun 2021/2022, ada kegiatan MATRIKULASI dulu yaaa.</p>
        <p>Matrikulasi adalah kegiatan pembelajaran yang dilakukan untuk memenuhi kekurangan dalam pengetahuan, keterampilan dan sikap yang berfungsi untuk mengetahui kemampuan awal/kemampuan awal peserta didik yang diperlukan untuk mengikuti kegiatan pembelajaran.</p>
        <p>Waktu pelaksanaan Matrikulasi di SMK Wikrama Bogor yaitu selama 4 minggu (26 Juli - 21 Agustus 2021) secara online dengan sistem sinkronus dan asinkronus. Diikuti oleh 585 peserta didik baru.</p>
    </div>
    <div class="clearfix"></div>
            <footer class="footer-main">
                <div class="footer-grid">   
                      <section class="footer-1">
                        <h4>WIKRAMA</h4>
                          <p>Sejarah</p>
                          <p>Perpustakaan</p>
                          <p>martikulasi</p>
                          <p>kantin</p>
                      </section>
                     <section class="footer-2">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Wangun
                            Kelurahan Sindangsari
                            Bogor Timur 16720</p>
                        <h4>Telepon</h4>
                        <p>085157261663(Whatsapp)</p>
                      </section>
                     <section class="footer-3">
                       <h4>Sosial Media</h4>
                       <p>Instagram :<a href="https://www.instagram.com/fajarafrizal_/" target="_blank" style="color: white;"> @fajarafrizal_</a></p>
                         
                     </section>
                </div>
            </footer>
    </body>