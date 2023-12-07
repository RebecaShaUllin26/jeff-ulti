<!DOCTYPE html>
<html>
    <head>
        <title>Automovel</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/funcoes.js"></script>
        <script src="js/style.css"></script>

    </head>
    <body style="background-color: (244,164,96);">
        <div class="form">
            <form id="Filtro">
                <label for="marca">Procurar Marca:</label>
                <input type="text" id="marca" name="marca"><br><br>
                <label for="nome">Procurar Nome:</label>
                <input type="text" id="nome" name="nome"><br><br>
                <input type="submit" value="Filtrar">
            </form>
        </diV>
        <table border="1">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Carro</th>
                    <th scope="col">Camber Dianteiro Mínimo</th>
                    <th scope="col">Camber Dianteiro Máximo</th>
                    <th scope="col">Caster Dianteiro Mínimo</th>
                    <th scope="col">Caster Dianteiro Máximo</th>
                    <th scope="col">Convergência Dianteira Mínimo</th>
                    <th scope="col">Convergência Dianteira Máximo</th>
                    <th scope="col">Camber Traseiro Mínimo</th>
                    <th scope="col">Camber Traseiro Máximo</th>
                    <th scope="col">Convergência Dianteira Mínimo</th>
                    <th scope="col">Convergência Dianteira Máximo</th>              
                </tr>
            </thead>
            <tbody id="TableData">
            </tbody>
        </table>
    </body>
</html>