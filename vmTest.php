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
    1 => 10, //номинал, количество
    2 => 10,
    5 => 10,
    10 => 10,
);

function getVmPurse() {
    return array(
        1 => 100, //номинал, количество
        2 => 100,
        5 => 100,
        10 => 100
    );
}

$productsRange = array(
    'Чай' => array(13, 10), //цена, количество
    'Кофе' => array(18, 20),
    'Кофе с молоком' => array(21, 20),
    'Сок' => array(35, 15)
);
class Balance {
    public $bestCaseFlag = true;//это может нам не подойти
    public $variants = array();

        /**
     * Возвращает максимально возможное количество монет опреденного номинала для сдачи
     *
     * @param $change
     * @param $coinRating
     * @return int
     */
    public function getCoinsCount($change, $coinRating) {
        $coinsCount = floor($change/$coinRating);

        $vmPurse = getVmPurse();
        if($coinsCount > $vmPurse[$coinRating]) {
            $coinsCount = $vmPurse[$coinRating];
            //$this->bestCaseFlag = false;
        }

        return $coinsCount;
    }


    public function getBalance($change) {

        $vmPurse = getVmPurse();
        //count($vmPurse)
        $coinsRating = array_keys($vmPurse);
        rsort($coinsRating);

        $tmpChange = $change;
        $tmpVariant = array();
        foreach($coinsRating as $key => $coinRating) {

            $currentFix = $coinRating;
            $coinsCount = getCoinsCount($tmpChange, $currentFix);
            for($i = $coinsCount; $i >= 0; $i--) {
                $tmpChange %= $currentFix;
                array_push($tmpVariant, $coinsCount);
            }



            if($tmpChange === 0) {
                break;
            }


        }
        if($tmpChange === 0 ) {
                $this->variants[] = $tmpVariant;

        }


/*

Ищем все варианты , фиксирую одну позицию

 */




        //floor(8/3) целое
        //% остаток от деления



    }
}

/**
 * Получить остаток внесенных денег
 */

$VmPurse
  1 => 100, //номинал, количество
        2 => 100,
        5 => 100,
        10 => 100


function test($nominal,$quantity) {
    for($i = $quantity; $i >= 0 ;$i--) {
        test($nominal,$i);
    }
}

foreach($VmPurse as $nominal => $quantity) {


}

$sdacha = 44;

$result;
$resultsQuantity = 100000;

for($i = 0; $i < 100; $i++) {
    for($j = 0; $j < 100; $j++) {
        for($k = 0; $k < 100; $k++) {
            for($m = 0; $m < 100; $m++) {

                if($sdacha == $i + $j*2 + $k*5 + $m*10) {
                    if($resultsQuantity > $i+$j+$k+$m) {
                        $result = array($i,$j,$k,$m);
                        $resultsQuantity = $i+$j+$k+$m;
                    }

                }
            }
        }
        }
    }

print_r($result);





/*
 * it works


function getVmPurse() {
	return array(
        10 => 100, //номинал, количество
        5 => 100,
        2 => 100,
        1 => 100
    );
}

 function getCoinsCount($change, $coinRating) {
	$coinsCount = floor($change/$coinRating);

	$vmPurse = getVmPurse();
	if($coinsCount > $vmPurse[$coinRating]) {
		$coinsCount = $vmPurse[$coinRating];
		//$this->bestCaseFlag = false;
	}

	return $coinsCount;
}



$start = microtime(true);

$sdacha = 2;

$result = array();
$resultsQuantity = 100000;

$maxI = getCoinsCount($sdacha, 10);
$maxJ = getCoinsCount($sdacha, 5);
$maxK = getCoinsCount($sdacha, 2);
$maxM = getCoinsCount($sdacha, 1);


for($i = $maxI; $i >= 0; $i--) {
	if($resultsQuantity < $i) continue;
    for($j = $maxJ; $j >= 0; $j--) {
		if($resultsQuantity < $i+$j) continue;
        for($k = $maxK; $k >= 0; $k--) {
			if($resultsQuantity < $i+$j+$k) continue;
            for($m = $maxM; $m >= 0; $m--) {
				if($resultsQuantity < $i+$j+$k+$m) continue;

                if($sdacha == $i*10 + $j*5 + $k*2 + $m) {
                    if($resultsQuantity > $i+$j+$k+$m) {
                        $result = array($i,$j,$k,$m);
                        $resultsQuantity = $i+$j+$k+$m;
                    }

                }
            }
        }
        }
    }

print_r($result);

echo '<br>Time: '.(microtime(true) - $start).' sec.';





 */



