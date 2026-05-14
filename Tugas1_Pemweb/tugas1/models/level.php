<?php

class Level
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function index()
    {
        // Mengambil semua data level, diurutkan dari yang terbaru (id terbesar)
        $sql = "SELECT * FROM level ORDER BY id DESC";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        // $data berisi array [nama]
        $sql = "INSERT INTO level(nama) VALUES(?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getLevel($id)
    {
        // Mengambil satu data berdasarkan ID
        $sql = "SELECT * FROM level WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch();
    }

    public function ubah($data)
    {
        // $data berisi array [nama, id] sesuai urutan tanda tanya (?)
        $sql = "UPDATE level SET nama=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        // Menghapus data berdasarkan ID
        $sql = "DELETE FROM level WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}