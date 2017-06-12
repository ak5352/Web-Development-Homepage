<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Assignment 6 </title>
		<link rel="stylesheet" href="Styles/main.css">
		<script src="Scripts/java_roll.js" language="javascript" type="text/javascript"></script>
	
	<style>
		.column
		{
			float: left;
			width: 22%;
			margin-right: 2%;
			text-align: center;
		}
	</style>
	
	</head>
	
	<body>
		<img id="bg-img" src="Images/stars.gif" alt="Shooting Star">
		
		<div id="header">
			<h1> PokeMart </h1>
			<p> Stock Up For Your Journey! </p>
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
					<a href="../../About_Me/">
						<img src="Images/my button/me_up.gif" width=230 height=50 border=0 alt="About Me" id="me" />
					</a>
				</p>
				
				<p>
					<a href="../../SVG_Fun/">
						<img src="Images/my button/fav_up.gif" width=230 height=50 border=0 alt="Fruit and Vegetables" id="fav" />
					</a>
				</p>
			</div>
			
			<div class="main">
				<div align="center">
					<p> <a href="assign6.html"> Return to Menu </a> </p>
				</div>
				
				<?php
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item11 </p>");
						
						if ($item13 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item12\" width=100px height=100px>");
						print("<p> Amount in stock: $item13 </p>");
						print("<p> Price: P$item14 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item21 </p>");
						if ($item23 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item22\" width=100px height=100px>");
						print("<p> Amount in stock: $item23 </p>");
						print("<p> Price: P$item24 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item31 </p>");
						if ($item33 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item32\" width=100px height=100px>");
						print("<p> Amount in stock: $item33 </p>");
						print("<p> Price: P$item34 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item41 </p>");
						if ($item43 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item42\" width=100px height=100px>");
						print("<p> Amount in stock: $item43 </p>");
						print("<p> Price: P$item44 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item51 </p>");
						if ($item53 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item52\" width=100px height=100px>");
						print("<p> Amount in stock: $item53 </p>");
						print("<p> Price: P$item54 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item61 </p>");
						if ($item63 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item62\" width=100px height=100px>");
						print("<p> Amount in stock: $item63 </p>");
						print("<p> Price: P$item64 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item71 </p>");
						if ($item73 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item72\" width=100px height=100px>");
						print("<p> Amount in stock: $item73 </p>");
						print("<p> Price: P$item74 </p>");
					print("</div>");
					
					include 'data.php';
					print("<div class=\"column\">");
						print("<p> $item81 </p>");
						if ($item83 <= 0)
							print("<img src=\"Images/outstock.png\" width=100px height=100px>");
						else
							print("<img src=\"$item82\" width=100px height=100px>");
						print("<p> Amount in stock: $item83 </p>");
						print("<p> Price: P$item84 </p>");
					print("</div>");
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