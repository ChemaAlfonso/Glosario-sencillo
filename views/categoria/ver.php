<?php while ($letra = $todas->fetch_object()): ?>
    <li id="<?= $letra->id; ?>"><a href="<?= "index.php?controller=categoria&action=index&letra=" . $letra->nombre; ?>"><?= $letra->nombre; ?></a></li>
<?php endwhile;?>


