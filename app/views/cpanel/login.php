<form autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
    <?php
        if(isset($msg)){
            echo'<span style="color:blue;font-weight:bold;">'.$msg.'</span>';
        }
    ?>
    <table>
        <tr>
            <td>Ten dang nhap</td>
            <td><input type="text" required="1" name="username"></td>
        </tr>
        <tr>
            <td>Mat khau</td>
            <td><input type="password" required="1" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form>