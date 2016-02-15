<?php

	require_once 'src/PingPongGenerator.php';

	class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_printUpToNumber()
		{
		//Arrange
		$test_PingPongGenerator1 = new PingPongGenerator;
		$input = '2';

		//Act
		$result = $test_PingPongGenerator1->makeNumberList($input);

		//Assert
		$this->assertEquals('1,2', $result);
		}

		function test_printPingPong()
		{
		//Arrange
		$test_PingPongGenerator2 = new PingPongGenerator;
		$input = '15';

		//Act
		$result = $test_PingPongGenerator2->makeNumberList($input);

		//Assert
		$this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
		}

		function test_printPing()
		{
		//Arrange
		$test_PingPongGenerator = new PingPongGenerator;
		$input = '15';

		//Act
		$result = $test_PingPongGenerator->makeNumberList($input);

		//Assert
		$this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
		}

		function test_printPong()
		{
		//Arrange
		$test_PingPongGenerator = new PingPongGenerator;
		$input = '15';

		//Act
		$result = $test_PingPongGenerator->makeNumberList($input);

		//Assert
		$this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
		}


	}

?>
