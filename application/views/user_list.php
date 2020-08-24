<!Doctype html>
<html>

<head>
<title>User List</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>"></link>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'; ?>">

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




<div class="container" style="padding: 20px;">


<div class="row">
  <div class="col-md-12">
    <?php
      $success = $this->session->userdata('success');
      if($success !=""){
     ?>
        <div class="alert alert-success">
            <?php echo $success;?>
        </div>
      <?php }?>

      <?php
      $failure = $this->session->userdata('failure');
      if($failure !=""){
     ?>
        <div class="alert alert-danger">
            <?php echo $failure;?>
        </div>
      <?php }?>
  </div>

</div>


<h2 style="color: orange;">All User Information</h2>
<a id = "create" class = "btn btn-primary" href="<?php echo base_url().'index.php/Users/create';?>">Create New</a>
<hr style="background: purple;">



<div class="row">

  <div class="col-md-12">

    <table class="table">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
      </thead>
  <tbody>

  <?php if(!empty($users)){ foreach($users as $user) { ?>
    <tr>
      <th scope="row"><?php echo $user['id']; ?></th>
      <td><?php echo $user['name']; ?></td>
      <td><?php echo $user['email']; ?></td>
      <td><?php echo $user['created_at']; ?></td>
      <td> <a class="btn btn-secondary" href="<?php echo base_url().'index.php/Users/update/'.$user['id'];?>"> Edit</a> <a class="btn btn-warning" href="<?php echo base_url().'index.php/Users/delete/'.$user['id'];?>"> Delete</a></td>
    </tr>

  <?php }} else{ ?>

    <tr>
      
      <td  style = "text-align: center;"colspan="5">No Record Available</td>
      
    </tr>

  <?php }?>
   
  </tbody>
</table>

</div>

</div>
</div>







</body>

</html>


