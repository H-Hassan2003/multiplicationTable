<!doctype html>
<html>
    <head>
        <title>Times Table</title>
        <style>
            td, th {
                width: 30px;
                height: 30px;
            }
            td {
                text-align: center;
            }
            th {
                background-color: #101010;
                color: #f8f8f8;
            }
            </style>
    </head>

    <body>
    <div align="center">
        <h1>Times Table Chart 10X10</h1>
        <table border="2">
        <tr>
            <th>X</th>
            <?php
            for ($h = 1; $h <= 10; $h++){
                echo '<th>' .$h. '</th>';
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>
            <th>' .$i. '</th>';
            for ($j = 1; $j <= 10; $j++) {
                $product = $i * $j;
                if ($i === $j) {
                    echo "<td style='background-color: #ccffff; color: #000000;'>".$product."</td>";
                } else if ( $i > $j) {
                    echo "<td style='background-color: #9999cc;'>".$product."</td>";
                } else {
                    echo "<td style='background-color: #b8b8b8;'>".$product."</td>";
                }
            }
        }
        ?>
        </table>


    </body>
</html>