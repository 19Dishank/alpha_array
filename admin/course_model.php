<?php 
		require_once("connection.php");
		 // if(!isset($_SESSION['mail']))
		 // {
		 //  header('location:index.php');
		 //  }
		$course_id = $_POST['course_id'];									
		
		$sql = "Select * from course_tbl where course_id=$course_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($conn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$course_name=ucfirst($row['course_name']);
				$course_details=ucfirst($row['course_details']);
				$course_fees=$row['course_fees'];
				$available_seat=$row['available_seat'];
				$available_duration=$row['available_duration'];
				$exam_link=empty($row['exam_link']) ? "N/A" : $row['exam_link'];
				
				$response.= "<tr>";
				$response.= "<th width='300px;'>Course Name  </th><td>".$course_name."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th>Course Detail </th><td>".$course_details."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Course Fees</th><td>".$course_fees."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Available Seat</th><td>".$available_seat."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Available Duration</th><td>".$available_duration."</td>";
				$response .= "</tr>";		
				
				$response .= "<tr>";
				$response .= "<th>Exam Link</th><td>".$exam_link."</td>";
				$response .= "</tr>";		
		}
		$response .= "</table>";
		echo $response;
		