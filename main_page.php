<?php
include 'db.connection.php';

// Query untuk jadwal hari ini dan besok
$query = "
SELECT 
    CASE
        WHEN DAYOFWEEK(CURDATE()) IN (1, 7) THEN 'Hari ini libur'
        ELSE CONCAT('Hari ', 
            CASE DAYOFWEEK(CURDATE()) 
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                ELSE NULL 
            END, 
            ': ', mata_pelajaran, ' (', nama_guru, ') dari ', jam_mulai, ' hingga ', jam_selesai)
    END AS jadwal,
    'Hari ini' AS keterangan
FROM schedule
WHERE hari = CASE DAYOFWEEK(CURDATE()) 
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                ELSE NULL 
            END

UNION ALL

SELECT 
    CASE
        WHEN DAYOFWEEK(CURDATE() + INTERVAL 1 DAY) IN (1, 7) THEN 'Besok libur'
        ELSE CONCAT('Hari ', 
            CASE DAYOFWEEK(CURDATE() + INTERVAL 1 DAY) 
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                ELSE NULL 
            END, 
            ': ', mata_pelajaran, ' (', nama_guru, ') dari ', jam_mulai, ' hingga ', jam_selesai)
    END AS jadwal,
    'Besok' AS keterangan
FROM schedule
WHERE hari = CASE DAYOFWEEK(CURDATE() + INTERVAL 1 DAY) 
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                ELSE NULL 
            END
";

// Menjalankan query
$result = $conn->query($query);

// Query untuk pengumuman
$query_announcement = "SELECT * FROM pengumuman LIMIT 6";
$result_announcement = $conn->query($query_announcement);

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    </style>
</head>

<body>
    <div class="dashboard">
        <header class="sidebar">
            <h2>Sistem Kependidikan Siswa Lusiano</h2>
            <ul class="list-unstyled">
                <li><a href="main_page.php" class="btn btn-light w-100">Dashboard</a></li>
                <li><a href="jadwal.php" class="btn btn-secondary w-100">Jadwal Pelajaran</a></li>
                <li><a href="materi.php" class="btn btn-secondary w-100">Materi Pembelajaran</a></li>
                <li><a href="tugas_list.php" class="btn btn-secondary w-100">Daftar Tugas</a></li>
                <!-- <li><a href="Upload.php" class="btn btn-secondary w-100">Upload Tugas</a></li> -->
                <li><a href="index.php" class="btn btn-secondary w-100">Log Out</a></li>
            </ul>
        </header>

        <main class="p-4">
            <div class="page-title">
                <h1>Selamat Datang</h1>
                <h2>Christina Ranimaya Putri Tanjung</h2>
            </div>
            <!-- Carousel Section -->
            <section id="carouselSection" class="mb-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-custom active">
                            <img src="assets/1.png" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/2.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/3.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/4.png" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/5.png" class="d-block w-100" alt="Slide 5">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/6.png" class="d-block w-100" alt="Slide 6">
                        </div>
                        <div class="carousel-item carousel-item-custom">
                            <img src="assets/7.png" class="d-block w-100" alt="Slide 7">
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
            <!-- Jadwal Hari Ini -->
            <h3>Jadwal Hari Ini</h3>
            <?php if ($result->num_rows > 0): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Jadwal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['jadwal']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Hari ini tidak ada jadwal.</p>
            <?php endif; ?>

            <!-- Pengumuman -->
            <h3>Pengumuman</h3>
            <?php if ($result_announcement->num_rows > 0): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Judul Pengumuman</th>
                            <th>Deskripsi</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result_announcement->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['deskripsi']; ?></td>
                                <td><?php echo $row['tanggal_mulai']; ?> - <?php echo $row['tanggal_selesai']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Tidak ada pengumuman.</p>
            <?php endif; ?>


        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>