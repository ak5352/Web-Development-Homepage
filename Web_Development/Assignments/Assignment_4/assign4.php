
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Pig Latin </title>
		<link rel="stylesheet" href="Styles/main.css">
		<script src="Scripts/java_roll.js" language="javascript" type="text/javascript"></script>
	</head>
	
	<body>
		<img id="bg-img" src="Images/stars.gif" alt="Shooting Star">
		
		<div id="header">
			<h1> Pig Latin </h1>
			<p> Welcome to the Pig Latin Converter! </p>
		</div>
		
		<div id="container">
			<div class="navbar">
				<p>
					<a href="../../">
						<img src="Images/my button/home_up.gif" width=230 height=50 border=0 alt="Home" id="home" />
					</a>
				</p>				
				
				<p>
					<a href="../">
						<img src="Images/my button/assign_up.gif" width=230 height=50 border=0 alt="Assignments" id="assign" />
					</a>
				</p>
				
				<p>
					<a href="http://cs.nyu.edu/courses/spring17/CSCI-UA.0061-001/"> 
						<img src="Images/my button/wph_up.gif" width=230 height=50 border=0 alt="Web Programming Homepage" id="wph" />
					</a>
				</p>
				
				<p>
					<a href="../About_Me/">
						<img src="Images/my button/me_up.gif" width=230 height=50 border=0 alt="About Me" id="me" />
					</a>
				</p>
				
				<p>
					<a href="../SVG_Fun/">
						<img src="Images/my button/fav_up.gif" width=230 height=50 border=0 alt="Fruit and Vegetables" id="fav" />
					</a>
				</p>
			</div>
			
			<div class="main">
				<h1> Your conversion: </h1>
				
				<?php
				
					if (isset($_POST['sentence']) && isset($_POST['choice']))
					{
						$form_sentence = $_POST['sentence'];
						$form_option = $_POST['choice'];
						
						$sentence_array = explode(' ', trim($form_sentence));
						$size = sizeof($sentence_array);
						
						$vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
						$consonant_clusters = array('bl', 'Bl', 'BL', 'br', 'Br', 'BR', 'ch', 'Ch', 'CH', 
													'cl', 'Cl', 'CL', 'cr', 'Cr', 'CR', 'dr', 'Dr', 'DR', 
													'fl', 'Fl', 'FL', 'fr', 'Fr', 'FR', 'gh', 'Gh', 'GH', 
													'gl', 'Gl', 'GL', 'gr', 'Gr', 'GR', 'ph', 'Ph', 'PH', 
													'pl', 'Pl', 'PL', 'pr', 'Pr', 'PR', 'qu', 'Qu', 'QU',
													'sc', 'Sc', 'SC', 'sh', 'Sh', 'SH', 'sk', 'Sk', 'SK', 
													'sl', 'Sl', 'SL', 'sm', 'Sm', 'SM', 'sn', 'Sn', 'SN', 
													'sp', 'Sp', 'SP', 'st', 'St', 'ST', 'sw','Sw', 'SW',
													'th','Th', 'TH', 'tr', 'Tr', 'TR', 'tw', 'Tw', 'TW', 
													'wh', 'Wh', 'WH', 'wr', 'Wr', 'WR', 'sch', 'Sch', 'SCH', 
													'scr', 'Scr','SCR','shr','Shr','SHR','spl','Spl', 'SPL', 
													'spr', 'Spr', 'SPR', 'squ', 'Squ','SQU','str','Str','STR', 
													'thr', 'Thr', 'THR');
						
						$punctuation = array('.', '!', '?', ',', ':', ';', '-');
						
						$symbol = "";
						
						for ($i=0; $i < $size; $i++)
						{
							if (in_array(substr($sentence_array[$i], -1), $punctuation))
							{
								$symbol = substr($sentence_array[$i], -1);
								$sentence_array[$i] = str_replace($punctuation, "", $sentence_array[$i]);
							}
						}
						
						for($i = 0; $i < $size ; $i++)
						{
							if (in_array(substr($sentence_array[$i], 0, 1), $vowels))
							{
								$sentence_array[$i] = $sentence_array[$i]."-way";
							}
							
							else if (in_array(substr($sentence_array[$i], 0, 3), $consonant_clusters))
							{
								$sentence_array[$i] = substr($sentence_array[$i], 3, strlen($sentence_array[$i]))."-".substr($sentence_array[$i], 0, 3)."ay";
							}
							
							else if (in_array(substr($sentence_array[$i], 0, 2), $consonant_clusters))
							{
								$sentence_array[$i] = substr($sentence_array[$i], 2, strlen($sentence_array[$i]))."-".substr($sentence_array[$i], 0, 2)."ay";
							}
							
							else
							{
								$sentence_array[$i] = substr($sentence_array[$i], 1, strlen($sentence_array[$i]))."-".substr($sentence_array[$i], 0, 1)."ay";
							}
							
						}
						
						$pig_latin = "";
						
						for($i = 0; $i < $size ; $i++)
						{
							$pig_latin .= $sentence_array[$i]." ";
						}
						
						$pig_latin .= $symbol;
						
						echo "<p> Pig Latin: $pig_latin </p>";
						
						
						if ($form_option == 'yes')
						{
							echo "<p> Original:  $form_sentence </p>";
						}
					}
					
					else
						echo "<p> Please fill in both fields. </p>";
				
				?>
				
				<p align=center><a href="assign4.html"> Return to Form </a></p> 
			
			</div>

		</div>
		
		<div id="footer">
			<p class="footer"> Avantika Khanna  </p>
		</div>
		
		<div align=center id="img-footer">
			<img src="Images/totoro.gif" alt="Cat" width=150px height=50px>
		</div>
	
	</body>
</html>