<?php

$not_id=$_REQUEST['id'];
//echo $not_id;
?>

<html>
 <head> 
<title>Marc</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<link rel="stylesheet" href="css/font-awesome.css">
<link href="css/icon.css" rel="stylesheet"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
</head>
<body class="blue lighten-3">
 <div class="row"><br>
<form action="notification_infocode.php" method="post" class="light-blue darken-2 col s4 m6 offset-m3" enctype="multipart/form-data">
<h3 class="center-align white-text">APPLY HERE</h3>

        <div class="input-field col s12">
          <input id="name" type="text" class="validate white-text" name="name">
          <label for="name"class="white-text">Name</label>
        </div>
      
        <label class="white-text" for="test1">Gender</label>
        <p class="white-text">
      <input name="g" type="radio" id="test1" value="male"/>
      <label class="white-text" for="test1">Male</label>
      <input name="g" type="radio" id="test2" value="female"/>
      <label class="white-text" for="test2">Female</label>
      <input name="g" type="radio" id="test3" value="other"/>
      <label class="white-text" for="test3">Other</label>
    </p>
 
    <label for="date" class="white-text">DOB</label><br/>
    <div class="input-field col s12">
          <input id="date" type="date" class="validate white-text" name="dob">
          
      </div> 
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" name="email">
          <label for="email" class="white-text">Email</label>
      </div>  
                <div class="input-field col s12">
          <input id="mobile" type="text" class="validate white-text" name="mobile">
          <label for="mobile"class="white-text">Mobile</label>
        </div>
        <div class="input-field col s12">
    <select name="skill" class="white-text">
      <option value="">--Choose--</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
         </select>
    <label class="white-text"><b>Command Any Language</b></label>
  </div> 
        <div class="col s12 file-field input-field">
        <div class="btn amber black-text">
        <span>File</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="file" placeholder="Upload Resume">
    </div>
      </div>
      <br/> <br/> <br/>
      <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="APPLY"/>
      </div>
	  </form>
    </div>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
        
    </script>
</body>
</html>