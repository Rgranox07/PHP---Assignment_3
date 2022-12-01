<?php
class database{
    private $servername = "172.31.22.43";
    private $username   = "Jenilkumar200514591";
    private $password   = "WVhR6Ec-9g";
    private $database   = "Jenilkumar200514591";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect: " . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }
    //Insert into database
    public function dataInsert($post){
        $f_name = $this->conn->real_escape_string($_POST['f_name']);
        $l_name = $this->conn->real_escape_string($_POST['l_name']);
        $b_date = $this->conn->real_escape_string($_POST['b_date']);
        $b_place = $this->conn->real_escape_string($_POST['b_place']);
        $age = $this->conn->real_escape_string($_POST['age']);
        $blood_group = $this->conn->real_escape_string($_POST['blood_group']);
        $caste = $this->conn->real_escape_string($_POST['caste']);
        $religion = $this->conn->real_escape_string($_POST['religion']);
        $education = $this->conn->real_escape_string($_POST['education']);
        $occupation = $this->conn->real_escape_string($_POST['occupation']);
        $address = $this->conn->real_escape_string($_POST['address']);
        $contact = $this->conn->real_escape_string($_POST['contact']);
        $query = "INSERT INTO wedding(f_name, l_name, b_date, b_place, age, blood_group, caste, religion, education, occupation, address, contact) VALUES ('$f_name', '$l_name', '$b_date', '$b_place', '$age', '$blood_group', '$caste', '$religion', '$education', '$occupation', '$address', '$contact')";
        $sql = $this->conn->query($query);
        if ($sql == true){
            header("Location:index.php?msg1=insert");
        }else{
            echo "Record was not added";
        }
    }
    //Grab the data from database
    public function displayData(){
        $query = "SELECT * FROM wedding";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            $data = array();
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            echo "No records found in database";
        }
    }
    //Now we will just grab one row from the table (Method to read and update)
    public function displayRecordById($id){
        $query = "SELECT * FROM wedding WHERE id = '$id'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
        }else{
            echo "No record found in database";
        }
    }
    //Now we will create our update function
    public function updateRecord($postData){
        $f_name = $this->conn->real_escape_string($_POST['uf_name']);
        $l_name = $this->conn->real_escape_string($_POST['ul_name']);
        $b_date = $this->conn->real_escape_string($_POST['ub_date']);
        $b_place = $this->conn->real_escape_string($_POST['ub_place']);
        $age = $this->conn->real_escape_string($_POST['uage']);
        $blood_group = $this->conn->real_escape_string($_POST['ublood_group']);
        $caste = $this->conn->real_escape_string($_POST['ucaste']);
        $religion = $this->conn->real_escape_string($_POST['ureligion']);
        $education = $this->conn->real_escape_string($_POST['ueducation']);
        $occupation = $this->conn->real_escape_string($_POST['uoccupation']);
        $address = $this->conn->real_escape_string($_POST['uaddress']);
        $contact = $this->conn->real_escape_string($_POST['ucontact']);
        $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)){
            $query = "UPDATE wedding SET f_name = '$f_name', l_name = '$l_name', b_date = '$b_date', b_place = '$b_place', age = '$age', blood_group = '$blood_group', caste = '$caste', religion = '$religion', education = '$education', occupation = '$occupation', address = '$address', contact = '$contact' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if ($sql == true){
                header("Location:index.php?msg2=update");
            }else{
                echo "Data didn't updated";
            }
        }
    }
    //Now we will construct our delete part
    public function deleteRecord($id){
        $query = "DELETE FROM wedding WHERE id = '$id'";
        $sql = $this->conn->query($query);
        if ($sql == true){
            header("Location:index.php?msg3=delete");
        }else{
            echo "Couldn't delete the record";
        }
    }
}
