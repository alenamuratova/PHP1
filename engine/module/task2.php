<?php
// require_once('../config/config.php');
// require_once('../templates/calc.php');

// //Задание 2


$operation = $_POST['operation'];

$num1 = (int)htmlspecialchars(preg_replace("/[^0-9]/", '', $_POST['input_a']));
$num2 = (int)htmlspecialchars(preg_replace("/[^0-9]/", '', $_POST['input_b']));

switch ($operation) {
	case 'plus':
		$operation = '+';
		$result = $num1 + $num2;
		break;
	case 'minus':
		$operation = '-';
		$result = $num1 - $num2;
		break;
	case 'mult':
		$operation = '*';
		$result = $num1 * $num2;
		break;
	case 'div':
		$operation = '/';
		if ($num2 == 0) {
			$result = 'Нельзя делить на ноль';
			break;
		}
		$result = $num1 / $num2;
		break;
}
$answer = $num1.$operation.$num2.'='.$result;
echo $answer;

?>
