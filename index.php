<?php
// Koneksi ke database
include 'db.connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Menyertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan CSS eksternal -->
    <link rel="stylesheet" href="style.css">
    <style>
        
        .carousel-item-custom {
            height: 500px; /* Atur tinggi sesuai kebutuhan */
        }
        
        .carousel-item-custom img {
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            height: 100%;
            width: 100%;
        }
        </style>
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <header class="sidebar">
            <h2>Sistem Kependidikan Siswa Lusiano</h2>
            <ul class="list-unstyled">
                <li>
                    <a href="index.php" class="btn btn-light w-100">Informasi Sekolah</a>
                </li>
                <li>
                    <a href="prestasi.php" class="btn btn-secondary w-100">Prestasi</a>
                </li>
                <li>
                    <a href="ppdb.php" class="btn btn-secondary w-100">Informasi PPDB</a>
                </li>
                <li>
                    <a href="login.php" class="btn btn-secondary w-100">Login</a>
                </li>
            </ul>
        </header>

        <section id="carouselSection" class="mb-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item carousel-item-custom">
                            <img src="assets/8.png" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item carousel-item-custom active">
                            <img src="assets/1.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/2.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/9.png" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/10.png" class="d-block w-100" alt="Slide 5">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/11.png" class="d-block w-100" alt="Slide 6">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/12.png" class="d-block w-100" alt="Slide 7">
                        </div>
                   
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </section>

            <main class="container mt-4">
            <section class="text-center">
                <h1 class="fw-bold">Selamat Datang di Website Resmi SMK Lusiano 2</h1>
                <div class="row mt-4 align-items-center">
                    <div class="col-md-6">
                        <p class="text-start">
                            Salam hangat dari SMK Lusiano 2,<br>
                            Puji syukur kami panjatkan kepada Tuhan Yang Maha Kuasa atas rahmat dan kasih-Nya yang selalu menyertai kita. Kami juga mengucapkan terima kasih atas dukungan melalui website ini, yang memudahkan kita dalam berkomunikasi dan berbagi informasi. <br>
                            <br>
                            Di era globalisasi ini, kemajuan teknologi dan informasi semakin memudahkan kita untuk mengakses segala informasi yang dibutuhkan. Semoga perkembangan ini juga dapat berperan dalam meningkatkan kualitas pendidikan di Indonesia, khususnya dalam lingkup SMK Lusiano 2 yang terus berkarya untuk bangsa.
                        </p>
                        <h5><strong>Ir. Gregorius Purnama Sidanta, S.Pd.Gr., S.Kom., M.Kom.,  Ph.D.</strong></h5>
                        <p>Kepala Sekolah SMK Lusiano 2</p>
                        <p>Dosen Fakultas Ilmu Komputer Universitas Chandrakirana</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/Pak Pur.png" class="img-fluid rounded-circle" alt="Kepala Sekolah">
                    </div>
                </div>
            </section>
        </main>


        <!-- Main Content -->
        <main class="container">
    
            <div class="section">
                <h2>Informasi Sekolah</h2>
                <p class="info-text">
                    SMK ST LUSIANO 2 adalah lembaga pendidikan yang berdedikasi dalam menciptakan generasi yang kompeten dan berdaya saing tinggi. SMK Lusiano 2 adalah sebuah sekolah menengah kejuruan yang berfokus pada pengembangan sektor pariwisata di daerah Domino. Didirikan pada tahun 1994 oleh Bapak Lusiano, SMK Lusiano 2 berkomitmen untuk menjadi institusi pendidikan yang inovatif dalam mencetak tenaga kerja terampil di bidang pariwisata.
                </p>

                <p class="info-text">
                    Di SMK Lusiano 2, terdapat berbagai program keahlian yang berkaitan dengan dunia pariwisata dan hospitality, seperti Tata Boga, Tata Busana, Tata Kecantikan, Perhotelan, Desain, serta Usaha Perjalanan Wisata. Sekolah ini juga dikenal memiliki beberapa program akademik yang telah meraih penghargaan tingkat nasional, menjadikannya sebagai salah satu SMK terbaik di Indonesia.
                </p>

                <p class="info-text">
                    SMK Lusiano 2 memiliki sejumlah mitra industri ternama, termasuk perusahaan di bidang kosmetik, kepariwisataan, industri kuliner, dan perhotelan, yang turut mendukung proses pembelajaran dan pengembangan keterampilan siswa.
                </p>

                <p class="info-text">
                    Alamat SMK Lusiano 2 terletak di kawasan Lusiano Hills, Kav. Edu No. 45-78, yang mudah diakses dari berbagai tempat. Sekolah ini juga memiliki akses transportasi yang memadai, dengan dekatnya halte Trans Jatiluhur seperti Halte Gereja Lusiano, Halte Raya Ismail, dan Halte Pos Daya, memudahkan siswa untuk mencapai sekolah.
                </p>

            </div>
        </main>
    </div>



    <!-- Menyertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Menutup koneksi
$conn->close();
?>