<?php
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>Registro</title>
    <style>
        body {
            background-color: #303030;
        }

        #myTable {
            margin-top: 50px;
        }

        /*  
        #tableContainer {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }
        table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        */

        /* Botões */
        #btnedit {
            background-color: #FFF;
            color: #FFBF35;
            border: 2px solid #FFBF35;
        }

        #btnedit2 {
            background-color: #FFF;
            color: #FE3942;
            border: 2px solid #FE3942;
        }

        /* Botão Voltar */
        #btnBack {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #btnBack:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container" >
        <!-- Botão para voltar à tela de cadastro -->
        <a href="add.php" class="btn" id="btnBack">Adcionar</a>

        <div id="tableContainer">
            <h3>users cadastrados</h3>
            <table class="table table-striped" style=" margin-top: 40px; ">
                <thead>
                    <tr>
                        <th scope="col">id usuer</th>
                        <th scope="col">Name user</th>
                        <th scope="col">email</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</body>

</html>