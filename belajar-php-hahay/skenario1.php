<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>total nilai</h1>
    <form action="" method="post">
        <input type="text" name="nilai">
        <input type="submit" value="cek">
    </form>
</body>
</html>
<?php
$nilai=$_POST['nilai'];
if ($nilai >= 0 and $nilai <= 69) {
    echo "Nilai Anda = " .$nilai. "<br>";
    echo "Nilai Huruf = D";
} 
else if ($nilai >= 79 and $nilai <= 79) {
    echo "Nilai Anda = " .$nilai. "<br>";
    echo "Nilai Huruf = C";
}
else if ($nilai >= 80 and $nilai <= 89) {
    echo "Nilai Anda = " .$nilai. "<br>";
    echo "Nilai Huruf = B";
}
else if ($nilai >= 90 and $nilai <= 100) {
    echo "Nilai Anda = " .$nilai. "<br>";
    echo "Nilai Huruf = A";
}
?>