<?php

class TotalNumber
{
    private $numberOne;
    private $numberTwo;

    public function __construct($agrumentOne = null, $agrumentTwo = null)
    {
        $this->numberOne = $agrumentOne;
        $this->numberTwo = $agrumentTwo;
    }

    private function sum()
    {
        return $this->numberOne + $this->numberTwo;
    }

    private function sum2($numOne, $numTwo)
    {
        return $numOne + $numTwo;
    }

    public function show()
    {
        return $this->sum();
    }

    public function input()
    {
        if (isset($_POST["btnSum"])) {
            $numOne = $_POST["numberOne"] ?? '';
            $numTwo = $_POST["numberTwo"] ?? '';

            $numOne = is_numeric($numOne) ? $numOne : '';
            $numTwo = is_numeric($numTwo) ? $numTwo : '';

            return $this->sum2($numOne, $numTwo);
        }
    }
}

//if (isset($_POST["btnSum"])) {
//    $numOne = $_POST["numberOne"] ?? '';
//    $numTwo = $_POST["numberTwo"] ?? '';
//
//    $numOne = is_numeric($numOne) ? $numOne : '';
//    $numTwo = is_numeric($numTwo) ? $numTwo : '';
//
//    if (empty($numOne) || empty($numTwo)) {
//        header("Location: ../index6.php?state=error");
//    } else {
//        $tn = new TotalNumber($numOne, $numTwo);
//        $rs = $tn->show();
//        header("Location: ../index6.php?state=ok&result={$rs}");
//    }
//}

$total = new TotalNumber;
echo $total->input();


