<!DOCTYPE html>
<html>

<body>

    <?php

    function diagonalTraversal($matrix)
    {
        $n = count($matrix);

        for ($col = $n - 1; $col >= 0; $col--) {
            for ($i = 0, $j = $col; $j < $n; $i++, $j++) {
                echo $matrix[$i][$j] . " ";
            }
            echo "<br>";
        }

       
        for ($row = 1; $row < $n; $row++) {
            for ($i = $row, $j = 0; $i < $n; $i++, $j++) {
                echo $matrix[$i][$j] . " ";
            }
            echo "<br>";
        }
    }

 
    $matrix = [
        [0, 1, 2, 3, 4],
        [5, 6, 7, 8, 9],
        [10, 11, 12, 13, 14],
        [15, 16, 17, 18, 19],
        [20, 21, 22, 23, 24]
    ];

    // فراخوانی تابع برای چاپ ماتریس به صورت مورب
    diagonalTraversal($matrix);

    ?>

</body>

</html>