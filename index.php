<?php
$operand1=$_GET['operand1'] ? $_GET['operand1'] : 0;
$operand2=$_GET['operand2'] ? $_GET['operand2'] : 0;
$operator=$_GET['operator'];
$result=0;
if($operator=='sum'){
    $result=$operand1+$operand2;
}elseif($operator=='difference'){
    $result=$operand1-$operand2;
}elseif($operator=='multiplication'){
    $result=$operand1*$operand2;
}elseif($operator=='division'){
    if($operand2==0){
        $result='&#8734';
    }
    else $result=$operand1/$operand2;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form>
        <select name="operator">
            <option value="sum" <?=($operator=='sum') ? 'selected' : ''?>>Плюс</option> 
            <option value="difference" <?=($operator=='difference') ? 'selected' : ''?>>Минус</option> 
            <option value="multiplication"<?=($operator=='multiplication') ? 'selected' : ''?> >Умножить</option> 
            <option value="division" <?=($operator=='division') ? 'selected' : ''?>>Делить</option> 
        </select>
        <input name="operand1" type="number" step="0.01" value="<?=$operand1?>">
        <input name="operand2" type="number" step="0.01" value="<?=$operand2?>">
        <input type="submit" value="Расчитать">
    </form>
    </br>
    <div>Результат: <?=$result?></div>
</body>
</html>