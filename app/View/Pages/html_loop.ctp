<?php
/**
 * Loop For
 */
$i = 5;
for($x = 0; $x <=$i; $x++){
    echo "Ini nomber : $x <br/>";
}

echo '<br/>';
//Unordered List
echo '<ul>';
for($x = 0; $x <=$i; $x++){
    echo "<li>Ini nomber : $x </li>";
}
echo '</ul>';

echo '<br/>';
//Ordered List
echo '<ol>';
for($x = 0; $x <=$i; $x++){
    echo "<li>Ini nomber : $x </li>";
}
echo '</ol>';

//Odered List with type
echo '<ol type="i">';
for($x = 0; $x <=$i; $x++){
    echo "<li>Ini nomber : $x </li>";
}
echo '</ol>';

//Odered List with type
echo '<ol type="a">';
for($x = 0; $x <=$i; $x++){
    echo "<li>Ini nomber : $x </li>";
}
echo '</ol>';