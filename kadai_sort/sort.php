<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
   <?php
$nums = [15, 4, 18, 23, 10];

function sort_2way(array $arr, string $order = 'ASC'): array {
    if ($order === 'ASC') {
        sort($arr);
    } else {
        rsort($arr);
    }
    return $arr;
}

echo "昇順にソートします。<br>\n";
$asc = sort_2way($nums, 'ASC');
foreach ($asc as $v) {
    echo $v . "<br>\n";
}

echo "降順にソートします。<br>\n";
$desc = sort_2way($nums, 'DESC');
foreach ($desc as $v) {
    echo $v . "<br>\n";
}
  ?>
    </p>
</body>

</html>