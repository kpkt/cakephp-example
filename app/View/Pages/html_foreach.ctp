<?php
//$datas = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//$datas2 = array("A","B","C","D","Y","Z");
echo "<h1>$tajuk</h1>";

foreach ($datas as $data):
echo "Loop : $data <br/>";
endforeach;
echo '<br/>';

echo '<ul>';
foreach ($datas as $data):
echo "<li>Loop : $data </li>";
endforeach;
echo '<ul>';

echo '<br/>';

echo '<ul>';
foreach ($datas as $key => $value):
echo "<li>Key : $key | Value $value";
endforeach;
echo '<ul>';

echo '<br/>';

echo '<ul>';
foreach ($datas2 as $key => $value):
echo "<li>Key : $key | Value $value";
endforeach;
echo '<ul>';