<?php
$cars = array("Volvo", "BMW", "Toyota");
implode($cars);
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
print_r($cars);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>