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

    public function tambahDataMahasiswa($data)
    {
        // var_dump($data);
        $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan) 
                  VALUES (:nama, :nim, :email, :jurusan)";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
        // return 0;
    }

    public function ubahDataMahasiswa($data)
    {
        // var_dump($data);
        $query = "UPDATE mahasiswa SET nama=:nama, nim=:nim, email=:email, jurusan=:jurusan WHERE id=:id";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%" . $keyword . "%");
        return $this->db->resultSet();
    }
}
