<?php  include('header.php')   ?>

<div class="container" style="margin-top: 30px; text-align: center; ">


<h1 style="margin-top: 30px">Registration Form</h1>

<?php echo form_open('Admin/userRegister'); ?>
<h4 style="color: red"> <?= \Config\Services::validation()->listErrors(); ?></h4>
  <div class="form-group" style="margin-top: 30px; text-align: center; ">
    <label for="uname"><b>Username : </b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter username', 'name' => 'uname', 'value' => set_value('uname')]) ?>
</div>
<div class="form-group" style="margin-top: 30px; text-align: center; ">
    <label for="uname"><b>Email : </b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter Email', 'name' => 'email', 'value' => set_value('email')]) ?>
</div>

<div class="form-group" style="margin-top: 30px; text-align: center; ">
    <label for="uname"><b>First Name: </b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter First name', 'name' => 'fname', 'value' => set_value('fname')]) ?>
</div>
<div class="form-group" style="margin-top: 30px; text-align: center; ">
    <label for="uname"><b>Last Name: </b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter Last name', 'name' => 'lname', 'value' => set_value('lname')]) ?>
</div>

	<div class="form-group">
    <label for="psw"><b>Password: </b></label>

    <?php echo form_password(['class' => 'from-control','placeholder' => 'Enter Password', 'name' => 'pass', 'value' => set_value('pass')]); ?>
</div>
        
   
  <?php echo form_submit('mysubmit', 'Register!'); ?>




</div>




<?php   include('footer.php') ?>