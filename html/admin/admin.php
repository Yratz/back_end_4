<html lang="en">
<head>
    <title>Hello page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <style>
    body {
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
    width:min-content;
    margin-left: auto;
    margin-right: auto;
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
    input {
        background-color:white;
        color: rgb(41, 41, 41);
        padding: 12px;
        margin: 12px;
        width: 256px;
        border: rgb(161, 161, 161) 1px solid;
        border-radius: 10px;

    }
</style>
</head>
<body>
<h1>Здесь вы можете изменить данные о вашем портфолио</h1>
<h2>Добавить достижение</h2>
<form class="block" action="add.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="username" class='input' placeholder='Достижение' type='text' name="name" required>
    </div>
    <div class="flex-row">
      <input id="info" class='input' placeholder='Дополнительная информация' type='text' name="info" required>
    </div>
    <input class='submit' type='submit' value='Добавить'>
  </form >
  <h2>Удалить достижение</h2>
  <form class="block" action="delete.php" method="get">
    <div class="flex-row logo">
    </div>
    <div class="flex-row">
      <input id="username" class='input' placeholder='Id достижения' type='text' name="id" required>
    </div>
    <input class='submit' type='submit' value='Удалить'>
  </form>
</body>
</html>