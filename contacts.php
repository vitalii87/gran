<!DOCTYPE html>
<?php
include (__DIR__.'/include/header.php');
?>

<div class="down">
   <div class="content"><hr>
    <div class="text_cont"><img src="/img/pic3b.png" alt="">По любым вопросам обращайтесь по телефону или пишите на почту<img src="/img/pic3b.png" alt=""> </div><hr>
    <div class="tel2"><img src="/img/phone3.png"> 098 089 1000</div><div class="clear"></div>
    <div class="text_2"><img src="/img/email3.png">GranitKoros@gmail.com</div>
    <div class="clear"></div>

       <div class="forma">
        <!--Подкл пхп-->
        <form action="/submit.php" method="post">
         <!--<form name="test" method="post" action="input1.php">-->
         <p><b>Ваше имя:</b><br>
         <input name="name" size="40">
         <p><b>Ваш e-mail или номер телефона:</b><br>
         <input name="email" size="40">
         </p>
         <p>Комментарий<Br>
         <textarea name="comment" cols="50" rows="7"></textarea></p>
         <input type="file" name="f">
         <p><input type="submit" value="Отправить">
         <input type="reset" value="Очистить"></p>
         </form>
       </div>
  </div>
</div>

</body>
</html>