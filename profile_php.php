<?php
				session_start();
				header("Cache-Control", "no-cache, no-store, must-revalidate");
				$conn = mysqli_connect("localhost","root","");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				mysqli_select_db($conn,"survey");
				$entry = 1;
				if(isset($_POST['next']))
				{
					$name=$_POST["name"];
          $phone=$_POST["Contact"];
          $address=$_POST["Address"];
          $type=$_POST["country"];
          $invest=$_POST["flexRadioDefault"];
          $units = $_POST["volume"];
          $endp = $_POST['end_product'];
          $mserved=$_POST["Markets"];
					$association=$_POST["memberships"];
          $labour=$_POST["labour"];
          $women=$_POST["women"];
          $reqire=$_POST["flexCheckDefault"];
          $additional=$_POST["additional"];
					$reqire_json=json_encode($reqire);
					$check = "select * from profile WHERE phone='$phone'";
					$res = $conn->query($check);

					$row = mysqli_fetch_row($res);
					if (mysqli_num_rows($res) > 0)
					{
						$entry = 0;
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Mobile No. Already registered')
							window.location.href='profile.html'
							</SCRIPT>");
					}
					else {
						$sql="insert into profile(name,phone,address,type,invest,units,endp,mserved,association,labour,women,reqire,additional) values ('$name','$phone','$address','$type','$invest',$units,'$endp','$mserved','$association',$labour,$women,'$reqire_json','$additional')";
	            if (mysqli_query($conn, $sql))
	            {
								include 'supply.html';
								// $sql = "select reqire from profile";
								// $result = mysqli_query($conn, $sql);
								// while($data = mysqli_fetch_array($result))
								// {
								//    $array = json_decode($data["reqire"]);
								//    print_r($array);
								// }
	            }
	            else
	            {
	              echo "Error: ";
	            }
					}
				}
?>
