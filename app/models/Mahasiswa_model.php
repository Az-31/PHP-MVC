<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Andi Prasetyo",
    //         "nim" => "220301001",
    //         "email" => "andi.prasetyo@example.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Siti Nurhaliza",
    //         "nim" => "220301002",
    //         "email" => "siti.nurhaliza@example.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Budi Santoso",
    //         "nim" => "220301003",
    //         "email" => "budi.santoso@example.com",
    //         "jurusan" => "Teknik Komputer"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}
