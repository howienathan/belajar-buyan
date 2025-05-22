<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Total Nilai</title>
</head>
<body class="my-8 mx-8 bg-gray-50 font-sans">
    <h1 class="font-bold text-4xl mb-4">Total Nilai</h1>

    <form action="" method="post" class="mb-6">
        <input class="border-2 border-red-400 rounded-md p-2 mr-2" type="text" name="nilai" placeholder="Masukkan nilai">
        <input class="bg-blue-400 text-white border-2 border-white px-4 py-2 rounded-md cursor-pointer" type="submit" value="Cek">
    </form>

    <section class="text-lg text-gray-700">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];

            if (is_numeric($nilai)) {
                if ($nilai >= 0 && $nilai <= 69) {
                    echo "Nilai Anda = $nilai<br>";
                    echo "Nilai Huruf = D";
                } elseif ($nilai >= 70 && $nilai <= 79) {
                    echo "Nilai Anda = $nilai<br>";
                    echo "Nilai Huruf = C";
                } elseif ($nilai >= 80 && $nilai <= 89) {
                    echo "Nilai Anda = $nilai<br>";
                    echo "Nilai Huruf = B";
                } elseif ($nilai >= 90 && $nilai <= 100) {
                    echo "Nilai Anda = $nilai<br>";
                    echo "Nilai Huruf = A";
                } else {
                    echo "Nilai di luar rentang yang valid (0–100).";
                }
            } else {
                echo "Masukkan nilai numerik yang valid.";
            }
        }
        ?>
    </section>

    <div class="mt-6">
        <h2 class="text-lg">Jonathan Iatsa Heroku Augta</h2>
        <h2 class="text-lg">El Rakkai Omar Wahid</h2>
    </div>
</body>
</html>
