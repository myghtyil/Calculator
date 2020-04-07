<?php
if(empty($_GET))
{
	exit('Ничего не передано!');
}
$result;
$numb1=$_GET['a'];
$numb2=$_GET['b'];
$oper=$_GET['oper'];
if ($numb1 =='' || $numb2 =='' || $oper == '')
{
	exit('littleData');
}
else
{

	switch ($oper)
	{
		case 'plus': $res = $numb1 + $numb2; $oper = '+'; break;
		case '-': $res = $numb1 - $numb2; break;
		case '*': $res = $numb1 * $numb2; break;
		case '/':
		if ($numb2 == 0)
		{
			$res = 'бесконечность';
		}
		else
		{
		$res = $numb1 / $numb2;
		}
		break;
		default: exit('Ошибка!');
	}
	$result = $numb1.' '.$oper.' '.$numb2.' = ';

}
exit($result.$res);
?>
