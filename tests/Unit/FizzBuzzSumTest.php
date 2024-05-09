<?php

namespace Tests\Unit;

use Tests\TestCase;

class FizzBuzzSumTest extends TestCase
{
    /**
     * @return void
     */
    public function testFizzBuzzSum()
    {
        $this->assertEquals(60, $this->fizzBuzzSum(15));
        $this->assertEquals(266666333332, $this->fizzBuzzSum(1000000));
    }

    /**
     * 3 の倍数で Fizz 5 の倍数で Buzz 公倍数の場合 FizzBuzz とし作成した
     * FizzBuzz 列の n 項目までに含まれる数の和を返す
     *
     * @param int $n
     * @return int
     */
    function fizzBuzzSum(int $n): int
    {
        // ここに書く！

        $sum_numbers = 0;
        $fizz = 3;
        $buzz = 5;
        $numbers = collect()->range(1, $n);
        // &：参照渡し
        $result = $numbers->map(function($n)use($fizz, $buzz, & $sum_numbers){
            $output = '';

            if ($n % $fizz === 0 && $n % $buzz === 0) {
                $output .= 'FizzBuzz';
            } elseif ($n % $fizz === 0) {
                $output .= 'Fizz';
            } elseif ($n % $buzz === 0) {
                $output .= 'Buzz';
            } else {
                $sum_numbers += $n;
            }

            //($output === '') ? "$n" : "$output"; //fizzbuzz判定結果
        });
        return $sum_numbers; //fizzbuzzではない値の計算結果
    }
}