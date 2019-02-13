<?php while ($entradas = $todas->fetch_object()) :?>
    <div id="articulo">
        <div id="cabeceraEntrada">
            <p><strong><?=$entradas->palabra;?></strong></p>
        </div>

        <div  id="cuerpoEntrada">
            <p><?=$entradas->descripcion;?></p>
            <a href="<?=$entradas->enlace;?>"><span class="icon-globe"> </span>Saber mas</a> - 
            <a href="index.php?controller=entrada&action=delete&id=<?=$entradas->id?>"><span class="icon-times-circle"> </span>Eliminar entrada</a>
        </div>
    </div>
    
<?php endwhile;?>