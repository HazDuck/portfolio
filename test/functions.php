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
    public function testPrintAboutMeInfoSuccess()
    {
        $expected = '<p class="about-me-text">cat</p>';
        $input = [['paratext'=>'cat']];
        $case = printAboutMeInfo($input);
        $this-> assertEquals($expected, $case);
    }

    public function testPrintAboutMeInfoFailure()
    {
    $expected = '';
    $input = [['paratext'=>[]]];
    $case = printAboutMeInfo($input);
    $this-> assertEquals($expected, $case);
    }

    public function testPrintAboutMeInfoMalf()
    {
        $input = 1.1;
        $this->expectException(TypeError::class);
        printAboutMeInfo($input);
    }

    public function testPrintAboutMeInfoFailure2()
    {
        $expected = '';
        $input = [['tyhgfg'=>'']];
        $case = printAboutMeInfo($input);
        $this-> assertEquals($expected, $case);
    }

    public function testfillEditDropDownSuccess()
    {
        $expected = '<option value=1>cat</option>';
        $input = [['id'=>1, 'paratext'=>'cat']];
        $case = fillEditDropDown($input);
        $this-> assertEquals($expected, $case);
    }

    public function testfillEditDropDownFailure()
    {
        $expected = '<option value=1></option>';
        $input = [['id'=>1, 'paratext'=>'']];
        $case = fillEditDropDown($input);
        $this-> assertEquals($expected, $case);
    }

    public function testfillEditDropDownMalf()
    {
        $input = 'cat';
        $this->expectException(TypeError::class);
        printAboutMeInfo($input);
    }

    public function testRetrieveTextFromArraySuccess()
    {
        $expected = 'dog';
        $input = ['id'=>1, 'paratext'=>'dog'];
        $case = retrieveTextFromArray($input);
        $this-> assertEquals($expected, $case);
    }

    public function testRetrieveTextFromArrayFailure()
    {
        $expected = 'cannot be empty';
        $input = ['id'=>1, 'paratext'=>''];
        $case = retrieveTextFromArray($input);
        $this-> assertEquals($expected, $case);
    }

    public function testRetrieveTextFromArrayMalf()
    {
        $input = 'cat';
        $this->expectException(TypeError::class);
        printAboutMeInfo($input);
    }

    public function testcheckIfEmptySuccess()
    {
        $expected = true;
        $input = 'badger';
        $case = checkIfEmpty($input);
        $this-> assertEquals($expected, $case);
    }

    public function testcheckIfEmptyFailure()
    {
        $expected = false;
        $input = '';
        $case = checkIfEmpty($input);
        $this-> assertEquals($expected, $case);
    }

    public function testcheckIfEmptyMalf()
    {
        $input = ['mushroom'];
        $this->expectException(TypeError::class);
        checkIfEmpty($input);
    }

    public function testTrimWhiteSpaceSuccess()
    {
        $expected = 'badger';
        $input = '   badger   ';
        $case = trimWhiteSpace($input);
        $this-> assertEquals($expected, $case);
    }

    public function testTrimWhiteSpaceFailure()
    {
        $expected = 3;
        $input = 3;
        $case = trimWhiteSpace($input);
        $this-> assertEquals($expected, $case);
    }

    public function testTrimWhiteSpaceMalf()
    {
        $input = ['evil snake'];
        $this->expectException(TypeError::class);
        trimWhiteSpace($input);
    }
}

?>