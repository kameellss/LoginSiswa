<?php
// Koneksi ke database
include 'db.connection.php';

// $conn->$sql;
// Query untuk mengambil data dari tabel schedule
$sql = "SELECT * FROM schedule";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Jadwal Mata Pelajaran</title>
    <!-- Menyertakan CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <header class="sidebar">
            <h2>Sistem Kependidikan Siswa Lusiano</h2>
            <ul class="list-unstyled">
                <li><a href="main_page.php" class="btn btn-secondary w-100">Dashboard</a></li>
                <li><a href="jadwal.php" class="btn btn-light w-100">Jadwal Pelajaran</a></li>
                <li><a href="materi.php" class="btn btn-secondary w-100">Materi Pembelajaran</a></li>
                <li><a href="tugas_list.php" class="btn btn-secondary w-100">Daftar Tugas</a></li>
                <!-- <li><a href="Upload.php" class="btn btn-secondary w-100">Upload Tugas</a></li> -->
            </ul>
        </header>

        <!-- Konten Utama -->
        <main>
            <div class="page-title">
                <h1>Selamat Datang</h1>
                <h2>Christina Ranimaya Putri Tanjung</h2>
            </div>

            <!-- Tabel Jadwal Mata Pelajaran -->
            <h3>Jadwal Mata Pelajaran</h3>
            <table class="subject-table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['hari']; ?></td>
                                <td><?php echo $row['jam_mulai']; ?></td>
                                <td><?php echo $row['jam_selesai']; ?></td>
                                <td><?php echo $row['mata_pelajaran']; ?></td>
                                <td><?php echo $row['nama_guru']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Tidak ada data jadwal.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>

    <?php $conn->close(); ?>

    <!-- Menyertakan JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>