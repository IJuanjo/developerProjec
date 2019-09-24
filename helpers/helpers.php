
<?php
Class helpers{

    public  static function borrarsession($namesession){
        if(isset($_SESSION[$namesession])){
            unset($_SESSION[$namesession]);
        }
    }
}





