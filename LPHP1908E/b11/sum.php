<?php

class SumNumber
{
    private function total($a, $b)
    {
        return $a + $b;
    }

    public function result()
    {
        // Tham số $numOne, $numTwo chính là giá trị nhập từ 2 ô input truyền vào
        $data = $this->inputData();
        //return $this->total($data[0], $data[1]);
        if (empty($data[0]) || empty($data[1])) {
            header("Location: index4.php?state=fail");
        } else {
            $rs = $this->total($data[0], $data[1]);
            header("Location: index4.php?state=success&{$rs}");
        }
    }

    public function inputData()
    {
        if (isset($_POST['btnSum'])) {
            $one = $_POST['numOne'] ?? '';
            $two = $_POST['numTwo'] ?? '';

            $one = is_numeric($one) ? $one : '';
            $two = is_numeric($two) ? $two : '';

            return [$one, $two];
        }
        return false;
    }
}

$num = new SumNumber;
$num->result();
