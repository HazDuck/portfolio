<?php

require_once '../functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testPrintAboutMeInfoSuccess()
    {
        $expected = '<p class="about-me-text">cat</p>';
        $input = [['paratext'=>'cat']];
        $case = printAboutMeInfo($input);
        $this->assertEquals($expected, $case);
    }

    public function testPrintAboutMeInfoFailure()
    {
    $expected = '';
    $input = [['paratext'=>[]]];
    $case = printAboutMeInfo($input);
    $this->assertEquals($expected, $case);
    }

    public function testPrintAboutMeInfoMalf()
    {
        $input = 1.1;
        $this->expectException(TypeError::class);
        printAboutMeInfo($input);
    }

    public function testPrintAboutMeInfoFailureWrongKey()
    {
        $expected = '';
        $input = [['tyhgfg'=>'']];
        $case = printAboutMeInfo($input);
        $this->assertEquals($expected, $case);
    }

    public function testfillEditDropDownSuccess()
    {
        $expected = '<option value=1>cat</option>';
        $input = [['id'=>1, 'paratext'=>'cat']];
        $case = fillEditDropDown($input);
        $this->assertEquals($expected, $case);
    }

    public function testfillEditDropDownFailure()
    {
        $expected = '<option value=1></option>';
        $input = [['id'=>1, 'paratext'=>'']];
        $case = fillEditDropDown($input);
        $this->assertEquals($expected, $case);
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
        $this->assertEquals($expected, $case);
    }

    public function testRetrieveTextFromArrayFailure()
    {
        $expected = 'cannot be empty';
        $input = ['id'=>1, 'paratext'=>''];
        $case = retrieveTextFromArray($input);
        $this->assertEquals($expected, $case);
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
        $this->assertEquals($expected, $case);
    }

    public function testcheckIfEmptyFailure()
    {
        $expected = false;
        $input = '';
        $case = checkIfEmpty($input);
        $this->assertEquals($expected, $case);
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
        $this->assertEquals($expected, $case);
    }

    public function testTrimWhiteSpaceFailure()
    {
        $expected = 3;
        $input = 3;
        $case = trimWhiteSpace($input);
        $this->assertEquals($expected, $case);
    }

    public function testTrimWhiteSpaceMalf()
    {
        $input = ['evil snake'];
        $this->expectException(TypeError::class);
        trimWhiteSpace($input);
    }

    public function testShowButtonSuccess()
    {
        $expected = '<input type="submit" name="editSub" value="Edit" >';
        $case = showButton();
        $this->assertEquals($expected, $case);
    }

    public function testSuccessMessageSuccess()
    {
        $expected = 'Yup- successfully added';
        $input = true;
        $case = successMessage($input);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessMessageMalf()
    {
        $input = ['evil snake'];
        $this->expectException(TypeError::class);
        successMessage($input);
    }

    public function testSignInSuccess()
    {
        $expected = false;
        $input = "cat";
        $input2 = "dog";
        $input3 = "cat";
        $input4 = "dog";
        $case = signIn($input, $input2, $input3, $input4);
        $this->assertEquals($expected, $case);
    }


    public function testSignInMalf()
    {
        $input = ['evil snake'];
        $input2 = "dog";
        $input3 = "cat";
        $input4 = "dog";
        $this->expectException(TypeError::class);
        signIn($input, $input2, $input3, $input4);
    }
}

?>