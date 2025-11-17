<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas6</title>
    <style>
        th {
            background-color: white;
            padding: 5px;
        }
        .header {
            background-color: green;
            color: black;
            font-weight: bold;
        }
        .ganjil {
            background-color: yellow;
        }
        .genap {
            background-color: cyan;
        }
        table, td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Bilangan :</th>
            <?php
                for($i = 1; $i <= 10; $i++){
                    echo "<th class='header'>$i</th>";
                }
            ?>
        </tr>

        <?php
            for($j = 1; $j <= 10; $j++){

                echo "<tr>";

                echo "<td class='header'>$j</td>";

                for($k = 1; $k <= 10; $k++){
                    $hasil = $j * $k;

                    if($hasil % 2 == 0){
                        echo "<td class='genap'>$hasil</td>";
                    } else {
                        echo "<td class='ganjil'>$hasil</td>";
                    }
                }

                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
