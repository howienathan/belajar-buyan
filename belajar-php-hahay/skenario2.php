<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Penentuan Waktu</title>
</head>
<body>
    <h1>Penentuan Waktu</h1>
    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM):</label>
        <input type="text" id="jam" name="jam" required>
        <button type="submit">Cek Waktu</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $waktu = explode(":", $jam);
        $jamInt = (int)$waktu[0];
        $menitInt = (int)$waktu[0];

        if ($jamInt >= 0 && $jamInt < 24 && $menitInt >= 0 && $menitInt < 60) {
            echo '<div class="result">';
            if ($jamInt >= 00.00 && $jamInt < 04.00) {
                echo "Waktu $jam = Dini hari";
            } elseif ($jamInt >= 04.00 && $jamInt < 10.00) {
                echo "Waktu $jam = Pagi";
            } elseif ($jamInt >= 10.00 && $jamInt < 15.00) {
                echo "Waktu $jam = Siang";
            } elseif ($jamInt >= 15.00 && $jamInt < 17.50) {
                echo "Waktu $jam = Sore";
            } elseif ($jamInt >= 17.50 && $jamInt < 18.50) {
                echo "Waktu $jam = Petang";
            } else {
                echo "Waktu $jam = Malam";
            }
            echo '</div>';
        } else {
            echo '<div class="error">Waktu tidak valid. Masukkan jam antara 00:00 - 23:59.</div>';
        }
    }
    ?>
</body>
</html>