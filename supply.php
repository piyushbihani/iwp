<?php
				session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Oswald:wght@200;300;400;500&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Oswald:wght@200;300;400;500&family=Roboto:wght@100;300;400;500;700&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="form.css">
    <title>Document</title>

    <style>
        fieldset {
            /* background-color: rgb(255, 255, 255); */
           width: 830px;
           padding-left: 20px;
           padding-top: 20px;
            background: rgba(0,0,0,.5);
            /* box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16); */
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border: none;
            border-radius: 10px 10px 10px 10px;
            padding-bottom: 20px;
        }

        input {
            margin: 10px;

        }

        #form {
            text-indent: 0.5em;
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



        .input-text {
        width: 60%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        }

        body {
            /* background: rgb(235, 235, 235); */
            background: #243b55;
            padding-bottom: 10px;
            padding-top: 10px;
            color: rgb(255, 255, 255);
            font-family: 'Roboto', sans-serif;
        }

        a {
            margin: 20px;
        }

        h1 {
            text-align: center;
            font-family: 'Tiro Gurmukhi', sans-serif;
            font-weight: 500;
            letter-spacing: 2px;
            font-size: 50px;

            margin-bottom: 20px;
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

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100px;
            border: 1px solid black;
            margin-left: 20px;
            margin-right: auto;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }



.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 40px;
  outline: 0;
  padding: 4px 20px 0;
  width: 200px;
}
.quantity {
    margin-bottom: 0;
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

#next{
		margin-left: 590px;
	}

    </style>
</head>

<body>
    <div id="error"></div>
    <br>
    <br>
    <h1>
        WATER   SUPPLY
    </h1>
    <div class="container">

        <form id="form" action="supply.php" method="post">
            <fieldset>
                <!-- <legend>WATER SUPPLY</legend> -->
                <p>Sourcing (with percentage if known):</p>

                <input type="checkbox" id="pipe" name="Sourcing[]" value="pipe">
                <label for="pipe">Pipe water / Municipal water</label>
                <br>
                <input type="checkbox" id="bore" name="Sourcing[]" value="bore">
                <label for="bore">Groundwater (Bore)</label>
                <br>
                <input type="checkbox" id="Surface" name="Sourcing[]" value="Surface">
                <label for="Surface">Surface water (River)</label>
                <br>
                <input type="checkbox" id="treated" name="Sourcing[]" value="treated">
                <label for="treated">Treated water (IETP/CETP)</label>
                <br>
                <input type="checkbox" id="sources" name="Sourcing[]" value="sources">
                <label for="sources">Water from other sources</label>
                <br>
                <br>
                <br>
                <p>Quality of Water supply:</p>

                <input type="radio" id="Performed" name="quality" value="Performed">
                <label for="Performed">Water Testing Performed</label>
                <br>
                <input type="radio" id="not Performed" name="quality" value="not Performed">
                <label for="not Performed">Water Testing Not Performed</label>
                <br>
                <br>
                <br>
                <p>Is the water treated before being used ?</p>

                <input type="radio" id="treateds" name="use" value="treateds">
                <label for="treateds">No treatment</label>
                <br>
                <input type="radio" id="treatment" name="use" value="treatment">
                <label for="treatment">Yes, pre treatment</label>
                <br>
                <input type="radio" id="yes" name="use" value="yes">
                <label for="yes">Yes, biological treatment</label>
                <br>
                <input type="radio" id="secondary" name="use" value="secondary">
                <label for="secondary">Yes, secondary treatment</label>
                <br>
                <input type="radio" id="advanced" name="use" value="advanced">
                <label for="advanced">Yes, advanced treatment</label>
                <br>
                <br>
                <p class="quantity">Quantity of water supply : <input id="water" class="input" name="water" type="text" placeholder=" " /></p>






                <label for="water"></label>

                <br>
                <br>
                <p>Water consumption in last 3 years (in Kilo Litres; 1000 m3 = 1 KL) : </p>
                <br>
                <style>

                </style>
                <table>

                    <thead>
                        <th>Year</th>
                        <th>1st Quarter</th>
                        <th>2nd Quarter</th>
                        <th>3rd Quarter</th>
                        <th>4th Quarter</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td>2021</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>2020</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>2019</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Cost of Water (INR/KL) – Treated / Fresh Water :
                    <input id="cost" class="input" name="cost" type="text" placeholder=" " />
                </p>
                <p>Does your unit track its factory / office water consumption separately:
                  <input type="radio" id="a" name="unit" value="true">
                  <label for="a">Yes</label>
                  <input type="radio" id="b" name="unit" value="false">
                  <label for="b">No</label>
                </p>
                <p id="if-yes">
                </p>
                <p>Has your facility implemented a water balance to evaluate water input and output ?
                  <input type="radio" id="c" name="io" value="true">
                  <label for="c">Yes</label>
                  <input type="radio" id="d" name="io" value="false">
                  <label for="d">No</label>
                </p>
                <p>Which facility process/operation uses water the most : <input id="facility" class="input" name="facility" type="text" placeholder=" " /></p>
                <br>
                <p>Has your facility implemented a plan to optimize water usage (provide details) ?
                  <input type="radio" id="e" name="plan" value="true">
                  <label for="e">Yes</label>
                  <input type="radio" id="f" name="plan" value="false">
                  <label for="f">No</label>
                </p>


                <br>
								<button class="btn btn-primary" type="button" onclick="history.back();">&laquo; Previous</button>
                <button type="submit" name="submit1" class="btn btn-primary" id="next">Next &raquo;</button>
            </fieldset>
        </form>
    </div>
    <script src="supply.js"></script>
</body>

</html>

<?php
				include('DBconn.php');
				if(isset($_POST['submit1']))
				{
          $_SESSION['source']=$_POST["Sourcing"];
          $_SESSION['quality']=$_POST["quality"];
					$_SESSION['use']=$_POST["use"];
					$_SESSION['water']=$_POST["water"];
					$_SESSION['cost']=$_POST["cost"];
					$_SESSION['unit']=$_POST["unit"];
					if($_SESSION['unit']=="true")
					{
						$_SESSION['process']=$_POST["process"];
						$_SESSION['domestic']=$_POST["domestic"];
					}
					else
					{
						$_SESSION['process']=NULL;
						$_SESSION['domestic']=NULL;
					}
					$_SESSION['io']=$_POST["io"];
					$_SESSION['facility']=$_POST["facility"];
					$_SESSION['plan']=$_POST["plan"];

					echo "<script> location.href='discharge.php'; </script>";
					exit;
				}
?>
