<?php namespace App\Model;
use App\Database\Database;

class Model extends Database
{
    protected $fname = "";
    protected $lname = "";
    protected $email = "";
    protected $bdate = "";
    protected $address = "";

    public function assignValue(array $data)
    {
        if (array_key_exists('fname', $data)) {
            $this->fname = $data['fname'];
        }
        if (array_key_exists('lname', $data)) {
            $this->lname = $data['lname'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('bdate', $data)) {
            $this->bdate = $data['bdate'];
        }
        if (array_key_exists('address', $data)) {
            $this->address = $data['address'];
        }

        return $this;
    }

    public function insert()
    {
        $sql = "INSERT INTO user(fname, lname, email, bdate, address) VALUES(:fname, :lname,:email, :bdate, :address)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':fname', $this->fname);
        $stmt->bindParam(':lname', $this->lname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':bdate', $this->bdate);
        $stmt->bindParam(':address', $this->address);
        $stmt->execute();

    }


    public function selectAll()
    {
        $sql = "SELECT * FROM user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $list = [];
        while ($row = $stmt->fetchObject()) {
            $list[] = $row;
        }

        return $list;
    }

    public function select( int $id)
    {
        $sql = "SELECT * FROM user WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchObject();
        return $result;
    }

    public function update( int $id )
    {
        $sql = "UPDATE user SET fname = :fname, lname = :lname, email = :email, bdate = :bdate, address = :address WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':fname', $this->fname);
        $stmt->bindParam(':lname', $this->lname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':bdate', $this->bdate);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }



    public function delete(int $id){
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }








}