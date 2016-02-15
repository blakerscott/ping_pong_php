<?php

	require_once 'src/PingPongGenerator.php';

	class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_printUpToNumber()
		{
		//Arrange
		$test_PingPongGenerator = new PingPongGenerator;
		$input = '10';

		//Act
		$result = $test_PingPongGenerator->makeNumberList($input);

		//Assert
		$this->assertEquals('1,2,3,4,5,6,7,8,9,10', $result);
		}
	}

?>
