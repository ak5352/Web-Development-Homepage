<?php
	if (isset($_POST['$item13']))
	{
		$item11 = "Potion";
		$item12 = "Images/potion.png";
		$item13 = $_POST['$item13'];
		$item14 = $_POST['$item14'];
		$item21 = "Antidote";
		$item22 = "Images/antidote.png";
		$item23 = $_POST['$item23'];
		$item24 = $_POST['$item24'];
		$item31 = "Green Tea";
		$item32 = "Images/tea.png";
		$item33 = $_POST['$item33'];
		$item34 = $_POST['$item34'];
		$item41 = "New Rod";
		$item42 = "Images/rod.png";
		$item43 = $_POST['$item43'];
		$item44 = $_POST['$item44'];
		$item51 = "Pokeball";
		$item52 = "Images/pokeball.png";
		$item53 = $_POST['$item53'];
		$item54 = $_POST['$item54'];
		$item61 = "Greatball";
		$item62 = "Images/greatball.png";
		$item63 = $_POST['$item63'];
		$item64 = $_POST['$item64'];
		$item71 = "Full Heal";
		$item72 = "Images/heal.png";
		$item73 = $_POST['$item73'];
		$item74 = $_POST['$item74'];
		$item81 = "Max Revive";
		$item82 = "Images/revive.png";
		$item83 = $_POST['$item83'];
		$item84 = $_POST['$item84'];
		
		$i11 = "\$item11 = \"".$item11."\";\n";
		$i12 = "\$item12 = \"".$item12."\";\n";
		$i13 = "\$item13 = \"".$item13."\";\n";
		$i14 = "\$item14 = \"".$item14."\";\n";
		$i21 = "\$item21 = \"".$item21."\";\n";
		$i22 = "\$item22 = \"".$item22."\";\n";
		$i23 = "\$item23 = \"".$item23."\";\n";
		$i24 = "\$item24 = \"".$item24."\";\n";
		$i31 = "\$item31 = \"".$item31."\";\n";
		$i32 = "\$item32 = \"".$item32."\";\n";
		$i33 = "\$item33 = \"".$item33."\";\n";
		$i34 = "\$item34 = \"".$item34."\";\n";
		$i41 = "\$item41 = \"".$item41."\";\n";
		$i42 = "\$item42 = \"".$item42."\";\n";
		$i43 = "\$item43 = \"".$item43."\";\n";
		$i44 = "\$item44 = \"".$item44."\";\n";
		$i51 = "\$item51 = \"".$item51."\";\n";
		$i52 = "\$item52 = \"".$item52."\";\n";
		$i53 = "\$item53 = \"".$item53."\";\n";
		$i54 = "\$item54 = \"".$item54."\";\n";
		$i61 = "\$item61 = \"".$item61."\";\n";
		$i62 = "\$item62 = \"".$item62."\";\n";
		$i63 = "\$item63 = \"".$item63."\";\n";
		$i64 = "\$item64 = \"".$item64."\";\n";
		$i71 = "\$item71 = \"".$item71."\";\n";
		$i72 = "\$item72 = \"".$item72."\";\n";
		$i73 = "\$item73 = \"".$item73."\";\n";
		$i74 = "\$item74 = \"".$item74."\";\n";
		$i81 = "\$item81 = \"".$item81."\";\n";
		$i82 = "\$item82 = \"".$item82."\";\n";
		$i83 = "\$item83 = \"".$item83."\";\n";
		$i84 = "\$item84 = \"".$item84."\";\n";
	}
	
	else if ($_POST['$item13'] == "")
	{
		include 'data.php';
		$itema1 = $item11;
		$itema2 = $item12;
		$itema3 = $item13;
		$itema4 = $item14;
		$itemb1 = $item21;
		$itemb2 = $item22;
		$itemb3 = $item23;
		$itemb4 = $item24;
		$itemc1 = $item31;
		$itemc2 = $item32;
		$itemc3 = $item33;
		$itemc4 = $item34;
		$itemd1 = $item41;
		$itemd2 = $item42;
		$itemd3 = $item43;
		$itemd4 = $item44;
		$iteme1 = $item51;
		$iteme2 = $item52;
		$iteme3 = $item53;
		$iteme4 = $item54;
		$itemf1 = $item61;
		$itemf2 = $item62;
		$itemf3 = $item63;
		$itemf4 = $item64;
		$itemg1 = $item71;
		$itemg2 = $item72;
		$itemg3 = $item73;
		$itemg4 = $item74;
		$itemh1 = $item81;
		$itemh2 = $item82;
		$itemh3 = $item83;
		$itemh4 = $item84;
		
		$i11 = "\$item11 = \"".$itema1."\";\n";
		$i12 = "\$item12 = \"".$itema2."\";\n";
		$i13 = "\$item13 = \"".$itema3."\";\n";
		$i14 = "\$item14 = \"".$itema4."\";\n";
		$i21 = "\$item21 = \"".$itemb1."\";\n";
		$i22 = "\$item22 = \"".$itemb2."\";\n";
		$i23 = "\$item23 = \"".$itemb3."\";\n";
		$i24 = "\$item24 = \"".$itemb4."\";\n";
		$i31 = "\$item31 = \"".$itemc1."\";\n";
		$i32 = "\$item32 = \"".$itemc2."\";\n";
		$i33 = "\$item33 = \"".$itemc3."\";\n";
		$i34 = "\$item34 = \"".$itemc4."\";\n";
		$i41 = "\$item41 = \"".$itemd1."\";\n";
		$i42 = "\$item42 = \"".$itemd2."\";\n";
		$i43 = "\$item43 = \"".$itemd3."\";\n";
		$i44 = "\$item44 = \"".$itemd4."\";\n";
		$i51 = "\$item51 = \"".$iteme1."\";\n";
		$i52 = "\$item52 = \"".$iteme2."\";\n";
		$i53 = "\$item53 = \"".$iteme3."\";\n";
		$i54 = "\$item54 = \"".$iteme4."\";\n";
		$i61 = "\$item61 = \"".$itemf1."\";\n";
		$i62 = "\$item62 = \"".$itemf2."\";\n";
		$i63 = "\$item63 = \"".$itemf3."\";\n";
		$i64 = "\$item64 = \"".$itemf4."\";\n";
		$i71 = "\$item71 = \"".$itemg1."\";\n";
		$i72 = "\$item72 = \"".$itemg2."\";\n";
		$i73 = "\$item73 = \"".$itemg3."\";\n";
		$i74 = "\$item74 = \"".$itemg4."\";\n";
		$i81 = "\$item81 = \"".$itemh1."\";\n";
		$i82 = "\$item82 = \"".$itemh2."\";\n";
		$i83 = "\$item83 = \"".$itemh3."\";\n";
		$i84 = "\$item84 = \"".$itemh4."\";\n";
	}
	
	$inventory = fopen('data.php', 'w');
	fwrite($inventory, "<?php \n");
	fwrite($inventory, $i11);
	fwrite($inventory, $i12);
	fwrite($inventory, $i13);
	fwrite($inventory, $i14);
	fwrite($inventory, $i21);
	fwrite($inventory, $i22);
	fwrite($inventory, $i23);
	fwrite($inventory, $i24);
	fwrite($inventory, $i31);
	fwrite($inventory, $i32);
	fwrite($inventory, $i33);
	fwrite($inventory, $i34);
	fwrite($inventory, $i41);
	fwrite($inventory, $i42);
	fwrite($inventory, $i43);
	fwrite($inventory, $i44);
	fwrite($inventory, $i51);
	fwrite($inventory, $i52);
	fwrite($inventory, $i53);
	fwrite($inventory, $i54);
	fwrite($inventory, $i61);
	fwrite($inventory, $i62);
	fwrite($inventory, $i63);
	fwrite($inventory, $i64);
	fwrite($inventory, $i71);
	fwrite($inventory, $i72);
	fwrite($inventory, $i73);
	fwrite($inventory, $i74);
	fwrite($inventory, $i81);
	fwrite($inventory, $i82);
	fwrite($inventory, $i83);
	fwrite($inventory, $i84);
	fwrite($inventory, "?> \n");
	fclose($inventory);
	
?>
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
				
				<form id="inventory" name="form" method="post" action="assign6-write.php">
					
					<div class="column">
						<p> Potion </p>
						<img src="Images/potion.png" width=100px height=100px>
						
						<p> Update Potion Stock: </p>
						<input type="text" name="$item13" id="$item13" value="10">
						
						<p> Update Potion Price: </p>
						<input type="text" name="$item14" id="$item14" value="300">
					</div>
					
					<div class="column">
						<p> Antidote </p>
						<img src="Images/antidote.png" width=100px height=100px>
						
						<p> Update Antidote Stock: </p>
						<input type="text" name="$item23" id="$item23" value="10">
						
						<p> Update Antidote Price: </p>
						<input type="text" name="$item24" id="$item24" value="100">
					</div>
					
					<div class="column">
						<p> Green Tea </p>
						<img src="Images/tea.png" width=100px height=100px>
					
						<p> Update Green Tea Stock: </p>
						<input type="text" name="$item33" id="$item33" value="10">
						
						<p> Update Green Tea Price: </p>
						<input type="text" name="$item34" id="$item34" value="100">
					</div>
					
					<div class="column">
						<p> New Rod </p>
						<img src="Images/rod.png" width=100px height=100px>
						
						<p> Update New Rod Stock: </p>
						<input type="text" name="$item43" id="$item43" value="10">
						
						<p> Update New Rod Price: </p>
						<input type="text" name="$item44" id="$item44" value="200">
					</div>
					
					<div class="column">
						<p> Pokeball </p>
						<img src="Images/pokeball.png" width=100px height=100px>
						
						<p> Update Pokeball Stock: </p>
						<input type="text" name="$item53" id="$item53" value="10">
						
						<p> Update Pokeball Price: </p>
						<input type="text" name="$item54" id="$item54" value="300">
					</div>
					
					<div class="column">
						<p> Greatball </p>
						<img src="Images/greatball.png" width=100px height=100px>
						
						<p> Update Greatball Stock: </p>
						<input type="text" name="$item63" id="$item63" value="10">
						
						<p> Update Greatball Price: </p>
						<input type="text" name="$item64" id="$item64" value="600">
					</div>
					
					<div class="column">
						<p> Full Heal </p>
						<img src="Images/heal.png" width=100px height=100px>
						
						<p> Update Full Heal Stock: </p>
						<input type="text" name="$item73" id="$item73" value="10">
						
						<p> Update Full Heal Price: </p>
						<input type="text" name="$item74" id="$item74" value="600">
					</div>
					
					<div class="column">
						<p> Max Revive </p>
						<img src="Images/revive.png" width=100px height=100px>
						
						<p> Update Max Revive Stock: </p>
						<input type="text" name="$item83" id="$item83" value="10">
						
						<p> Update Max Revive Price: </p>
						<input type="text" name="$item84" id="$item84" value="700">
					</div>
					
					<div align="center">
						<input type="submit" value="Submit">
						<input type="reset" value="Cancel">
					</div>
				</form>
				
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