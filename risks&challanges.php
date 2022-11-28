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
  <link href="https://fonts.googleapis.com/css2?family=Tiro Gurmukhi:wght@200;300;400;500&display=swap" rel="stylesheet">

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


    body {
      /* background: rgb(235, 235, 235); */
      background: #243b55;
      padding-bottom: 10px;
      padding-top: 10px;
      color: rgb(255, 255, 255);
      font-family: 'Roboto', sans-serif;
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

    }

    a {
      margin: 20px;
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
  <h1>RISKS AND CHALLENGES</h1>
  <div class="container">
    <form action="risks&challanges.php" method="post">
      <fieldset>
        <!-- <legend>RISKS AND CHALLENGES</legend> -->
        <div>
            <p>
            Relative to other water users in your local catchment (within 50km radius), does the factory face heavy
        water-related regulation and legal enforcement?</p>
        <input type="checkbox" id="ab" name="water[]" value="No, the site is under no/minimal regulation and/or legal enforcement">
        <label for="ab">No, the site is under no/minimal regulation and/or legal enforcement</label>
        </div>
        <div>
          <input type="checkbox" id="bb" name="water[]" value="No, the site is under similar regulation and/or legal enforcement as other users">
          <label for="bb">No, the site is under similar regulation and/or legal enforcement as other users</label>
        </div>
        <div>
          <input type="checkbox" id="cb" name="water[]" value="Unknown">
          <label for="cb">Unknown</label>
        </div>
        <div>
          <input type="checkbox" id="db" name="water[]" value="Yes, possibly the site is under greater regulation and/or legal enforcement">
          <label for="db">Yes, possibly the site is under greater regulation and/or legal enforcement</label>
        </div>
        <div>
          <input type="checkbox" id="eb" name="water[]" value="Yes, the site is under much greater regulation and/or legal enforcement">
          <label for="eb">Yes, the site is under much greater regulation and/or legal enforcement</label>
        </div><br><br><br>
        <p>
          Did your facility receive any government issued environmental violation records in the last 3 years:
        </p>
        <input type="radio" id="yes" name="AC" value="true">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="AC" value="false">
        <label for="no">No</label>
        <div id="yes-display">
<!--
          <textarea id="waters" cols="100" rows="5"></textarea> -->
        </div>
        <br>

        <!-- siudfcsjkcnhbchjsbhcsdsadads -->
        <p>
          Did your facility face temporary shutdown in the last 3 years:
        </p>
        <input type="radio" id="ad" name="AD" value="true">
        <label for="ad">Yes</label>
        <input type="radio" id="bd" name="AD" value="false">
        <label for="bd">No</label>
        <div id="ad-display">

          <!-- <textarea id="w" cols="100" rows="5"></textarea> -->
        </div>
        <br>
        <p>
          Did your facility considerable loss of business in the last 3 years:
        </p>
        <input type="radio" id="ae" name="AE" value="true">
        <label for="ae">Yes</label>
        <input type="radio" id="be" name="AE" value="false">
        <label for="be">No</label>
        <div id="ae-display">

          <!-- <textarea id="w" cols="100" rows="5"></textarea> -->
        </div>
        <br>
        <p>
          Did your facility recive legal action from individuals/community/instructons in the last 3 years:
        </p>
        <input type="radio" id="af" name="AF" value="true">
        <label for="af">Yes</label>
        <input type="radio" id="bf" name="AF" value="false">
        <label for="bf">No</label>
        <div id="af-display">

          <!-- <textarea id="w" cols="100" rows="5"></textarea> -->
        </div>
        <br><br>
        <p>
          Relative to other water users in your local catchment (within a 50km radius), would you consider the
          site a large water user/polluter?
        </p>
        <input type="radio" id="ca" name="CA" value="No, the site is not a large water user">
        <label for="ca">No, the site is not a large water user</label>
        <div>
        <input type="radio" id="cc" name="CA" value="No, the site is not a large water user/polluter (relative to others)">
        <label for="cc">No, the site is not a large water user/polluter (relative to others)</label>
        </div>
        <div>
        <input type="radio" id="cd" name="CA" value="Unknown">
        <label for="cd">Unknown</label>
        </div>
        <div>
        <input type="radio" id="ce" name="CA" value="Yes,the site is a recoginable branf=d to some locals">
        <label for="ce">Yes,the site is a recoginable branf=d to some locals</label>
        </div>
        <div>
        <input type="radio" id="cf" name="CA" value="Yes, the site is a recoginable brand to most/all locals">
        <label for="cf">Yes, the site is a recoginable brand to most/all locals</label>
        </div>
        <br><br><br>
        <p>
          How would you describe this site&#39;s general water management/stewardship maturity?
        </p>
        <input type="radio" id="da" name="DA" value="Long standing advanced water stewardship practices">
        <label for="da">Long standing advanced water stewardship practices</label>
        <div>
          <input type="radio" id="dc" name="DA" value="Recently began advanced water stewardship practices">
          <label for="dc">Recently began advanced water stewardship practices</label>
        </div>
        <div>
          <input type="radio" id="de" name="DA" value="Established Water Management">
          <label for="de">Established Water Management</label>
        </div>
        <div>
          <input type="radio" id="df" name="DA" value="Initial actions on water">
          <label for="df">Initial actions on water</label>
        </div>
        <div>
          <input type="radio" id="dg" name="DA" value="No action(s) on water">
          <label for="dg">No action(s) on water</label>
        </div>
        <br><br><br>
        <p>
          Standards/ certifications- achieved/ planned. Give reasons:
        </p>
        <textarea id="waterr" cols="100" name="certi" rows="5"></textarea>
        <br><br><br>
        <p>
          Access to finance-source (incentives, government/ private schemes):
        </p>
        <textarea id="wateer" cols="100" name="fsource" rows="5"></textarea>
        <br><br><br>
        <p>
          Access to technical know-how :
        </p>
        <input type="radio" id="ea" name="EA" value="Consultants">
        <label for="ea">Consultants</label>
        <div>
          <input type="radio" id="ec" name="EA" value="Research and Tech institutes">
          <label for="ec">Research and Tech institutes</label>
        </div>
        <div>
          <input type="radio" id="ee" name="EA" value="In-house experts">
          <label for="ee">In-house experts</label>
        </div>
        <div>
          <input type="radio" id="ef" name="EA" value="Buyer collaboration">
          <label for="ef">Buyer collaboration</label>
        </div>
        <div>
          <input type="radio" id="eg" name="EA" value="Others">
          <label for="eg">Others</label><br><br>
        </div>
        <div id="eg-display">
        <!-- <textarea id="wwate" cols="100" name="odetail" rows="5"></textarea> -->
        </div>
        <br><br><br>
        <p>
          Details regarding cluster level sustainbality intiatives:
        </p>
        <textarea id="war" cols="100" name="cluster" rows="5"></textarea>
        <br><br><br>
        <p>
          regarding engagements with other stakeholder (state/national governament, communities, NGOs,academia):
        </p>
        <textarea id="war" cols="100" name="stake" rows="5"></textarea>
        <br><br>
				<button class="btn btn-primary" type="button" onclick="history.back();">&laquo; Previous</button>
				<button type="submit" name="submit3" class="btn btn-primary" id="next">Submit &raquo;</button>

    </form>
    <script src="risk.js"></script>
</body>

</html>
<?php
				include('DBconn.php');
				if(isset($_POST['submit3']))
				{
					$_SESSION['water']=$_POST["water"];
					$water_json=json_encode($_SESSION['water']);
					$_SESSION['AC']=$_POST["AC"];
          if($_SESSION['AC']=="true")
					{
						$_SESSION['detail']=$_POST["detail"];
					}
					else
					{
						$_SESSION['detail']=NULL;
					}
					$_SESSION['AD']=$_POST["AD"];
					if($_SESSION['AD']=="true")
					{
						$_SESSION['detail1']=$_POST["detail1"];
					}
					else
					{
						$_SESSION['detail1']=NULL;
					}
					$_SESSION['AE']=$_POST["AE"];
					if($_SESSION["AE"]=="true")
					{
						$_SESSION['detail2']=$_POST["detail2"];
					}
					else
					{
						$_SESSION['detail2']=NULL;
					}
					$_SESSION['AF']=$_POST["AF"];
					if($_SESSION["AF"]=="true")
					{
						$_SESSION['detail3']=$_POST["detail3"];
					}
					else
					{
						$_SESSION['detail3']=NULL;
					}
					$_SESSION['CA']=$_POST["CA"];
					$_SESSION['DA']=$_POST["DA"];
					$_SESSION['certi']=$_POST["certi"];
					$_SESSION['fsource']=$_POST["fsource"];
					$_SESSION['accesst']=$_POST["EA"];
					if($_SESSION["accesst"]=="Others")
					{
						$_SESSION['odetail']=$_POST["odetail"];
						$_SESSION['accesst']=NULL;
					}
					else
					{
						$_SESSION['odetail']=NULL;
					}
					$_SESSION['cluster']=$_POST["cluster"];
					$_SESSION['stake']=$_POST["stake"];

					$reqire_json=json_encode($_SESSION['reqire']);
					$source_json=json_encode($_SESSION['source']);
					$Tfacility_json=json_encode($_SESSION['Tfacility']);
					$methods_json=json_encode($_SESSION['methods']);
					$points_json=json_encode($_SESSION['points']);
					$wquality_json=json_encode($_SESSION['wquality']);

					$sql="insert into profile(name,phone,address,type,invest,units,endp,mserved,association,labour,women,reqire,additional) values ('".$_SESSION['name']."',".$_SESSION['phone'].",'".$_SESSION['address']."','".$_SESSION['type']."','".$_SESSION['invest']."',".$_SESSION['units'].",".$_SESSION['endp'].",'".$_SESSION['mserved']."','".$_SESSION['association']."',".$_SESSION['labour'].",".$_SESSION['women'].",'".$reqire_json."','".$_SESSION['additional']."')";
					$sql0="insert into supply(phone,sourcing,quality,treatment,quantity,cost,unit,process,domestic,io,facility,plan) values(".$_SESSION['phone'].",'".$source_json."','".$_SESSION['quality']."','".$_SESSION['use']."','".$_SESSION['water']."',".$_SESSION['cost'].",".$_SESSION['unit'].",'".$_SESSION['process']."','".$_SESSION['domestic']."',".$_SESSION['io'].",'".$_SESSION['facility']."',".$_SESSION['plan'].")";
					$sql1="insert into discharge(phone,total_discharge,zld,Tfacility,methods,metods,treatment_capacity,industrial,domestic,industrial1,domestic1,points,water_recovery,Industrial_sludge,wquality,comments) values(".$_SESSION['phone'].",".$_SESSION['total_discharge'].",".$_SESSION['zld'].",'$Tfacility_json','$methods_json',".$_SESSION['metods'].",".$_SESSION['treatment_capacity'].",".$_SESSION['industrial'].",".$_SESSION['domestic'].",".$_SESSION['industrial1'].",".$_SESSION['domestic1'].",'$points_json',".$_SESSION['water_recovery'].",'".$_SESSION['Industrial_sludge']."','$wquality_json','".$_SESSION['comments']."')";
					$sql2="insert into Risks(phone,site,receive,face,loss,legal,Tsite,waterM,Standards,Fsource,accessT,otherD,cluster,stake)
					values(".$_SESSION['phone'].",'$water_json','".$_SESSION['detail']."','".$_SESSION['detail1']."','".$_SESSION['detail2']."','".$_SESSION['detail3']."','".$_SESSION['CA']."','".$_SESSION['DA']."','".$_SESSION['certi']."',
					'".$_SESSION['fsource']."','".$_SESSION['accesst']."','".$_SESSION['odetail']."','".$_SESSION['cluster']."','".$_SESSION['stake']."')";
					if(mysqli_query($conn, $sql) and mysqli_query($conn, $sql0) and mysqli_query($conn, $sql1) and mysqli_query($conn, $sql2))
					{
						echo "Thanks";
					}
				}
?>
