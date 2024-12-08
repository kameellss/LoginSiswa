<?php
require_once 'TugasModel.php';

class UploadController {
    private $model;

    public function __construct() {
        $this->model = new TugasModel("192.168.56.101", "dbdpti", "rahasia", "jadwal_mata_pelajaran");
    }

    public function handleUpload() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama_siswa = $_POST['nama_siswa'];
            $mata_pelajaran = $_POST['mata_pelajaran'];
            $tanggal_pengumpulan = $_POST['tanggal_pengumpulan'];
            $status_pengumpulan = $_POST['status_pengumpulan'];

            if (isset($_FILES['tugas']) && $_FILES['tugas']['error'] == 0) {
                $target_dir = "./uploads/"; // Ubah jalur direktori sesuai kebutuhan
                // Cek apakah direktori uploads ada, jika tidak buat
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true); // Buat direktori jika belum ada
                }

                $target_file = $target_dir . basename($_FILES["tugas"]["name"]);
                $uploadOk = 1;
                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                $allowed_types = ['pdf', 'docx', 'txt'];
                if (!in_array($fileType, $allowed_types)) {
                    return "Hanya file PDF, DOCX, dan TXT yang diizinkan.";
                }

                if (file_exists($target_file)) {
                    return "File sudah ada.";
                }

                if ($_FILES["tugas"]["size"] > 10485760) {
                    return "File terlalu besar, maksimal 10MB.";
                }

                if (move_uploaded_file($_FILES["tugas"]["tmp_name"], $target_file)) {
                    $file_name = basename($_FILES["tugas"]["name"]);
                    if ($this->model->uploadTugas($nama_siswa, $mata_pelajaran, $tanggal_pengumpulan, $file_name, $status_pengumpulan)) {
                        return "Tugas berhasil diunggah!";
                    } else {
                        return "Terjadi kesalahan: " . $this->model;
                    }
                } else {
                    return "Terjadi kesalahan saat mengunggah file.";
                }
            } else {
                return "File tidak ditemukan atau terdapat kesalahan saat pengunggahan.";
            }
        }
        return null;
    }
}
?>