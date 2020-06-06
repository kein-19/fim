<?php 

class Mahasiswa_model {
    
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
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
        $query = "INSERT INTO mahasiswa
                    VALUES
                  ('', :nama, :nim, :email, :jurusan)";
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
    }
    
    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nim = :nim,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";

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
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }


    // private $dbh; // database handler
    // private $stmt;

    // public function __construct()
    // {
    //     // data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch(PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function getAllMahasiswa()
    // {
    //     $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // private $mhs = [
    //     [
    //         "nama" => "Fadli",
    //         "nim" => "12190199",
    //         "email" => "fadli@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Ibnu",
    //         "nim" => "12190200",
    //         "email" => "ibnu@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Malik",
    //         "nim" => "12190201",
    //         "email" => "malik@gmail.com",
    //         "jurusan" => "Design Grafis"
    //     ]
    // ];

    // public function getAllMahasiswa()
    // {
    //     return $this->mhs;
    // }
}