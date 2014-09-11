<?php
if (isset($_POST['data'])) {
    file_put_contents($_SERVER['SCRIPT_FILENAME'], htmlspecialchars($_POST['data'], ENT_QUOTES, 'UTF-8'), FILE_APPEND);
    header('Location: ' . $_SERVER['PHP_SELF']);
}
?>
<form method="post" action="">
    <input name="data" type="text">
    <input type="submit">
</form>
