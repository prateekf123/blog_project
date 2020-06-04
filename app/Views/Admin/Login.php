<?php  include('header.php')   ?>

<div class="container" style="margin-top: 30px; text-align: center; ">

<h1 style="margin-top: 30px">LOGIN</h1>
<h4 style="color: red"> <?= \Config\Services::validation()->listErrors(); ?></h4>
<?php  $session= session() ?>
<?php echo form_open('Admin/index'); ?>

  
      <h2 style="color: red" ><?=  $session->getFlashdata('login_error'); ?></h2>
      
   

<!-- 
 // <form method="post" action ="<?= base_url()?>/framework-4.0.3/public/index.php/Admin/index"> -->

  <div class="form-group" style="margin-top: 20px; text-align: center; ">
    <label for="uname"><b>Username</b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter Email', 'name' => 'uname', 'value' => set_value('uname')]) ?>
</div>

	<div class="form-group">
    <label for="psw"><b>Password</b></label>

    <?php echo form_password(['class' => 'from-control','placeholder' => 'Enter Password', 'name' => 'pass', 'value' => set_value('pass')]); ?>
</div>
        
    
   
    <div class="checkbox">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <?php echo form_submit('mysubmit', 'Submit Post!'); ?>


 </form>

</div>


<?php   include('footer.php') ?>