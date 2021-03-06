<html>
	<head>
		<title>Doctor Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Doctor</a> Details</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="request.php" >Request</a></li>
	                        
                            <li><a href="presci.php">Prescription</a></li>
                            <li><a href="doc_patient.php">Patient</a></li>							
						</ul>
					</nav>
				</header>

			<!-- Employee Details -->
			<section id="banner" >
				 <h1 style="margin-left: 30px; font-size:200%; text-align:left; color:white; ">Employee Information: </h1>
					<section class="container">
  					<header class="box special">
					
							<table>
								<tr>
									<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Employee No:</h4></td>
								</tr>
								<tr>
									<td>Name:</td>
								</tr>
								<tr>
									<td>Date Of Birth:</td>
								</tr>
								<tr>
									<td>Working Since:</td>
								</tr>
								<tr>
									<td>Salary:</td>
								</tr>
								<tr>
									<td>Qualification:</td>
								</tr>
								<tr>
									<td>Department Name:</td>
								</tr>
								<tr>
									<td>Contact:</td>
								</tr>
								<tr>
									<td>Working Under:</td>
								</tr>
								<tr>
									<td>Shifts:</td>
								</tr>
		                        <tr>
									<td>Floor:</td>
								</tr>				
						        <tr>
									<td>Reference Name:</td>
								</tr>
								<tr>
									<td>Reference Contact:</td>
								</tr>
								<tr>
									<td>Password:</td>
								</tr>
						 
						</table>	
					</header>
                  </section>					
				</section>
		 <?php

					 include_once("config.php");
				     if(!empty($_POST['patient_id']))
				     {
					 				$getdel_no=mysqli_query($link,"SELECT `patient_id` FROM `med_record` WHERE `patient_id`='".$_POST['patient_id']."'");
							      while($del_no=mysqli_fetch_array($getdel_no))
							     {
							        $getmem_gendetails=mysqli_query($link,"SELECT * FROM `patient` WHERE `id`='".$del_no['id']."'");
							        while($mem_gendetails=mysqli_fetch_array($getmem_gendetails))
							        {
							         ?>
							          <tr>
							           <td><?php echo $del_no['id'];?></td>
							            <td><?php echo $mem_gendetails['name']; ?></td>
							            <td><?php echo $mem_gendetails['gender']; ?></td>
							            <td><?php echo $mem_gendetails['contact']; ?></td>
							            <td><?php echo $mem_gendetails['address']; ?></td>
							            <td><?php echo $mem_gendetails['emer_name']; ?></td>
							            <td><?php echo $mem_gendetails['emer_contact']; ?></td>
							            <td><?php echo $mem_gendetails['insurance']; ?></td>
							            <td><?php echo $mem_gendetails['doctor_id']; ?></td>
							            <td><?php echo $mem_gendetails['room_id']; ?></td>
							         <?php
							            $getmem_eventdetails=mysqli_query($link,"SELECT `event` FROM `sp_team` WHERE `team_id`='".$_POST['team_id']."'");

							          	while($mem_eventdetails=mysqli_fetch_array($getmem_eventdetails))
							          	{
							            	echo
								            '<td>'.$mem_eventdetails['event'].'</td>
								        </tr>';


								        }
								    }
								 }
								    echo
							    	'</table>';
							    }
							  ?>		
					
        </div>
				<section id="banner" >
				 <h1 style="margin-left: 30px; font-size:200%; text-align:left; color:white; ">Doctor Information: </h1>
					<section class="container">
  					<header class="box special">
					
							<table>
								<tr>
									<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Employee No:</h4></td>
							    </tr>
								<tr>
									<td>Speciality:</td>
								</tr>
								<tr>
									<td>Nurse ID:</td>
								</tr>
								<tr>
									<td>Room ID:</td>
								</tr>
								<tr>
									<td>Sub Department:</td>
								</tr>
								<tr>
									<td>Designation:</td>
								</tr>
								<tr>
									<td>Department Name:</td>
								</tr>
								
						
						</table>	
					</header>
                  </section>					
				</section>
					
        </div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>