<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="my-[2rem] mx-[2rem]">
    <h1 class="font-bold text-4xl">Total nilai</h1>
    <form action="" method="post">
        <input class="border-2 rounded-md border-red-400" type="text" name="nilai">
        <input class="text-white bg-blue-400 border-2 border-white px-1 py-1 rounded-md text" type="submit" value="cek">
    </form>
    <section>
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
    </section>
</body>
</html>
