@extends('layouts.link')
<head>
        <title>MTS Assa'adah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="text-align: center;">
    <a class="navbar-brand" href="#" >IDENTITAS SEKOLAH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="alamat">ALAMAT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register">REGISTER</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    <div class="heading">
        <h1>Selamat Datang di MTS Assa'adah Cicurug</h1>
    </div>
    <div class="gambar">
        <img src="{!! asset('assets/image/guru.jpg') !!}"
        class="gambar-gedung">
    </div>
    <div class="sejarah">
        <h4 class="sejarah-p">Identitas</h4>
        <h1 class="sejarah-h">ASSA'ADAH</h1>
    </div>
    <div class="sejarah-a">
        <p>Kepala Madrasah : U. Muh. Abduh, S.Ag, MM</p>
        <br>
        <p>Waktu Belajar: Pagi dan Siang</p>
        <br>
        <P>Bentuk Pendidikan : MTsS</P>
        <br>
        <p>SK Pendirian Sekolah : 2/10/12/09/017</p>
        <br>
        <p>Tanggal SK Pendirian : 1981-02-11</p>
        <br>
        <p>SK Izin Operasional : AHU-0002731.AH.01.04</p>
        <br>
        <p>Tanggal SK Izin Operasional : 2015-02-24</p>
          
    
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>