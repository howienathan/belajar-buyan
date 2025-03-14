<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>

    <section class="mx-4 my-4">
        <div class="">
            <h1 class="bg-green-600 text-3xl font-semibold">Skenario Ketiga</h1>
        </div>

        <?php
        $jadwal = [
            ["04:00 - 06:00", "Subuhan dan persiapan sekolah"],
            ["06:30 - 15:30", "Sekolah"],
            ["15:30 - 15:45", "OTW rumah"],
            ["15:45 - 16:00", "Mandi"],
            ["16:00 - 16:30", "Ngaji"],
            ["16:30 - 17:00", "Apalin dialog"],
            ["17:00 - 17:45", "Waktu luang"],
            ["17:45 - 18:00", "Beli bumbu"],
            ["18:00 - 18:15", "Sholat Maghrib"],
            ["18:15 - 18:30", "Makan"],
            ["18:30 - 19:00", "Chattingan"],
            ["19:00 - 19:15", "Waktu luang"],
            ["19:15 - 19:30", "Isya"],
            ["19:30 - 21:30", "Nugas"],
            ["21:30 - 22:00", "Ngobrol dengan ortu"],
            ["22:00 - 04:00", "Bobok"],
        ];

        $time = "18:30";
        $isBelajar = false;
        
        ?>

        <div class="mt-2">
            <h2>Jadwal harian Andi</h2>
            <table class="w-full text-left border='1'">
                <tr class="bg-[#f2f2f2]">
                    <th class="border-[1px] border-black text-center p-2">Waktu</th>
                    <th class='border-[1px] border-black text-center p-2'>Kegiatan</th>
                </tr>

                <?php
                    foreach ($jadwal as $item) {
                        if($item[1]=== "Nugas" && !$isBelajar){
                            echo"<tr class='border-[1px] border-black'>
                                    <td class='border-[1px] border-black p-2'>{$item[0]}</td>
                                    <td class='border-[1px] border-black p-2'>Waktu Luang</td>
                                </tr>";
                        }else{
                            echo "
                            <tr class='border-[1px] border-black'>
                                <td class='border-[1px] border-black p-2'>{$item[0]}</td>
                                <td class='border-[1px] border-black p-2'>{$item[1]}</td>
                            </tr>
                            ";
                        }   
                    }
                ?>
            </table>
            <?php
                echo"<h1>Jam: $time</h1>";  
                
                echo"yang sedang dilakukan: ";

                if($time < "00:00" || $time > "24:00"){
                    echo"orang pundi mas";
                }elseif ($time >= "04:00" && $time <= "06:00") {
                    echo"Subuhan dan persiapan sekolah";
                }elseif ($time > "06:00" && $time <= "15:29") {
                    echo"Sekolah";
                }elseif ($time > "15:29" && $time <= "15:45") {
                    echo"OTW rumah";
                }elseif ($time > "15:45" && $time <= "16:00") {
                    echo"Mandi";
                }elseif ($time > "16:00" && $time <= "16:30") {
                    echo"Ngaji";
                }elseif ($time > "16:30" && $time <= "17:00") {
                    echo"Apalin dialog";
                }elseif ($time > "17:00" && $time <= "17:45") {
                    echo"Waktu luang";
                }elseif ($time > "17:45" && $time <= "18:00") {
                    echo"Beli bumbu";
                }elseif ($time > "18:00" && $time <= "18:15") {
                    echo"Sholat Maghrib";
                }elseif ($time > "18:15" && $time <= "18:30") {
                    echo"Makan";
                }elseif ($time > "18:30" && $time <= "19:00") {
                    echo"Chattingan";
                }elseif ($time > "19:00" && $time <= "19:15") {
                    echo"Waktu luang";
                }elseif ($time > "19:15" && $time <= "19:30") {
                    echo"Isya";
                }elseif ($time > "19:30" && $time <= "21:30") {
                    if($isBelajar){
                        echo"Nugas";
                    } else{
                        echo"Waktu Luang";
                    };
                }elseif ($time > "21:30" && $time <= "22:00") {
                    echo"Ngobrol dengan ortu";
                }else{
                    echo"Bobok";
                }
            ?>
        </div>  
        <div class="">
            <p>Fadhil Al Ghaza</p>
            <p>Satrya Arif</p>
        </div>
    </section>
</body>
</html>