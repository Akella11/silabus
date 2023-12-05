<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Створення силабуса</title>
</head>
<style>

  *{
    background: #266473;
  }

  .flex-container1{
    display: flex;
    margin: 2.5% 3%;
  }

  .flex-container5{
    display: flex;
    margin-bottom: 3%;
  }

  .flex-container8{
    font-size: 110%;
    display: flex;
    flex-direction: column;
    margin-left: 86%;
  }

  .flex-container9{
    font-size: 105%;
    display: flex;
    flex-direction: column;
    margin-left: 8%;
    margin-top: 2%;
    width: 85%;
  }

  .link1{
    font-size: 20px;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    margin-left: 60%;
    margin-right: 2%;
  }

  .link2{
    font-size: 20px;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    margin-left: 7%;
  }

  .p1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    margin-left: 11%;
    margin-right: 11%;
  }

  .p2{
    width: 200%;
    margin: 100% 10% 0.75% 1.5%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
  }

  .p3{
    width: 200%;
    margin: 0.75% 5% 3.5% 25%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 66%;
  }

  .header1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 200%;
    margin: 5% 11% 2.5% 11%
  }

  .submit{
    background-color: #DCC7BE;
    border-radius: 30px;
    color: #010100;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 150%;
    width: 36%;
    margin: 7% 32% 10%;
    cursor: pointer;
  }

  @media (min-width: 1300px) {
    * {
      font-size: 104%;
    }

    .submit {
      font-size: 150%;
      width: 25%;
      margin: 6% 7% 1% 37%;
    }
  }

  @media (min-width: 480px) and (max-width: 1024px) {
    *{
      font-size: 80%;
    }
  }

  /*<div class="flex-container4">
       <a href="silabus_watch.html" class="submit">Переглянути наявні силабуси</a>
    </div>*/

</style>

<body>
<div class="flex-container1">
  <a href="index.html" class="link1">На головну</a>
  <a href="login.html" class="link2">Вийти з акаунту</a>
</div>
<div class="flex-container2">
  <div class="flex-container5">
    <div class="flex-container8">
      <p class="p2">Наші контакти</p>
      <p class="p3">+3809947367</p>
    </div>
  </div>
</div>
</body>
</html>


