<?php
	function getCountOfEnters_end($countOfEnters)
	{
		if ($countOfEnters < 20) $var = $countOfEnters;
		else $var = $countOfEnters % 10;
		switch ($var)
		{
			case 2: case 3: case 4: return 'а';
			default: return '';
		}
	}
	
	function getWelcome($hour)
	{
		switch($hour)
		{
			case 0: case 1: case 2: case 3: case 4: case 5: return 'Доброй ночи!';
			case 6: case 7: case 8: case 9: case 10: case 11: return 'Доброе утро!';
			case 12: case 13: case 14: case 15: case 16: case 17: return 'Добрый день!';
			case 18: case 19: case 20: case 21: case 22: case 23: return 'Добрый вечер!';
			default: return 'Добро пожаловать на наш сайт';
		}
	}
	
	function getHeader($hour)
	{
		switch($hour)
		{
			case 0: case 1: case 2: case 3: case 4: case 5: return 'night';
			case 6: case 7: case 8: case 9: case 10: case 11: return 'morning';
			case 12: case 13: case 14: case 15: case 16: case 17: return 'day';
			case 18: case 19: case 20: case 21: case 22: case 23: return 'evening';
			default: return 'Добро пожаловать на наш сайт';
		}
	}
?>