<?php

require_once 'db_connect.php';

class Application extends Db_Connect {

    //put your code here
    public $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function select_all_published_category_info() {
        $sql = "SELECT * FROM tbl_category WHERE publication_status = 1 AND deletion_status = 0 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_category_info_menu() {
        $sql = "SELECT * FROM tbl_category WHERE publication_status = 1 AND deletion_status = 0 AND category_id !=1 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_sub_category_info() {
        $sql = "SELECT * FROM tbl_sub_category WHERE publication_status = 1 AND deletion_status = 0 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_product_info_by_sub_category_id($sub_category_id) {
        $sql = "SELECT p.*, c.category_name, s.sub_category_name FROM tbl_product as p, tbl_category as c, tbl_sub_category as s WHERE p.category_id = c.category_id AND p.sub_category_id = s.sub_category_id AND s.sub_category_id = '$sub_category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_product() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_category_info_by_id($category_id) {
        $sql = "SELECT * FROM tbl_category WHERE publication_status = 1 AND category_id = '$category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_breakfast() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 1 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_meals() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 4 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_desserts() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 5 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_beverages() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 9 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_burgers() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 6 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_soups() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 8 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_appetizers() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 0 AND sub_category_id = 7 ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_published_slider() {
        $sql = "SELECT * FROM tbl_slider WHERE publication_status = 1 AND deletion_status = 0 ";
        if (mysqli_query($this->link, $sql)) {
            $published_slider_result = mysqli_query($this->link, $sql);
            return $published_slider_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
