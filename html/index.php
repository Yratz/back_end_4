<html lang="en">
<head>
    <title>Заглавная страница</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <style>
    body {
        padding: 0;
        margin: 0;
        color: rgb(41, 41, 41);
        background-image: url("Fone.png")
    }
    h1 {
        margin-top: 64px;
        text-align: center;
        font-family: Helvetica;
        font-style: inherit;
    }
    h2 {
        text-align: center;
        font-family: Helvetica;
    }
    .block {
    background-color: white;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 64px;
    border-radius: 10px; 
    padding: 32px; 
    box-shadow: 6px 6px 15px rgb(142, 142, 142);
    font-family: Helvetica;
    font-style: normal;
    }
    .but_block {
    background-color: white;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 64px;
    border-radius: 10px; 
    padding: 32px; 
    box-shadow: 6px 6px 15px rgb(142, 142, 142);
    font-family: Helvetica;
    font-style: normal;
    font-size: larger;
    transition: 300ms;
    }
    .but_block:hover {
        background-color: rgb(161, 161, 161);
        transition: 300ms;
    }
    tr {
        margin: 0;
    }
    td {
        margin: 0;
        /* border: rgb(41, 41, 41) 1px solid; */
        padding-left: 24px;
        padding-right: 24px;
        padding-top: 12px;
        padding-bottom: 12px;
    }
</style>
</head>
<body>
<h1>Портфолио</h1>
<h2>Таблица достижений</h2>
<table class="block">
    <tr>
        <th>Id</th>
        <th>Название</th>
        <th>Дополнительная информация</th>
    </tr>
    <?php
    $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
    $result = $mysqli->query("SELECT * FROM achivments");
    foreach ($result as $row) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['info']}</td></tr>";
    }
    ?>
</table>

</body>
</html>