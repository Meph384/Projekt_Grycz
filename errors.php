<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="color: cyan; padding-left: 10px; padding-top: 5px"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>