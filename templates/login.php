

<?php if($vars['errors']):?>
    <?= $vars['errors']; ?>
<?php endif; ?>
<form method="post">
    <input name="username">
    <input name="password" type="password">
    <input type="checkbox" name="rememberme">
    <input type="submit">
</form>

<form method="get" action="http://site7/templates/reg.php">
    <button id='button_reg'>Зарегистрироваться </button>
</form>

