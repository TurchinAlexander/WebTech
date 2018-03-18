<html>
  <head>
    <title>Фото</title>
    <link href="./styles.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="keywords" content="Главная, История, Мемы">
    <meta name="description" content="Описание разделов">
  </head>
  <body>
  <!-- Заголовок для навигации -->
    <div class="nav">
        <ul class="sections" style="border-bottom-color: black">
          <li><a href="./Main.php">Главная</a></li>
          <li><a href="./Photo.php">Фото</a></li>
          <li><a href="./Video.php">Видео</a></li>
          <li><a href="./Archive.php">Архив</a></li>
          <li><a href="./Contacts.php">Контакты</a></li>
        </ul>
    </div>

    <!-- Блок с описаниями -->
    <table style="padding-top: 10px">
      <tr>
        <td class="empty">
        </td>
        <td class="info">
			<h1>Раздел Фото</h1>
			<p>
				В этом разделе представлены все мемы, которые были освещены на данном сайте. Через картинку
				вы можете узнать побольше о каждом из них.
			</p>
			<div>
				<a href="./Uganda.html">
					<img src="./pic/UgandaKnukle.png" class="pic photopic">
				</a>
				<a href="./Spaghet.html">
					<img src="./pic/SmbdSpaget.png" class="pic photopic">
				</a>
				<a href="./CanDo.html">
					<img src="./pic/CanDoThis.jpg" class="pic photopic">
				</a>
			</div >
			<div class="photopic" style="text-align:left; padding-top:5px">
				<?php

					//Initialization of 5metric array
					$arr = array
					(
						array
						(
							array 
							(
								array 
								(	
									array(123, 123.5, "привет", "hi"),
									array(57.4545, "HELLO", 45)
								),
								array
								(
									array(13.134, 123.2141245, "привghbет", false),
									array("false","Хелло",".")
								)
							),
							array 
							(
								array 
								(
									array(123, 113212323.1231235, "привет", "hiпasd"),
									array("asdыфв", 123, "solo", "hфвi")
								)
							),
							array
							(
								array 
								(
									array(121231233, 1123123123.5e-4, "ТеСт", "hi")
								)
							)
						)
					);
					
					//Power of round
					define("ST", 2);
					
					//Initialization of constant count of colors and array of colors
					define("COUNT", 7);
					$rb = array
					(
						"red", "orange", "yellow", "green", "cyan", "blue", "purple"
					);
					
					
					echo '<table class="lab2">';
					//Output of start array
					for($l1 = 0; $l1 < count($arr); $l1++) {
						echo '<tr class="ex_border">';
						for($l2 = 0; $l2 < count($arr[$l1]); $l2++) {
							echo '<td class="ex_border">';
							echo '<table class="in_table">';
							for($l3 = 0; $l3 < count($arr[$l1][$l2]); $l3++) { 
							echo '<tr class="in_border">';
								for($l4 = 0; $l4 < count($arr[$l1][$l2][$l3]); $l4++) { 
									echo '<td class="in_border">';
									for($l5 = 0; $l5 < count($arr[$l1][$l2][$l3][$l4]); $l5++) 
										echo $arr[$l1][$l2][$l3][$l4][$l5], " ";
									echo '</td>';
								}
								echo'</tr>';
							}
							echo '</table>';
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</table>';
					echo "<br>";
					echo "<br>";
					
					
					//Index of color
					//$color = 0;
					
					echo '<table class="lab2">';
					for($l1 = 0; $l1 < count($arr); $l1++) {
						echo '<tr class="ex_border">';
						for($l2 = 0; $l2 < count($arr[$l1]); $l2++) {
							echo '<td class="ex_border">';
							echo '<table class="in_table">';
							for($l3 = 0; $l3 < count($arr[$l1][$l2]); $l3++) { 
							echo '<tr class="in_border">';
								for($l4 = 0; $l4 < count($arr[$l1][$l2][$l3]); $l4++) {
						
									//Make a pointer for easy work
									$pt = $arr[$l1][$l2][$l3][$l4];
									//$color = 0;
									echo '<td class="in_border">';
									$l5 = 0;
									while ($l5 < count($pt)) {	
									
										//Output unmodified cell's value
										//echo $pt[$l5], " ";

										//flag that can go on to the next iteration
										//$fl = true;
										
										//if the cell is int
										if (is_int($pt[$l5])) {
											unset($pt[$l5]);
											$pt=array_values($pt);
											$fl = false;
										} 
										//if the cell is float
										else if (/*$fl && */is_float($pt[$l5])) {
											$pt[$l5] = round($pt[$l5], ST);
											
											echo $pt[$l5], " ";
											
											//$fl = false;
											$l5++;
											
										} 
										//if the cell is string
										else if (/*$fl && */is_string($pt[$l5])) { 
											$color = 0;
											$z=0; 
											while($z < strlen($pt[$l5])){ 
												if (ord($pt[$l5][$z]) >= ord("а") && ord($pt[$l5][$z]) <= ord("я")){ 
													$help = mb_strtoupper($pt[$l5][$z].$pt[$l5][$z+1]); 
													
													//Output exactly russian letters
													echo $help;
													
													$pt[$l5][$z] = $help[0]; 
													$z++; 
													$pt[$l5][$z] = $help[1]; 
												} 
												//Output english letters
												else if (ord($pt[$l5][$z]) >= ord("A") && ord($pt[$l5][$z]) <= ord("z")) {
														echo '<span style="color:' . $rb[$color] . '">' . $pt[$l5][$z] . '</span>';
														$color = ($color + 1) % COUNT;
													}
												//If it is a letter
												else
													echo $pt[$l5][$z];
												$z++; 
											}
											echo " ";
											//$fl = false;
											$l5++;
										}
										//if the cell is another						
										else
											$l5++;
									}
									echo '</td>';
								}
								echo'</tr>';
							}
							echo '</table>';
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</table>';
				?>
			</div>
        </td>
        
        <td>
          <!-- Первая новость -->
          <a href="./Uganda.php">
            <div class="blockpic">
              <img src="./pic/UgandaKnukle.png" class="pic">
              <p>
                Был добавлен мем <br>Uganda Warrior!
              </p>
            </div>
          </a>

          <!-- Вторая новость -->
          <a href="./Spaghet.php">
            <div class="blockpic">
              <img src="./pic/SmbdSpaget.png" class="pic">
              <p>
                Был добавлен мем <br>Somebody Touch My Spaget!
              </p>
            </div>
          </a>

          <!-- Третья новость -->
          <a href="./CanDo.php">
            <div class="blockpic">
              <img src="./pic/CanDoThis.jpg" class="pic">
              <p>
                Был добавлен мем <br>Can You Do This? !
              </p>
            </div>
          </a>

        </td>

        </td>
      </tr>
    </table>
	
  </body>
</html>
