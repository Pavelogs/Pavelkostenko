<?php
$count = 0;
$sum = 0;
for ($i=48;$i >= -74;$i-=4) {
    if (($i % 2) == 0) {
        $sum += $i;
        $count++;
    }
}
$sum/=$count;
echo "среднее значение элементов кратных 2, $sum в интервале от (48 до - 74)";
?>