// 1 Написать функцию, которая принимает на вход два числа и возвращает их сумму

$firstNum = 3;
$secondNum = 9;

function total($firstNum, $secondNum) {
    $summationOfNumbers = $firstNum + $secondNum;
    return $summationOfNumbers;
}

echo total($firstNum, $secondNum);




// 2 Написать функцию, которая принимает на вход строку и возвращает ее длину
$str = 'Eto stroka, dliny kotoroi ya hochy yznat';

function lengthString($str) {
    $countCharacters = strlen($str);
    return $countCharacters;
}

echo lengthString($str);




// 3 Написать функцию, которая принимает на вход массив чисел и возвращает их среднее значение
$numbers = [1, 3, 6, 10, 15, 25];

function quantityNumbers($numbers) {
    $summationOfNumbers = array_sum($numbers)/count($numbers);;
    return $summationOfNumbers;
}

echo quantityNumbers($numbers);




// 4 Написать функцию, которая принимает на вход два числа и определяет, какое из них больше
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



        
// 5 Написать функцию, которая принимает на вход две строки и возвращает их объединение
$left = 'Hello, ';
$right = 'world!';

function concatString($left, $right) {
    $combineString = $left . $right;
    return $combineString;
}

echo concatString($left, $right);




// 6 Написать функцию, которая принимает на вход строку и возвращает ее в верхнем регистре
$str = 'Tyt napisan KakOi-TO text';

function modifyText($str) {
    $newString = strtoupper($str);
    return $newString;
}

echo modifyText($str);




// 7 Написать функцию, которая принимает на вход строку и определяет, содержит ли она подстроку
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




// 8 Найти среднее арифметическое двух чисел
$firstNum = 3;
$secondNum = 9;

function total($firstNum, $secondNum) {
    $average = ($firstNum + $secondNum) / 2; //по-хорошему, тут должна быть не цифра "2" а функция, которая сама посчитает кол-во чисел, но я не додумалась как это сделать
    return $average;
}

total($firstNum, $secondNum);




// 9 Найти корень квадратный из числа
$number = 81;

function squareRootCalculation($number) {
    $result = sqrt($number);
    return $result;
}

echo squareRootCalculation($number);
