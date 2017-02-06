<?php

require_once 'db_connect.php';

class Sub_category extends Db_Connect {

    public $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function save_sub_category_info($data) {
        extract($data);
        $sql = "INSERT INTO tbl_sub_category (sub_category_name, sub_category_description, publication_status) VALUES ('$sub_category_name', '$sub_category_description', '$publication_status' )";
        if (mysqli_query($this->link, $sql)) {
            $message = "Sub category info save successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_sub_category_info() {
        $sql = "SELECT * FROM tbl_sub_category WHERE deletion_status = 0";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function unpublished_sub_category_info_by_id($sub_category_id) {
        $sql = "UPDATE tbl_sub_category SET publication_status = 0 WHERE sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Sub category info unpublished successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function published_sub_category_info_by_id($sub_category_id) {
        $sql = "UPDATE tbl_sub_category SET publication_status = 1 WHERE sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Sub category info published successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_sub_category_info_by_id($sub_category_id) {
        $sql = "SELECT * FROM tbl_sub_category WHERE sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_sub_category_info_by_id($data) {
        extract($data);
        $sql = "UPDATE tbl_sub_category SET sub_category_name = '$sub_category_name', sub_category_description = '$sub_category_description', publication_status = '$publication_status' WHERE sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $_SESSION['message'] = 'Sub category info update successfully';
            header('Location: manage_sub_category.php');
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function delete_sub_category_info_by_id($sub_category_id) {
//        $sql = "DELETE FROM tbl_sub_category WHERE sub_category_id = '$sub_category_id' ";
        $sql = "UPDATE tbl_sub_category SET deletion_status = 1 WHERE sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Sub category info delete successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
