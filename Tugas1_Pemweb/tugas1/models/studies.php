<?php

class Studies
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function index()
    {
        // Menggunakan LEFT JOIN agar data tetap tampil meski id_level belum diisi
        $sql = "SELECT studies.*, level.nama AS nama_level 
                FROM studies 
                LEFT JOIN level ON studies.id_level = level.id 
                ORDER BY studies.id DESC";
        
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO studies
                (nama, id_level, keterangan, tahun_lulus, foto_sekolah)
                VALUES (?, ?, ?, ?, ?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getStudies($id)
    {
        $sql = "SELECT * FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch();
    }

    public function ubah($data)
    {
        $sql = "UPDATE studies SET
                nama=?,
                id_level=?,
                keterangan=?,
                tahun_lulus=?,
                foto_sekolah=?
                WHERE id=?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}