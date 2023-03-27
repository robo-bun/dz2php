// 1
$firstNum = 3;
$secondNum = 9;

function total($firstNum, $secondNum) {
    $summationOfNumbers = $firstNum + $secondNum;
    return $summationOfNumbers;
}

echo total($firstNum, $secondNum);




// 2
$str = 'Eto stroka, dliny kotoroi ya hochy yznat';

function lengthString($str) {
    $countCharacters = strlen($str);
    return $countCharacters;
}

echo lengthString($str);




// 3
$numbers = [1, 3, 6, 10, 15, 25];

function quantityNumbers($numbers) {
    $summationOfNumbers = array_sum($numbers)/count($numbers);;
    return $summationOfNumbers;
}

echo quantityNumbers($numbers);




// 4
$firstNum = 3;
$secondNum = 9;

function compareNumbers($firstNum, $secondNum)
{
    if ($firstNum < $secondNum) {
        return "{$firstNum} < {$secondNum}";
    } elseif ($firstNum > $secondNum) {
        return "{$firstNum} > {$secondNum}";
    } elseif ($firstNum == $secondNum) {
        return "{$firstNum} = {$secondNum}";
        }
    }

echo compareNumbers($firstNum, $secondNum);



        
// 5
$left = 'Hello, ';
$right = 'world!';

function concatString($left, $right) {
    $combineString = $left . $right;
    return $combineString;
}

echo concatString($left, $right);




// 6
$str = 'Tyt napisan KakOi-TO text';

function modifyText($str) {
    $newString = strtoupper($str);
    return $newString;
}

echo modifyText($str);




// 7
function find($myString, $fragment) {
    $searchCycle = strpos($myString, $fragment);

    if ($searchCycle === false) {
        return "{$fragment} not found";
    } else {
        return "{$fragment} found";
    }
}

$myString = 'abcdefg';
$fragment = 'ef';
echo find($myString, $fragment);




// 8
$firstNum = 3;
$secondNum = 9;

function total($firstNum, $secondNum) {
    $average = ($firstNum + $secondNum) / 2; //по-хорошему, тут должна быть не цифра "2" а функция, которая сама посчитает кол-во чисел, но я не додумалась как это сделать
    return $average;
}

total($firstNum, $secondNum);




// 9
$number = 81;

function squareRootCalculation($number) {
    $result = sqrt($number);
    return $result;
}

echo squareRootCalculation($number);
