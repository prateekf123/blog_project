<?php  include('header.php')?>

<?php print_r($articles) ?>


<div class="container" style="margin-top: 30px; text-align: center; ">


<h1 style="margin-top: 30px">Add Article</h1>
<h4 style="color: red"> <?= \Config\Services::validation()->listErrors(); ?></h4>


<?php echo form_open('Admin/submit_article'); ?>
<?php   echo form_hidden('user_id',$_SESSION['id']); ?>
  <div class="form-group" style="margin-top: 30px; text-align: center; ">
    <label for="t_article"><b>Article title : </b></label>
    <?php echo form_input(['class'=> 'from-control', 'placeholder' => 'Enter article title', 'name' => 't_article', 'value' => set_value('t_article')]) ?>
</div>

<label for="b_article"><b>Article body : </b></label>
<div class="form-group" style="margin-top: 30px; text-align: center; ">

    
    <?php echo form_textarea(['class'=> 'from-control', 'placeholder' => 'Enter article body', 'name' => 'b_article', 'value' => set_value('b_article')]) ?>
</div>


   
  <?php echo form_submit('mysubmit', 'Register!'); ?>




</div>





<?php  include('footer.php')?>