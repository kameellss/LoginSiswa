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
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <header class="sidebar">
            <h2>Sistem Kependidikan Siswa Lusiano</h2>
            <ul class="list-unstyled">
                <li>
                    <a href="index.php" class="btn btn-secondary w-100">Informasi Sekolah</a>
                </li>
                <li>
                    <a href="prestasi.php" class="btn btn-secondary w-100">Prestasi</a>
                </li>
                <li>
                    <a href="ppdb.php" class="btn btn-light w-100">Informasi PPDB</a>
                </li>
                <li>
                    <a href="login.php" class="btn btn-secondary w-100">Login</a>
                </li>
            </ul>
        </header>

        <section id="carouselSection" class="mb-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item">
                            <img src="8.png" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="1.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="2.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="9.png" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="10.png" class="d-block w-100" alt="Slide 5">
                        </div>
                        <div class="carousel-item">
                            <img src="11.png" class="d-block w-100" alt="Slide 6">
                        </div>
                        <div class="carousel-item">
                            <img src="12.png" class="d-block w-100" alt="Slide 7">
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

            <body>
            <div class="container">
            <div class="section">
                <h2>Informasi Pendaftaran PPDB 2024</h2>
                <p class="info-text">SMK St. Lusiano membuka pendaftaran untuk tahun ajaran 2024/2025. Bergabunglah dengan kami untuk mengembangkan keterampilan Kepariwisataan di bidang berikut:</p>
                <ul class="prestasi-list">
                    <li>Kuliner
                    </li>
                    <li>Bakery and pastry
                    </li>
                    <li>Usaha Layana Wisata
                    </li>
                    </li>
                    <li>Perhotelan
                    </li>
                    </li>
                    <li>Produksi Busana
                    </li>
                    </li>
                    <li>Desain Feysen
                    </li>
                    </li>
                    <li>Tata Kecantikan Peminatan Kulit dan Rambut
                    </li>
                    </li>
                    <li>Tata Kecantikan Peminatan Spa Beauty
                    </li>

                </ul>
                <p class="info-text">SMK St. Lusiano membuka pendaftaran untuk tahun ajaran 2024/2025! Raih kesempatan untuk mengembangkan keterampilan di bidang Kepariwisataan bersama kami. Dengan kurikulum yang inovatif dan berbasis praktik, kami menawarkan program unggulan yang akan mempersiapkan Anda untuk sukses di industri pariwisata. Jangan lewatkan peluang ini—daftar sekarang dan jadilah bagian dari masa depan yang gemilang!</p>
                <p><strong>Pendaftaran Dimulai:</strong> 15 Januari 2024</p>
                <p><strong>Tes Seleksi:</strong> 10 Februari 2024</p>
                <p><strong>Pengumuman Hasil:</strong> 20 Februari 2024</p>
                <button class="btn">Daftar Sekarang</button>
                <p><small>*Pendaftaran belum dibuka, mohon periksa kembali pada tanggal yang telah ditentukan.</small></p>
            </div>
        </div>
</body>


    <!-- Menyertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Menutup koneksi
$conn->close();
?>