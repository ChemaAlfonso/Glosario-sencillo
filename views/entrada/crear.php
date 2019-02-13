<section>
    <h2>Crear una nueva entrada <span class="icon-clipboard"> </span></h2>
    <form action="index.php?controller=entrada&action=crear" id="formCrearEntrada" method="POST">
        <label for="categoria">Categoria</label>
        
        <select class="categoria"  name="categoria_id">
            <?php while ($categoria = $categorias->fetch_object()) :?>
                <option value="<?=$categoria->id?>"><?=$categoria->nombre?></option>
            <?php endwhile;?>
        </select>
            
        
        <label for="palabra">Palabra</label>
        <input type="text" name="palabra" placeholder="Que palabra quieres recordar?">
        
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion" placeholder="Haz una pequeña descripcion que te aclare una consulta rapida"></textarea>
        
        <label for="enlace">Enlace</label>
        <input id="enlace" type="text" name="enlace" placeholder="http://...">
        
        <input id="botonCrear" type="submit" value="Crear entrada">
    </form>
</section>
