@extends('layouts.link')
<head>
        <title>MTS Assa'adah</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li class="logo"><a class="logo-text">MTS Assa'adah</a></li>
                <li><a href="register">DAFTAR</a></li>                
                <li><a href="alamat">ALAMAT</a></li>
                <li><a href="identitas">Identitas</a></li>
                <li><a href="index">TENTANG</a></li>
                
            </ul>
        </nav>
    </div>
    <div class="heading">
        <h1>Selamat Datang di MTS Assa'adah Cicurug</h1>
    </div>
    <div class="gambar">
        <img src="{!! asset('assets/image/sddefault.jpg') !!}"
        class="gambar-gedung">
    </div>
    <div class="sejarah">
        <h4 class="sejarah-p">Halaman</h4>
        <h1 class="sejarah-h">ASSA'ADAH</h1>
    </div>
    <div class="sejarah-a">
        <p>MTSS ASSAADAH beralamat di Jl. Kaum Kaler
             Rt. 01/03, Cicurug, Kec. Cicurug, Kab. Sukabumi, Jawa Barat.</p>
          
    
        </div>
        <div class="clearfix"></div>
            <footer class="footer-main">
                <div class="footer-grid">   
                      <section class="footer-1">
                        <h4>MTS ASSAADAH</h4>
                          <p>Tentang</p>
                          <p>Alamat</p>
                          <p>Identitas</p>
                      </section>
                     <section class="footer-2">
                        <h4>Alamat</h4>
                        <p>None</p>
                        <h4>Telepon</h4>
                        <p>085389769984(Whatsapp)</p>
                      </section>
                     <section class="footer-3">
                       <h4>Sosial Media</h4>
                         <p>Instagram :<a href="https://www.instagram.com/fajarafrizal_/" target="_blank" style="color: white;"> @fajarafrizal_</a></p>
                         
                     </section>
                </div>
            </footer>
    </body>