<!Doctype html>
<html>

<head>
<title>Created User</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>"></link>
<link rel="stylesheet" type="text/css" href="main.css"></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- navbar start-->
<div class="navbar navbar-dark bg-dark">
<div class ="container">
<a href="<?php echo base_url().'index.php/Users/index'; ?>" class="navbar-brand">CRUD APPLICATION</a>

</div>

</div> 

<!-- navbar end-->




<!-- form start-->
<div class="container" style="padding: 20px;">
<h2>Create User Information</h2>
<hr>
<form method="POST" name="createUser" action="<?php echo base_url().'index.php/Users/create'; ?>">
<!-- row start-->
<div class="row" id="createForm">


<div class="col-md-8">
<div class="form-group">

<label>Name</label>
<input type="text" name='name' value="<?php echo set_value('name');?>" class="form-control">
<?php echo form_error('name');?>
</div>

<div class="form-group">

<label>Email</label>
<input type="text" name='email' value="<?php echo set_value('email') ?>" class="form-control">
<?php echo form_error('email');?>

</div>

<div class="form-group">
<button class ="btn btn-success" >Submit Information</button>

<a class ="btn btn-danger" href="<?php echo base_url().'index.php/Users/index';?>">Cancel</a>
</div>

</div>


</div>
<!-- row end-->
</form>
</div>

<!-- form end-->



</body>

</html>