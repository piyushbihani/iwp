<?php
				session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tiro Gurmukhi:wght@200;300;400;500&display=swap"
        rel="stylesheet">

    <title>Document</title>

    <style>
        fieldset {
            /* background-color: rgb(255, 255, 255); */
            width: 830px;
            padding-left: 30px;
            padding-top: 20px;
            background: rgba(0, 0, 0, .5);
            /* box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16); */
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border: none;
            border-radius: 10px 10px 10px 10px;
            padding-bottom: 20px;
            text-align: left;
        }

        body {
            /* background: rgb(235, 235, 235); */
            background: #243b55;
            padding-bottom: 10px;
            padding-top: 10px;
            color: rgb(255, 255, 255);
            font-family: 'Roboto', sans-serif;
        }

        div p {

            letter-spacing: 1px;
            color: #fff;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
        }

        input,
        select {
            background-color: #303245;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            font-size: 18px;
            height: 30px;
            outline: 0;
            padding: 4px 20px 0;
            width: 200px;
            margin-left: 5px;
        }

        #op , .requirement{
            margin-left: 20px;
        }

        textarea {
            background-color: #303245;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            font-size: 18px;
            height: 200px;
            outline: 0;
            padding: 4px 20px 0;
            width: 600px;
            margin-left: 30px;
        }

        form {
            text-indent: 1em;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .container {
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            font-family: 'Tiro Gurmukhi', sans-serif;
            font-weight: 500;
            letter-spacing: 0.8px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        button {
            font-size: 16px;
            border: none;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: #287ff9;
            border-radius: 5px 5px 5px 5px;
            color: rgb(255, 255, 255);
            cursor: pointer;
            /* margin-left: 30px; */
        }

        button:hover {
            background-color: #2067cb;
            color: rgb(255, 255, 255);
        }

        .submit {
            background-color: #08d;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-left: 320px;
            text-align: center;
            width: 18%;
        }

        .submit:active {
            background-color: #06b;
        }
				#name {
            margin-left: 90px;
        }

        #end_product {
            margin-left: 200px;
        }

        #women {
            margin-left: 50px;
        }
        #next2 {
            margin-left: 675px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    <h1>Company Profile</h1>


    <div class="container">
        <form action="profile.php" method="post">
            <fieldset>
                <!--<legend>COMPANY PROFILE</legend>-->

                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name"><br><br>
                </div>
                <div>
                    <label for="Contact">Contact number:</label>
                    <input type="text" id="Contact" name="Contact">
                </div><br><br><br>
                <div>
                    <label for="Address">Address</label><br>
                    &nbsp;<textarea id="Address" name="Address" rows="3" cols="50"></textarea>
                    <br><br><br>
                </div>

                <div>
                    <label for="country">Unit type</label>
                    <select id="country" name="country">
                        <option value="spinning">Spinning</option>
                        <option value="dyeing">Dyeing</option>
                        <option value="finishing">Finishing</option>
                        <option value="fabric_printing">Fabric Printing</option>
                        <option value="garment_making">Garment Making</option>
                        <option id="others" value="others">Others</option>
                    </select>
                </div><br>
                <div id="others-display">
                    <input placeholder="Details..." type="text" id="others-display" name="Others">
                </div>

                <br>
                <div>
                    <label>Unit investment (INR):</label>
                </div>
                <div id="op">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="invest" value="Micro"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Micro (Below 25L)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="invest" value="Small"
                            id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Small (25L-5Cr)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="invest" value="Medium"
                            id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Medium (5Cr to 10Cr)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="invest" value="Large"
                            id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            Large (Above 10Cr)
                        </label>
                    </div>
                </div>
                <br><br><br>

                <div>
                    <label for="volume"> Unit's annual production volume(units)</label>
                    <input type="text" id="volume" name="volume">
                </div><br>

                <div>
                    <label for="end_product">End product:</label>
                    <input type="text" id="end_product" name="end_product">
                </div><br><br><br>
                <div>
                    <label for="Markets">Markets Served</label><br>
                    &nbsp;<textarea id="Markets" name="Markets" rows="3" cols="50"></textarea>
                </div><br><br><br>

                <div>
                    <label for="memberships">Association memberships</label>
                    &nbsp;<textarea id="memberships" name="memberships" rows="3" cols="50"></textarea>
                </div><br><br><br>

                <div>
                    <label for="labour">Total labour force:</label>
                    <input type="text" id="labour" name="labour"><br><br>
                </div>
                <div>
                    <label for="women">Total women:</label>
                    <input type="text" id="women" name="women">
                </div>
                <br><br>

                <div class="requirement">
                    <p>Permit requirement and compliance status( If yes, mention the regulatory institutions)</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Water_use" name="require[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Water use
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wastewater_discharge"
                            name="require[]" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                            Wastewater discharge
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wastewater_treatment"
                            name="require[]" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">
                            Wastewater treatment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Chemical" name="require[]"
                            id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3">
                            Chemical use and management
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Air_emissions" name="require[]"
                            id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
                            Air emissions
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Solid_waste_management"
                            name="require[]" id="flexCheckDefault5">
                        <label class="form-check-label" for="flexCheckDefault5">
                            Solid waste management
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Other_Environmental_permits"
                            name="require[]" id="flexCheckDefault6">
                        <label class="form-check-label" for="flexCheckDefault6">
                            Other Environmental permits
                        </label>
                    </div>

                </div><br>


                <textarea placeholder="Additional Information..." id="additional" name="additional" rows="5"
                    cols="50"></textarea>
                <br><br>
                <button type="submit" class="btn btn-primary" name="Submit" id="next2">Next &raquo;</button>

            </fieldset>
        </form>
    </div>

    <script src="profile.js"></script>
</body>

</html>

<?php
        include('DBconn.php');
				if(isset($_POST['Submit']))
				{
					$_SESSION['name']=$_POST["name"];
          $_SESSION['phone']=$_POST["Contact"];
          $_SESSION['address']=$_POST["Address"];
          $_SESSION['type']=$_POST["country"];
					if($_SESSION['type']=="others")
					{
						$_SESSION['type']=$_POST["Others"];
					}
          $_SESSION['invest']=$_POST["invest"];
          $_SESSION['units']=$_POST["volume"];
          $_SESSION['endp']=$_POST['end_product'];
          $_SESSION['mserved']=$_POST["Markets"];
					$_SESSION['association']=$_POST["memberships"];
          $_SESSION['labour']=$_POST["labour"];
          $_SESSION['women']=$_POST["women"];
          $_SESSION['reqire']=$_POST["require"];
          $_SESSION['additional']=$_POST["additional"];

					$check="select * from profile WHERE phone='".$_SESSION['phone']."'";
					$res = $conn->query($check);
					$row = mysqli_fetch_row($res);

					if (mysqli_num_rows($res) > 0)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
                      window.alert('Mobile No. Already registered')
                      window.location.href='profile.php'
                      </SCRIPT>");
					}
					else {
                echo "<script> location.href='supply.php'; </script>";
                exit;
					}
				}
?>
