<html>
	<head>
		<title> Календарь</title>
		<meta charset="utf8">
		<link href="./Styles.css" rel="stylesheet">
	</head>
	<body>
		<?php
		define("WEEK", 7);
		define("MONTH", 12);
		define("FIRSRYEAR", 2015);
		define("LASTYEAR", 2025);

		function MakeMonth($month, $year, $holiday)
		{
			$Month_r = array
			(
				"1" => "Январь",
				"2" => "Февраль",
				"3" => "Март",
				"4" => "Апрель",
				"5" => "Май",
				"6" => "Июнь",
				"7" => "Июль",
				"8" => "Август",
				"9" => "Сентябрь",
				"10" => "Октябрь",
				"11" => "Ноябрь",
				"12" => "Декабрь"
				); 
				
			//header
			$calendar = " 
				<table class='month'>
					<tr style='background: #5C8EB3;'>
						<td colspan='7' class='navi'>"
							.$Month_r[$month]." ".$year."
						</td>
					</tr>
					<tr>
						<td class='datehead'>Пн</td>
						<td class='datehead'>Вт</td>
						<td class='datehead'>Ср</td>
						<td class='datehead'>Чт</td>
						<td class='datehead'>Пт</td>
						<td class='datehead'>Сб</td>
						<td class='datehead'>Вс</td>
					</tr>
					<tr>";
			
			$first_of_month = mktime(0, 0, 0, $month, 1, $year);
			$maxdays = date('t', $first_of_month);
			$date_info = getdate($first_of_month); 
			
			$day = 1;
			$weekday = $date_info['wday'];
			$weekday = ($weekday - 1);
			if (-1 == $weekday ) {
				$weekday += WEEK;
			}
			
			if ($weekday > 0) {
				$calendar .= "<td colspan = '{$weekday}'></td>";
			}
			
			$class = "";
			while ($day <= $maxdays) {
				$pr = "";
				$title = "";
				
				//Check for next week
				if (WEEK == $weekday) {
					$calendar .= "</tr><tr>";
					$weekday = 0;
				}
				
				//Make a attention if month has current day
				if ((date('d') == "{$day}") && (date('n') == "{$month}")) {
					$class = "calendar-today";
				} 
				else $class = "calendar";
				
				if (0 != strlen($holiday[$day])) {
					$title = "title = \"{$holiday[$day]}\"";
					$pr = 'style="color: red; font-weight: bold" ';
				}
				
				$calendar .= "<td class=\"{$class}\"" . $title . "><span ". $pr .">{$day}</span></td>";
					
				$day++;
				$weekday++;
			}
			
			if ($weekday != WEEK) {
				$calendar .= "<td colspan = ". (WEEK - $weekday) ."></td>";
			}
			
			$calendar .= "</tr></table>"; 
			
			return $calendar;
		}

		include 'Lab3-Array.php';
		
		// местоположение скрипта
		$self = $_SERVER['PHP_SELF']; 
		 
		//Check if we have in URL our year. 
		//If not then we use current year
		if(isset($_GET['year']))
			$year = $_GET['year']; 
		else $year = date('Y');
		
		echo "<div class=lab3>";
		//Make calendar of year
		//$yearcalendar = "";
		for ($i = 1; $i <= MONTH; $i++) {
			//$yearcalendar .= MakeMonth($i, $year, $holiday[$i]);
			echo MakeMonth($i, $year, $holiday[$i]);
		}
		echo "</div>";
		
		echo "<div>";
		echo "<form style=' margin-right: 10px;' action='$self' method='get'>";
		
		echo "<select name='year'>";
		 
		for($i=FIRSRYEAR; $i<=LASTYEAR; $i++)
		{
		  $selected = ($year == $i ? "selected = 'selected'" : '');
		 
		  echo "<option value=\"".($i)."\"$selected>".$i."</option>";
		}
		 
		echo "</select><input type='submit' value='Cмотреть' /></form>";
		 
		/*if($year != date('Y'))
		  echo "<a style='float: left; margin-left: 10px; font-size: 12px; padding-top: 5px;' 
		  href='".$self."?month=".date('m')."&year=".date('Y')."'><< Вернуться к текущей дате</a>";*/
		echo "</div>"; 
		
		
	?>
	</body>
</html>