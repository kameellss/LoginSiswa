<?php
// dashboard.php
include 'get_prestasi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Menyertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <li><a href="index.php" class="btn btn-secondary w-100">Informasi Sekolah</a></li>
                <li><a href="prestasi.php" class="btn btn-light w-100">Prestasi</a></li>
                <li><a href="ppdb.php" class="btn btn-secondary w-100">Informasi PPDB</a></li>
                <li><a href="login.php" class="btn btn-secondary w-100">Login</a></li>
            </ul>
        </header>

        <!-- Carousel -->
        <section id="carouselSection" class="mb-4">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item carousel-item-custom"><img src="assets/13.png" class="d-block w-100" alt="Slide 1"></div>
                    <div class="carousel-item carousel-item-custom active"><img src="assets/14.png" class="d-block w-100" alt="Slide 2"></div>
                    <div class="carousel-item carousel-item-custom"><img src="assets/15.png" class="d-block w-100" alt="Slide 3"></div>
                    <div class="carousel-item carousel-item-custom"><img src="assets/16.png" class="d-block w-100" alt="Slide 4"></div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </section>

        <!-- Konten Utama -->
        <main>
            <div class="section">
                <h2 class="text-center mb-4">Prestasi Siswa</h2>
                <div class="container">
                    <ul class="list-group">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <li class="list-group-item mb-2" onclick="toggleDetails(this)" style="cursor: pointer;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><?php echo $row['judul']; ?></span>
                                        <i class="arrow">&#9662;</i>
                                    </div>
                                    <div class="details mt-3" style="display: none; background-color: #f1f4f9; padding: 10px; border-radius: 5px;">
                                        <strong>Nama:</strong> <?php echo $row['nama']; ?><br>
                                        <strong>Jenis Lomba:</strong> <?php echo $row['jenis_lomba']; ?><br>
                                        <strong>Tingkat:</strong> <?php echo $row['tingkat']; ?><br>
                                        <strong>Kelas:</strong> <?php echo $row['kelas']; ?><br>
                                        <strong>Penghargaan:</strong> <?php echo $row['penghargaan']; ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <li class="list-group-item">Tidak ada data prestasi.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <!-- Menyertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>