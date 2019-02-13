<!DOCTYPE html>

<html>
    <head>
        <title>Glosario de terminos</title>
        <meta charset="UTF-8">
        <meta name="lang" content="es">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles.css">
        <link rel="stylesheet" href="assets/styles2.css">
        <?php require_once 'controllers/letraController.php';?>
    </head>
    <body>
        <header>
            <nav>
                <h1><span class="icon-world"> </span>Glosario de recursos web</h1>
                <ul>
                    <li><a href="<?= "index.php?controller=entrada&action=ver&letra=A"; ?>"><span class="icon-home"> </span>PAGINA PRINCIPAL</a></li>
                    <li><a href="<?= "index.php?controller=entrada&action=crear"; ?>"><span class="icon-lightbulb-o"> </span>CREAR ENTRADAS</a></li>
                </ul>
            </nav>  
        </header>
        
        <section id="cajaPrincipal">
            <article>
                <h2>Tu glosario de recursos web</h2>
                <p>
                    Bienvenido a tu glosario de recursos web, tu sitio personal donde podras almacenar lo que necesites para hacer consultas rapidas 
                    y agrupar en un solo lugar todo lo que necesitas ir recordando y asi poder consultarlo 
                    rapidamente
                </p>
                <ul>
                    <?php for ($i = 0; $i < count($letras); $i++): ?>
                        <li id="<?= $letras[$i]; ?>"><a href="<?= "index.php?controller=entrada&action=ver&letra=" . $letras[$i]; ?>"><?= $letras[$i]; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </article>
            
            <article  id="articulos">
                
                <?php if (isset($_GET['letra'])): ?>
                <h2 id="solitaria"><?=$_GET['letra']?></h2>
                <?php endif; ?>
