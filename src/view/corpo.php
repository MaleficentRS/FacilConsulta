<!DOCTYPE html>
<html>
    <head>
        <?php
            $pagina = new Controller();
            $pagina->Url();
        ?>

        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="model/css/style.css">
        <script src="controller/funcoes.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <button id="cadastro_medico" name="cadastro_medico" type="button">Cadastro de médico</button>
                <br class="clear">
            </nav>
        </header>
        <main>
            <?php
                $pagina->View('');
            ?>
        </main>
    </body>
</html>