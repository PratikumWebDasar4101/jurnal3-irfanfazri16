<?php

$file=$_FILES['dokumen'];
$nama_file =$file['name'];
$nama_tmp =$file['tmp_name'];
$upload_dir="upload/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="<?php echo $upload_dir .$nama_file;?>">
</body>
</html>

