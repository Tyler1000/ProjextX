<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College Pro Tracker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Include Header-->
    <?php include 'header.html'; ?>

   <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>College Tracker</legend>

<div class="form-group"> 
  <label class="col-md-4 control-label">Suggest Schools</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
    <select name="suggestSchools" class="form-control selectpicker" >
      <option value="" >Please select from the list of colleges</option>
      <option>University of Alabama</option>
      <option>University of Illinois – Chicago </option>
      <option>Santa Monica College</option>
      <option>University of Southern California</option>
      <option>University of Illinois – Urbana-Champaign</option>
      <option>Purdue University</option>
      <option>New York University</option>
      <option>Northeastern University</option>
      <option>University of Michigan</option>
      <option>Arizona State University</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option>other</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">If other</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="otherSuggestedSchool" placeholder="Other Suggested Schools" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Reach Schools</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
    <select name="reachSchools " class="form-control selectpicker" >
      <option value="" >Please select from the list of colleges</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option>Other</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">If other</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="otherReachSchool" placeholder="Other Reach Schools" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Target Schools</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
    <select name="targetSchools " class="form-control selectpicker" >
      <option value="" >Please select from the list of colleges</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">If other</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="otherTargetSchool" placeholder="Other Target Schools" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Safety Schools</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
    <select name="safetySchools" class="form-control selectpicker" >
      <option value="" >Please select from the list of colleges</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option>Other</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">If other</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="otherSafetySchool" placeholder="Other Safety Schools" class="form-control"  type="text">
    </div>
  </div>
</div>

    <!-- Include Footer -->
    <?php include 'footer.html'; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>