<?php
class Validator
{
    public static function validateId($id)
    {
        return filter_var($id, FILTER_VALIDATE_INT);
    }
    public static function string($value, $min = 1, $max = 255)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function phone($value, $min = 11, $max = 50)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function uploadImage(&$errors)
    {
        if (isset($_FILES['file']) && $_FILES['file']['error'] !== UPLOAD_ERR_NO_FILE) {
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = ['jpg', 'jpeg', 'png'];

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) { // 1MB
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        if (move_uploaded_file($fileTmpName, $fileDestination)) {
                            return $fileNameNew;
                        } else {
                            $errors['file'] = "Error moving uploaded file.";
                        }
                    } else {
                        $errors['file'] = "File size must be less than 1MB.";
                    }
                } else {
                    $errors['file'] = "Error uploading file.";
                }
            } else {
                $errors['file'] = "You cannot upload files of this type!";
            }
        } else {
            $errors['file'] = "No file uploaded.";
        }
        return false;
    }
    public static function password($value)
    {
        // Minimum length requirement
        if (strlen($value) < 8) {
            return "Password must be at least 8 characters long.";
        }

        // Complexity requirement (e.g., at least one uppercase letter, one lowercase letter, one number, and one special character)
        if (!preg_match('/[A-Z]/', $value) ||
            !preg_match('/[a-z]/', $value) ||
            !preg_match('/\d/', $value) ||
            !preg_match('/[^A-Za-z0-9]/', $value)) {
            return "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
        }

        // Password is valid
        return true;
    }

}
