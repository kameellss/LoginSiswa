<!-- <?php

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Materi Pembelajaran</title>
    <!-- Menyertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan CSS eksternal -->
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="dashboard d-flex" >
        <!-- Sidebar -->

        <div style="width: 100%;" class="dashboard">
            <header class="sidebar">
                <h2>Sistem Kependidikan Siswa Lusiano</h2>
                <ul class="list-unstyled">
                    <li><a href="main_page.php" class="btn btn-secondary w-100">Dashboard</a></li>
                    <li><a href="jadwal.php" class="btn btn-secondary w-100">Jadwal Pelajaran</a></li>
                    <li><a href="materi.php" class="btn btn-light w-100">Materi Pembelajaran</a></li>
                    <li><a href="tugas_list.php" class="btn btn-secondary w-100">Daftar Tugas</a></li>
                    <!-- <li><a href="Upload.php" class="btn btn-secondary w-100">Upload Tugas</a></li> -->
                </ul>
            </header>

            <main class="p-4">
                <div class="page-title mb-4">
                    <h1>Selamat Datang</h1>
                    <h2>Christina Ranimaya Putri Tanjung</h2>
                </div>

                <!-- Konten utama -->
                <main class="content p-4">
                <section>
                <h1>Daftar Materi Pembelajaran</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Nama Materi</th>
                            <th>File Materi</th>
                            <th>Dibuat Pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Endpoint API
                        $apiUrl = "http://localhost:8000/api/materi";

                        // Inisialisasi cURL
                        $ch = curl_init($apiUrl);

                        // Set cURL options
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPGET, true);

                        // Eksekusi cURL dan ambil respons
                        $response = curl_exec($ch);
                        curl_close($ch);

                        // Decode respons JSON
                        $data = json_decode($response, true);

                        // Cek apakah data berhasil diambil
                        if ($data && $data['success'] && !empty($data['data'])) {
                            $materis = $data['data'];
                            $no = 1;
                            foreach ($materis as $materi) {
                                echo "<tr>";
                                echo "<td>{$no}</td>";
                                echo "<td>{$materi['mata_pelajaran']['nama_pelajaran']}</td>";
                                echo "<td>{$materi['nama_materi']}</td>";
                                echo "<td><a href='{$materi['file_materi']}' target='_blank'>Download</a></td>";
                                echo "<td>{$materi['created_at']}</td>";
                                echo "</tr>";
                                $no++;
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada data materi.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
                </main>
        </div>

        <!-- Menyertakan JavaScript untuk Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>

