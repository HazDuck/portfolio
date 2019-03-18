<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-18
 * Time: 14:00
 */
require '../functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testPrintAboutMeInfoSuccess() {
        $expected = '<p class="about-me-text">cat</p>';
        $input = [['paratext'=>'cat']];
        $case = printAboutMeInfo($input);
        $this-> assertEquals($expected, $case);
    }

    public function testPrintAboutMeInfoFailure() {
    $expected = 'Must be a valid about me text';
    $input = [['paratext'=>'']];
    $case = printAboutMeInfo($input);
    $this-> assertEquals($expected, $case);
}

    public function testPrintAboutMeInfoMalf() {
        $input = 1.1;
        $this->expectException(TypeError::class);
        printAboutMeInfo($input);
    }

}

?>