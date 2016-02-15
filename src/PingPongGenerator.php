<?php
	 class PingPongGenerator
		{
			function makeNumberList($input)
			{
				$counter = 1;
				$array = array();
				while ($counter <= $input) {
					array_push($array, $counter);
					$counter++;
				}
				$result = implode(",", $array);
				return $result;
			}

	}
 ?>
