<?php

require_once 'db_connect.php';

class Slider extends Db_Connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function save_slider_info($data) {
        $directory = '../assets/images/slider_images/';
        $target_file = $directory . $_FILES['slider_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image']['size'];
        $check = getimagesize($_FILES['slider_image']['tmp_name']);
        if ($check) {
            if (file_exists($target_file)) {
                die("This file already uploaded. plese try another");
            } else {
                if ($file_type != 'jpg' && $file_type != 'JPG' && $file_type != 'png' && $file_type != 'PNG') {
                    die('The file type is not valid. Please use jpg or png');
                } else {

                    if ($file_size > 5000000) {
                        die("File size is too large. Use with in 4mb");
                    } else {
                        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
                        extract($data);
                        $sql = "INSERT INTO tbl_slider (slider_name, slider_image, slider_text, slider_offer, slider_description, publication_status) VALUES ('$slider_name', '$target_file', '$slider_text', '$slider_offer', '$slider_description', '$publication_status')";
                        if (mysqli_query($this->link, $sql)) {
                            $message = "Slider info save successfully";
                            return $message;
                        } else {
                            die('Query problem' . mysqli_error($this->link));
                        }
                    }
                }
            }
        } else {
            die('The file you upload is not image. Plese use valid image file');
        }
    }

    public function select_all_slider_info() {
        $sql = "SELECT * FROM tbl_slider WHERE deletion_status = 0";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_slider_info_by_id($slider_id) {
        $sql = "SELECT * FROM tbl_slider WHERE slider_id = '$slider_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function unpublished_slider_info_by_id($slider_id) {
        $sql = "UPDATE tbl_slider SET publication_status = 0 WHERE slider_id = '$slider_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Slider info unpublished successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function published_slider_info_by_id($slider_id) {
        $sql = "UPDATE tbl_slider SET publication_status = 1 WHERE slider_id = '$slider_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Slider info published successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_slider_info($data) {
        extract($data);
        $new_image = $_FILES['slider_image']['name'];
        if ($new_image) {
            $directory = '../assets/images/slider_images/';
            $target_file = $directory . $_FILES['slider_image']['name'];
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_size = $_FILES['slider_image']['size'];
            $check = getimagesize($_FILES['slider_image']['tmp_name']);
            if ($check) {
                if (file_exists($target_file)) {
                    die("This file already uploaded. plese try for another file.");
                } else {
                    if ($file_type != 'jpg' && $file_type != 'JPG' && $file_type != 'png' && $file_type != 'PNG') {
                        die('The file type is not valid. Please use jpg or png.');
                    } else {
                        if ($file_size > 5000000) {
                            die("File size is too large. use with in 5mb");
                        } else {
                            move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
                            $sql = "UPDATE tbl_slider SET slider_name = '$slider_name',slider_image = '$target_file', slider_text = '$slider_text', slider_offer = '$slider_offer', slider_description = '$slider_description', publication_status = '$publication_status'  WHERE slider_id = '$slider_id' ";
                            if (mysqli_query($this->link, $sql)) {
                                $_SESSION['message'] = "Slider info Update successfully";
                                header('Location: manage_slider.php');
                            } else {
                                die('Query problem' . mysqli_error($this->link));
                            }
                        }
                    }
                }
            } else {
                die('The file you upload is not image. Plese use valid image file');
            }
        } else {
            $sql = "UPDATE tbl_slider SET slider_name = '$slider_name', slider_text = '$slider_text', slider_offer = '$slider_offer', slider_description = '$slider_description', publication_status = '$publication_status' WHERE slider_id = '$slider_id' ";
            if (mysqli_query($this->link, $sql)) {
                $_SESSION['message'] = "Slider info update successfully";
                header('Location: manage_slider.php');
            } else {
                die('Query problem' . mysqli_error($this->link));
            }
        }
    }

    public function delete_slider_info_by_id($slider_id) {
        $sql = "UPDATE tbl_slider SET deletion_status = 1 WHERE slider_id = '$slider_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = "Slider info delete successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
