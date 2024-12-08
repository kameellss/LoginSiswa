<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Upload Tugas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="dashboard">
        <header class ="sidebar">
            <h2>Sistem Kependidikan Siswa Lusiano</h2>
            <ul class="list-unstyled">
                <li><a href="main_page.php" class="btn btn-secondary w-100">Dashboard</a></li>
                <li><a href="jadwal.php" class="btn btn-secondary w-100">Jadwal Pelajaran</a></li>
                <li><a href="materi.php" class="btn btn-secondary w-100">Materi Pembelajaran</a></li>
                <!-- <li><a href="upload.php" class="btn btn-light w-100">Upload Tugas</a></li> -->
                <li><a href="tugas_list.php" class="btn btn-light w-100">Daftar Tugas</a></li>
            </ul>
        </header>

        <main class="content">
            <h2>Upload Tugas</h2>

            <?php 
            require_once 'UploadController.php';
            $controller = new UploadController();
            $message = $controller->handleUpload();
            if ($message): ?>
                <div class="alert alert-info" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                </div>
                <div class="mb-3">
                    <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengumpulan" class="form-label">Tanggal Pengumpulan</label>
                    <input type="date" class="form-control" id="tanggal_pengumpulan" name="tanggal_pengumpulan" required>
                </div>
                <div class="mb-3">
                    <label for="tugas" class="form-label">Tugas</label>
                    <input type="file" class="form-control" id="tugas" name="tugas" accept=".pdf,.docx,.txt" required>
                </div>
                <div class="mb-3">
                    <label for="status_pengumpulan" class="form-label">Status Pengumpulan</label>
                    <select class="form-select" id="status_pengumpulan" name="status_pengumpulan" required>
                        <option value="Tepat Waktu">Tepat Waktu</option>
                        <option value="Terlambat">Terlambat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>