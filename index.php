<?php
//include_once "src/Circle.php";
//include_once "src/Resizeable.php";
require __DIR__ . "/vendor/autoload.php";

use Src\Circle;
use Src\Rectangle;
use Src\Square;

$arr = [];
array_push($arr,$circle = new Circle("Circle", 5));
array_push($arr,$rectangle = new Rectangle("Rectangle", 12, 23));
array_push($arr,$square = new Square("Square", 20));
//$circle->resize(10);
//$arr[0] = $circle->toArray(10);
//echo "<br>";

;
//$rectangle->resize(23);
//$arr[1] = $rectangle->toArray(23);
//echo "<br>";
$percent = rand(1,100);
//$arr->resize($percent);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resizeable</title>
    <style>
        table {
            border: solid 1px palegreen;
            text-align: center;
            margin-left: 400px;
            width: 500px;
            height: 500px;
            border-collapse: collapse;
        }
        th,td {
            border: solid 1px darkslateblue;
        }
    </style>
</head>
<body>
<table>
    <caption><h2>Resizeable</h2></caption>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Before Area</th>
        <th>After Area</th>
    </tr>
    <?php foreach ($arr as $key => $value): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $value->getName() ?></td>
            <td><?php echo $value->calculateArea() ?></td>
            <td><?php echo $value->resize($percent) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>