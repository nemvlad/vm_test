<?php
/*
алгоритм выдачи сдачи минимальным количеством монет с ограниченным количеством монет

реализация алгоритма  сдачи с конечным числом монет

http://www.xies.ru/282176/1/%D0%9A%D0%BE%D0%BD%D1%81%D0%BF%D0%B5%D0%BA%D1%82_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9_%D0%BF%D0%BE_%D0%BA%D1%83%D1%80%D1%81%D1%83_%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8_%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%A2%D0%B5%D0%BC%D0%B0_%D0%A0%D0%B5%D0%BA%D1%83%D1%80%D1%81%D0%B8%D1%8F.html
http://neerc.ifmo.ru/wiki/index.php?title=%D0%97%D0%B0%D0%B4%D0%B0%D1%87%D0%B0_%D0%BE_%D1%80%D1%8E%D0%BA%D0%B7%D0%B0%D0%BA%D0%B5
http://www.cyberforum.ru/pascal/thread1084109.html
http://www.cyberforum.ru/cpp-beginners/thread1278283.html
http://www.wasm.ru/forum/viewtopic.php?id=39642
*/
$clientPurse = array(
1 => 10,//номинал, количество
2 => 10,
5 => 10,
10 => 10,
);

$vmPurse = array(
1 => 100,//номинал, количество
2 => 100,
5 => 100,
10 => 100
);

$productsRange = array(
'Чай' => array(13,10),//цена, количество
'Кофе' => array(18,20),
'Кофе с молоком' => array(21,20),
'Сок' => array(35,15)
);

/**
* Получить остаток внесенных денег
*/
function getBalance($balance, $vmPurse) {
	//floor(8/3) целое
	//% остаток от деления
	foreach($vmPurse as $key => $value ) {
		floor($balance/$key)
	}
	$keys = array_keys($vmPurse);
		
	
}