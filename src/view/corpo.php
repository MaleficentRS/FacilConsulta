<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pagina_titulo; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="model/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <button name="cadastro_medico" type="button">Cadastro de médico</button>
                <br class="clear">
            </nav>
        </header>
        <main>
            <?php
                $pagina = new Controller();
                $pagina->Url();
                $pagina->View('');
            ?>
        </main>
    </body>
</html>