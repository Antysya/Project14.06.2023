<?php //обязатьельно, текс до конструкции не применяют сейчас, но работать будет

//переменные начинаются с $

//echo "Hello world";

/*$variable = "John";

echo $variable;

$n =10;

echo PHP_EOL; //перевод на новую строку
echo $n+10; 

$greetings ='Hello';

//concat
echo "<br>";
echo $greetings . $variable . $n;
echo "<br>";
echo '$greetings $variable $n';
echo "<br>";
echo "$greetings $variable $n";

//array

$array = array(
	'key'=>'value',
	'key1'=>'value1'
);

print_r($array);

$array = array(
        'value',
        'value1'
);

print_r($array);

echo "</pre>";

//функции
function func (int $n, int $l){
	return $n + $l;
}

echo func(10,5);

//echo func('qwerty',5); //ошибка нельзя строку

foreach ($array as $key =>$value){  //с использованием ключа
	echo "$key => $value <br>";
}

foreach ($array as $value){  //без ключа
        echo "$value <br>";
}

//

echo "<pre>";
print_r($_GET);
echo "</pre>";


$form = "
<form method='post'>
<input type='text' name='name'>
<input type='submit'>
</form>
";

echo $form;


echo "<pre>";
print_r($_GET);
echo "</pre>"; */

//ДЗ_3
$form = "
<form method='post'>
<lable>Введите значение n:
	<input type='number' name='n' required>
</lable>
<button type='submit'>Вычислить</button>
</form>
";

echo $form;

//проверка отправки формы
if(isset($_POST['n'])){
	//получить значение из формы
	$n = $_POST['n'];
	//расчет факториала
	$factorial =1;
	for($i=1; $i<=$n; $i++){
		$factorial*=$i;
	}

	//вывести "Hello world" n раз
	for($i=0; $i<$n; $i++){
		echo "Hello world<br> ";
	}

	//увеличить n в 5 раз
	$n*=5;

	//результат
	echo "<p>Факториал числа $n равен $factorial</p>";
	echo "<p>n увеличенное в 5 раз = $n</p>";
}
