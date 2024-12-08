

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Daftar Tugas</title>
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
                <li><a href="jadwal.php" class="btn btn-secondary w-100">Jadwal Pelajaran</a></li>
                <li><a href="materi.php" class="btn btn-secondary w-100">Materi Pembelajaran</a></li>
                <!-- <li><a href="upload.php" class="btn btn-light w-100">Upload Tugas</a></li> -->
                <li><a href="tugas_list.php" class="btn btn-light w-100">Daftar Tugas</a></li>
            </ul>
        </header>
        <main class="content p-4 flex-grow-1">
            <h2>Daftar Tugas yang Telah Diupload</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mata Pelajaran</th>
                        <th>Judul Tugas</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // URL API
                    $apiUrl = "http://localhost:8000/api/tugas";

                    // Mengambil data dari API
                    $response = file_get_contents($apiUrl);
                    $tugasData = json_decode($response, true);

                    // Memeriksa apakah data berhasil diambil
                    if ($tugasData && $tugasData['success']) {
                        foreach ($tugasData['data'] as $tugas) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($tugas['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($tugas['mata_pelajaran']['nama_pelajaran']) . "</td>";
                            echo "<td>" . htmlspecialchars($tugas['judul_tugas']) . "</td>";
                            echo "<td>" . nl2br(htmlspecialchars($tugas['deskripsi'])) . "</td>";
                            echo "<td>" . htmlspecialchars($tugas['tanggal_deadline']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>Tidak ada data tugas yang tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <!-- Menyertakan JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>