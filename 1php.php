<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadedFile = $_FILES["file"]["tmp_name"];

    if (is_uploaded_file($uploadedFile)) {
        $destination = "uploads/" . $_FILES["file"]["name"];
        if (move_uploaded_file($uploadedFile, $destination)) {
            echo "ファイルが正常にアップロードされました。";
        } else {
            echo "ファイルのアップロードに失敗しました。";
        }
    } else {
        echo "ファイルが正しくアップロードされていません。";
    }
}
?>
