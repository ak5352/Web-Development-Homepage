

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Assign 5 - Results </title>
		<link rel="stylesheet" href="Styles/main.css">
		<script src="Scripts/java_roll.js" language="javascript" type="text/javascript"></script>
	</head>
	
	<body>
		<img id="bg-img" src="Images/stars.gif" alt="Shooting Star">
		
		<div id="header">
			<h1> What should I eat for lunch? </h1>
			<p> Here's what everyone thinks! </p>
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
				<?php
				
					$c_count = 0;
					$j_count = 0;
					$i_count = 0;
					$p_count = 0;
					$s_count = 0;
					
					$result_choice = $_POST['display'];
					
					if ($result_choice == "email-list")
					{
						$myfile = file_get_contents('votes.txt');
						$myemails = explode("\n", $myfile);
						
						for ($i = 0; $i < sizeof($myemails); $i++)
						{
							print("<p> $myemails[$i] </p><br>\n");
						}
						
						echo "<p> <a href=\"assign5-results.html\"> Return to Display Results Page </a></p><br>\n";
						echo "<p> <a href=\"assign5.html\"> Return to Poll Page </a></p><br>\n";
					}
					
					else
					{
						$myfile = file_get_contents('votes.txt');
						$myemails = explode("\n", $myfile);
						
							for ($i = 0; $i < sizeof($myemails); $i++)
							{
								
								if (strpos($myemails[$i], "chinese") != false)
									$c_count++;
								
								else if (strpos($myemails[$i], "japanese") != false)
									$j_count++;
								
								else if (strpos($myemails[$i], "indian") != false)
									$i_count++;
								
								else if (strpos($myemails[$i], "peruvian") != false)
									$p_count++;
								
								else if (strpos($myemails[$i], "starve") != false)
									$s_count++;
								
							}
							
						echo "<p> Chinese Food: $c_count </p> <img src=\"Images/meter.png\" width=".(25*$c_count)."px height=25px><br>\n";
						echo "<p> Japanese Food: $j_count </p> <img src=\"Images/meter.png\" width=".(25*$j_count)."px height=25px> <br>\n";
						echo "<p> Indian Food: $i_count </p> <img src=\"Images/meter.png\" width=".(25*$i_count)."px height=25px> <br>\n";
						echo "<p> Peruvian Food: $p_count </p> <img src=\"Images/meter.png\" width=".(25*$p_count)."px height=25px> <br>\n";
						echo "<p> Starve: $s_count </p> <img src=\"Images/meter.png\" width=".(25*$s_count)."px height=25px> <br>\n";
						
						echo "<br>";
						echo "<p> <a href=\"assign5-results.html\"> Back to Display Results Page </a></p><br>\n";
						echo "<p> <a href=\"assign5.html\"> Back to Poll Page </a></p><br>\n";
					}
				?>
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