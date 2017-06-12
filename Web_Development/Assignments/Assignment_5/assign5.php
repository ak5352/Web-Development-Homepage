
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Assign 5 </title>
		<link rel="stylesheet" href="Styles/main.css">
		<script src="Scripts/java_roll.js" language="javascript" type="text/javascript"></script>
	</head>
	
	<body>
		<img id="bg-img" src="Images/stars.gif" alt="Shooting Star">
		
		<div id="header">
			<h1> What should I eat for lunch? </h1>
			<p> Vote for what you think I should eat for lunch! </p>
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
					
					$user_email = $_POST['email'];
					
					if ($user_email == 'false')
					{
						echo "<p> You did not enter a valid email. <a href=\"assign5.html\"> Please click here to try again </a></p><br>\n";
					}
					
					else
					{	
						$food_choice = $_POST['lunch'];
						
						$array = array(1000);
						
						for ($i = 0; $i < sizeof($array); $i++)
						{
							$myfile = file_get_contents('votes.txt');
							$myemails = explode(" ", $myfile);
						
							for ($i = 0; $i < sizeof($myemails); $i++)
							{
								if (strpos($myemails[$i], $user_email) != false)
									$user_email = "false";
								
							}
							
							if ($user_email == "false")
							{
								echo "<p> You already voted with this email! </p><br>\n";
								echo "<p> <a href=\"assign5.html\"> Click here to try again. </a></p><br>\n";
							}
								
							
							else
							{
								$myfile = fopen('votes.txt', 'a');
								fwrite($myfile, $user_email." ".$food_choice."\n");
								fclose($myfile);
								
								echo "<p> Thank you for voting! </p><br>\n";
								
								echo "<p> <a href=\"assign5-results.html\"> Click here to see results </a></p><br>\n";
								echo "<p> <a href=\"assign5.html\"> Back to Poll Page </a></p><br>\n";
								
							} 
							
							$i++;
						}
						
						
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