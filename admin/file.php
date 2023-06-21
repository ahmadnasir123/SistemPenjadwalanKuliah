<?php
$target_dir = "excel/";
$target_file = $target_dir . basename($_FILES["fileExcel"]["name"]);
$uploadOk = 1;
$fileFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($_FILES["fileExcel"]["size"]   > 5000000) {
    echo "   <script>
                alert('Pastikan file tidak melebihi 5mb');
                document.location.href = 'dashboard.php';
            </script>
            ";
  $uploadOk = 0;
}
if($fileFileType != "xls" && $fileFileType != "xlsm" && $fileFileType != "xlsx" && $fileFileType != "xlsb"){
    echo "   <script>
                alert('Pastikan file yang anda upload ber ekstensi .xls');
                document.location.href = 'admin.php';
            </script>
            ";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileExcel"]["tmp_name"], $target_file)) {
    $nameF = htmlspecialchars( basename( $_FILES["fileExcel"]["name"])) ;
    echo "   <script>
                alert('Selamat! dokumen $nameF berhasil di upload');
                document.location.href = 'admin.php';
            </script>
            ";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>