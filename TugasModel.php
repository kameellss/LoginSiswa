<?php
include 'db.connection.php';
class TugasModel {

    
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function uploadTugas($nama_siswa, $mata_pelajaran, $tanggal_pengumpulan, $file_name, $status_pengumpulan) {
        $sql = "INSERT INTO pengumpulan_tugas (nama_siswa, mata_pelajaran, tanggal_pengumpulan, tugas, status_pengumpulan)
                VALUES ('$nama_siswa', '$mata_pelajaran', '$tanggal_pengumpulan', '$file_name', '$status_pengumpulan')";
        return $this->conn->query($sql);
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>