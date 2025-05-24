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

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
