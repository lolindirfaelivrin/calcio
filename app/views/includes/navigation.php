<nav>
  <?php if(isset($_SESSION['user_name'])) : ?>
      <h3>Benvenuto, <?php echo $_SESSION['user_name']; ?></h3>
  <?php else : ?>
      <h3><?php echo SITENAME; ?></h3>
  <?php endif; ?>
    <ul>
        <li><a href="<?php echo URLROOT; ?>">Home</a></li>
        <li><a href="<?php echo URLROOT; ?>/pagina/about">About</a></li>
        <li><a href="<?php echo URLROOT; ?>/pagina/contatti">Contatti</a></li>
        <li><a href="<?php echo URLROOT; ?>/pagina/anagrafica">Anagrafica</a></li>
        <li>
          <?php if(isset($_SESSION['user_id'])) : ?>
          <a href="<?php echo URLROOT; ?>/users/profilo">Profilo</a>
          <a href="<?php echo URLROOT; ?>/users/logout" class="btn-login">Esci</a>
          <?php else : ?>
          <a href="<?php echo URLROOT; ?>/users/login" class="btn-login">Accedi</a>
        <?php endif; ?>
        </li>
    </ul>
</nav>
