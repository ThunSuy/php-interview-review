<form method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Upload Image</button>
</form>

<?php
$target_dir = "uploads/";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(!is_dir($target_dir)) {
        mkdir($target_dir);
    }

    $file = $_FILES['image'];
    $fileName = basename($file['name']);
    $target_file = $target_dir . $fileName;

    if(move_uploaded_file($file['tmp_name'], $target_file)) {
        echo "<p>Upload thành công!</p>";
        echo "<img src='$target_file' alt='Uploaded Image' style='max-width:300px;'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    
}

$images = glob($target_dir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE); // Lấy tất cả ảnh

if (count($images) > 0) {
    echo "<h3>Ảnh đã upload:</h3>";
    foreach ($images as $image) {
        echo "<div style='display:inline-block; margin:10px; text-align:center;'>";
        echo "<img src='$image' style='max-width:150px; max-height:150px; display:block;'><br>";
        echo basename($image); // Hiển thị tên file
        echo "</div>";
    }
} else {
    echo "<p>Chưa có ảnh nào được upload.</p>";
}