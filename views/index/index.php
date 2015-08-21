<?php // echo $this->msg; ?>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/form.css">
<script src="<?php echo URL; ?>public/js/jquery-2.1.4.js"></script>
<script src="<?php echo URL; ?>public/js/form.js"></script>


<!-- атрибут required говорит, что заполнение поля обязательно -->
<form action="<?php echo URL; ?>index/message" method="POST" id="feedback-form">
    Имя:
    <input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
    Email:
    <input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
    Cообщение:
    <textarea name="messageFF" required rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>

