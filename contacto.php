<?php
	include("recursos-php/enviar-formulario.php");
?>
<div class="collapse" id="collapseContact">
  <div class="well">
    <form class="form-horizontal" role="form" method="post" action="index.php">

      <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Nombre</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" value="<?php echo htmlspecialchars($_POST['name']); ?>">
          <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
          <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
      </div>

      <div class="form-group">
        <label for="message" class="col-sm-4 control-label">Mensaje</label>
        <div class="col-sm-4">
          <textarea class="form-control" rows="4" name="message" placeholder="Mensaje"><?php echo htmlspecialchars($_POST['message']);?></textarea>
          <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-5 col-sm-offset-4">
          <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div><!-- "well" -->
</div><!-- "collapse" -->
