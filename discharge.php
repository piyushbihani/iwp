<?php
				session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Tiro Gurmukhi:wght@200;300;400;500&display=swap"
        rel="stylesheet">
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

        }

        body {
            /* background: rgb(235, 235, 235); */
            background: #243b55;
            padding-bottom: 10px;
            padding-top: 10px;
            color: rgb(255, 255, 255);
            font-family: 'Roboto', sans-serif;
        }

        #form {
            text-indent: 0.5em;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100px;
            border: 1px solid black;
            margin-left: 20px;
            margin-right: auto;
            color: #fff;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        div p {
            margin: 10px;
            letter-spacing: 1px;
            color: #fff;
            text-align: left;

        }

        h1 {
            text-align: center;
            font-family: 'Tiro Gurmukhi', sans-serif;
            font-weight: 500;
            letter-spacing: 0.8px;
            margin-top: 40px;
            margin-bottom: 40px;
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
            display: flex;
        }

        .container {
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        input {
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
            margin-left: 20px;
        }

        /*
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
            margin-left: 30px;
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
        */

        button {
            margin-left: 20px;
            margin-top: 60px;
            margin-bottom: 20px;
        }

        #next {
            margin-left: 550px;
        }


        #wd,
        #fd,
        #qs,
        .waste__water,
        .track_volume,
        #zd,
        #tf,
        #pw,
        #gc,
        #is {
            margin-left: 20px;
            margin-right: 20px;
        }

        #tr,
        #dp,
        #le {
            margin-left: 16px;
        }
    </style>



    <title>Document</title>
</head>

<body>

    <h1>
        WATER DISCHARGE
    </h1>

    <div class="container">

        <form action="discharge.php" method="post">

            <fieldset>

                <!--<legend>Water Discharge</legend> -->



                <!-- waste water -->
                <div class="waste__water">
                    <label for="waste_water">Does your facility generate waste water</label>
                    <div class="form-check" id="select1">
                        <input class="form-check-input" type="radio" name="waste" id="yes" value="true">
                        <label class="form-check-label" for="yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" id="select2">
                        <input class="form-check-input" type="radio" name="waste" id="No" value="false">
                        <label class="form-check-label" for="No">
                            No
                        </label>
                    </div>
                </div><br>


                <!-- total discharge -->
                <div id="yes-display">
                    <!-- <label for="total_discharge">If yes, total discharge volume per day (m³ ):</label>
                    <input type="text" id="total_discharge" name="total_discharge"> -->
                </div><br>

                <!-- zero liquid discharge -->
                <div id="zd">
                    <label for="zero_discharge">Does your facility have zero liquid discharge (ZLD):</label>
                    <div class="form-check" id="select3">
                        <input class="form-check-input" type="radio" name="zld" id="yes1" value="true">
                        <label class="form-check-label" for="yes1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" id="select4">
                        <input class="form-check-input" type="radio" name="zld" id="No1" value="false">
                        <label class="form-check-label" for="No1">
                            No
                        </label>
                    </div>
                </div><br><br>


                <!-- treatment facility -->

                <div class="treatment_facility">

                    <p id="tr">Treatment facility for the unit</p>

                    <div id="tf">
                        <div class="form-check" id="c1">
                            <input class="form-check-input" type="checkbox" value="Common effluent treatment facility"
                                id="check1a" name="Tfacility[]">
                            <label class="form-check-label" for="check1a">
                                Common effluent treatment facility
                            </label>
                        </div>
                        <div class="form-check" id="c2">
                            <input class="form-check-input" type="checkbox"
                                value="Individual effluent treatment facility" id="check2b" name="Tfacility[]">
                            <label class="form-check-label" for="check2b">
                                Individual effluent treatment facility
                            </label>
                        </div>
                        <div class="form-check" id="c3">
                            <input class="form-check-input" type="checkbox" value="No treatment facility" id="check3c"
                                name="Tfacility[]">
                            <label class="form-check-label" for="check3c">
                                No treatment facility
                            </label>
                        </div>
                    </div>
                    <br>
                    <ul id="check2b-display">
                        <li>Wastewater treatment methods/ practices:
                            <div class="form-check" id="c11">
                                <input class="form-check-input" type="checkbox" value="Primary" id="check1d"
                                    name="method[]">
                                <label class="form-check-label" for="check1d">
                                    Primary
                                </label>
                            </div>
                            <div class="form-check" id="c22">
                                <input class="form-check-input" type="checkbox" value="Secondary" id="check2e"
                                    name="method[]">
                                <label class="form-check-label" for="check2e">
                                    Secondary
                                </label>
                            </div>
                            <div class="form-check" id="c33">
                                <input class="form-check-input" type="checkbox" value="Tertiary" id="check3f"
                                    name="method[]">
                                <label class="form-check-label" for="check3f">
                                    Tertiary
                                </label>
                            </div>
                        </li><br>

                        <li>
                            <label for="methods">Please, fill the appropriate methods (<i>refer FEM 3.0 Module -
                                    Wastewater</i>) :</label>
                            <input type="number" id="methods" name="metods">
                        </li>
                        <li>
                            <label for="treatment_capacity">Total water treatment (m³) capacity of the unit:</label>
                            <input type="number" id="treatment_capacity" name="treatment_capacity">
                        </li>
                    </ul>
                </div><br>


                <!-- track wastewater volume seperately -->
                <div class="track_volume">
                    <label for="track_volume">Does your unit track its industrial / domestic wastewater volumes
                        separately:</label>
                    <div class="form-check" id="select5">
                        <input class="form-check-input" type="radio" name="volume" id="yes2" value="true">
                        <label class="form-check-label" for="yes2">
                            Yes
                        </label>
                    </div>
                    <div class="form-check" id="select6">
                        <input class="form-check-input" type="radio" name="volume" id="No2" value="false">
                        <label class="form-check-label" for="No2">
                            No
                        </label>
                    </div>


                    <ul id="yes2-display">
                        <li>
                            <p>Wastewater volume percentage: <br> Industrial <input type="number" name="industrial"
                                    id="induatrial"> % &nbsp;<br><br> Domestic <input type="number" name="domestic"
                                    id="domestic">
                                %</p><br>
                        </li>
                        <li>
                            <p>Volume of treated wastewater per category: <br> Industrial <input type="number"
                                    name="industrial1" id="induatrial1"> % &nbsp;<br><br> Domestic
                                <input type="number" name="domestic1" id="domestic1"> %
                            </p>
                        </li>
                    </ul>
                </div><br><br>


                <!-- Table -->

                <div class="table">
                    <p id="wd">Quality of water discharge at the out gates (in 2018): <br>
                        Applicable [ ] Not Applicable [ ]</p>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Parameter</th>
                            <th>Unit</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Temp</td>
                            <td>°C</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>pH</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Colour</td>
                            <td>Pt-Co</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>BOD</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>5</td>
                            <td>COD</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>6</td>
                            <td>TSS</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>7</td>
                            <td>TDS</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Chlorine</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Cr6+</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Total
                                surface
                                interact
                                matters</td>
                            <td>mg/l</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>


                </div><br><br>





                <div class="treatment_facility">

                    <p id="dp">Final discharge point of treated / untreated wastewater:</p>

                    <div id="fd">
                        <div class="form-check" id="c1a">
                            <input class="form-check-input" type="checkbox" value="Land" id="check1g" name="points[]">
                            <label class="form-check-label" for="check1g">
                                Land
                            </label>
                        </div>
                        <div class="form-check" id="c2b">
                            <input class="form-check-input" type="checkbox" value="Water" id="check2h" name="points[]">
                            <label class="form-check-label" for="check2h">
                                Water
                            </label>
                        </div>
                        <div class="form-check" id="c3c">
                            <input class="form-check-input" type="checkbox" value="Re-use" id="check3i" name="points[]">
                            <label class="form-check-label" for="check3i">
                                Re-use
                            </label>
                        </div>
                    </div>
                </div><br><br>

                <div id="pw">
                    <label for="water_recovery">Percentage of Water Recovery % from Effluent:</label>
                    <input type="number" id="water_recovery" name="water_recovery">
                </div><br><br>

                <div>
                    <label for="Industrial_sludge" id="is">Details on discharge of Industrial sludge:</label><br>
                    <textarea id="Industrial_sludge" name="Industrial_sludge" rows="5" cols="80"></textarea>
                </div><br><br>


                <div class="quality_standards">

                    <p id="le">Is the factory always in compliance with legal waste water quality standards, permits,
                        monitoring or
                        other contractual agreements?</p>

                    <div id="qs">
                        <div class="form-check" id="c1d">
                            <input class="form-check-input" type="checkbox"
                                value="Company meets all existing quality standards and has either a company standard and/or has a compliance system in place"
                                id="check1j" name="wquality[]">
                            <label class="form-check-label" for="check1j">
                                Company meets all existing quality standards and has either a company standard and/or
                                has a compliance system in place
                            </label>
                        </div>
                        <div class="form-check" id="c2e">
                            <input class="form-check-input" type="checkbox"
                                value="Site meets water quality requirements, but no company-specific standards or compliance systems exist"
                                id="check2k" name="wquality[]">
                            <label class="form-check-label" for="check2k">
                                Site meets water quality requirements, but no company-specific standards or compliance
                                systems exist
                            </label>
                        </div>
                        <div class="form-check" id="c3f">
                            <input class="form-check-input" type="checkbox"
                                value="Unknown or in general meets water quality standards, but may have some violations"
                                id="check3l" name="wquality[]">
                            <label class="form-check-label" for="check3l">
                                Unknown or in general meets water quality standards, but may have some violations
                            </label>
                        </div>
                        <div class="form-check" id="c4g">
                            <input class="form-check-input" type="checkbox"
                                value="The site sometimes meets water quality standards, but is regularly in violation"
                                id="check1m" name="wquality[]">
                            <label class="form-check-label" for="check1m">
                                The site sometimes meets water quality standards, but is regularly in violation
                            </label>
                        </div>
                        <div class="form-check" id="c5h">
                            <input class="form-check-input" type="checkbox"
                                value="The site rarely or never meets existing water quality standards" id="check2n"
                                name="wquality[]">
                            <label class="form-check-label" for="check2n">
                                The site rarely or never meets existing water quality standards
                            </label>
                        </div>
                    </div>
                </div><br><br>

                <div>
                    <label for="comments" id="gc">General Comments and Feedback:</label><br>
                    <textarea name="comments" id="comments" cols="80" rows="6"
                        placeholder="Write any comment or suggestion..."></textarea>
                </div><br>


                <button class="btn btn-primary" type="button" onclick="history.back();">&laquo; Previous</button>
                <button type="submit" name="submit2" class="btn btn-primary" id="next">Next &raquo;</button>

            </fieldset>
        </form>
    </div>
    <script src="discharge.js"></script>
</body>

</html>

<?php
				include('DBconn.php');
				if(isset($_POST['submit2']))
				{
          $_SESSION['waste']=$_POST["waste"];
					if($_SESSION['waste']=="true")
					{
						$_SESSION['total_discharge']=$_POST["total_discharge"];
					}
					else
					{
          	$_SESSION['total_discharge']="NULL";
					}
					$_SESSION['zld']=$_POST["zld"];
					$_SESSION['Tfacility']=$_POST["Tfacility"];
					if(in_array("Individual effluent treatment facility",$_SESSION['Tfacility']))
					{
						$_SESSION['methods']=$_POST["method"];
						$_SESSION['metods']=$_POST["metods"];
						$_SESSION['treatment_capacity']=$_POST["treatment_capacity"];
					}
					else
					{
						$_SESSION['methods']=NULL;
						$_SESSION['metods']="NULL";
						$_SESSION['treatment_capacity']="NULL";
					}
					$_SESSION['volume']=$_POST["volume"];
					if($_SESSION['volume']=="true")
					{
						$_SESSION['industrial']=$_POST["industrial"];
						$_SESSION['domestic']=$_POST["domestic"];
						$_SESSION['industrial1']=$_POST["industrial1"];
						$_SESSION['domestic1']=$_POST["domestic1"];
					}
					else {
						$_SESSION['industrial']="NULL";
						$_SESSION['domestic']="NULL";
						$_SESSION['industrial1']="NULL";
						$_SESSION['domestic1']="NULL";
					}
					$_SESSION['points']=$_POST["points"];
					$_SESSION['water_recovery']=$_POST["water_recovery"];
					$_SESSION['Industrial_sludge']=$_POST["Industrial_sludge"];
					$_SESSION['wquality']=$_POST["wquality"];
					$_SESSION['comments']=$_POST["comments"];
					echo "<script> location.href='risks&challanges.php'; </script>";
					exit;
					}
?>
