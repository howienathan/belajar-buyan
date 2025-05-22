<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Waktu</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="p-6 bg-gray-100 font-sans">
    <h1 class="text-2xl font-bold mb-4">Penentuan Waktu</h1>

    <form method="post" class="mb-6 bg-white p-4 rounded shadow-md max-w-sm">
        <label for="jam" class="block mb-2 font-semibold">Masukkan Jam (HH:MM):</label>
        <input class="w-full p-2 border rounded mb-3 bg-blue-50" type="text" id="jam" name="jam" placeholder="Contoh: 14:30" required>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Cek Waktu</button>
    </form>
<script>
    document.getElementById('jam').addEventListener('input', function(e) {
        let val = e.target.value.replace(/[^0-9]/g, ''); // hanya angka
        if (val.length > 2) {
            val = val.slice(0, 2) + ':' + val.slice(2, 4);
        }
        e.target.value = val;
    });
</script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $jam = $_POST['jam'];
        $waktu = explode(":", $jam);

        
        if (count($waktu) === 2 && is_numeric($waktu[0]) && is_numeric($waktu[1])) {
            $jamInt = (int)$waktu[0];
            $menitInt = (int)$waktu[1];

            if ($jamInt >= 0 && $jamInt < 24 && $menitInt >= 0 && $menitInt < 60) {
                echo '<div class="p-4 bg-green-100 border border-green-400 rounded text-green-800 font-medium">';

                if ($jamInt >= 0 && $jamInt < 4) {
                    echo "Waktu $jam = Dini hari";
                } elseif ($jamInt >= 4 && $jamInt < 10) {
                    echo "Waktu $jam = Pagi";
                } elseif ($jamInt >= 10 && $jamInt < 15) {
                    echo "Waktu $jam = Siang";
                } elseif ($jamInt >= 15 && $jamInt < 18) {
                    echo "Waktu $jam = Sore";
                } elseif ($jamInt == 17 && $menitInt >= 50 || ($jamInt == 18 && $menitInt < 50)) {
                    echo "Waktu $jam = Petang";
                } else {
                    echo "Waktu $jam = Malam";
                }

                echo '</div>';
            } else {
                echo '<div class="p-4 bg-red-100 border border-red-400 rounded text-red-800 font-medium">Waktu tidak valid. Masukkan jam antara 00:00 - 23:59.</div>';
            }
        } else {
            echo '<div class="p-4 bg-red-100 border border-red-400 rounded text-red-800 font-medium">Format waktu salah. Gunakan format HH:MM.</div>';
        }
    }
    ?>

    <div class="mt-8 text-gray-700">
        <h2 class="text-lg font-semibold">Jonathan Iatsa Heroku Augta</h2>
        <h2 class="text-lg font-semibold">El Rakkai Omar Wahid</h2>
    </div>
</body>
</html>
