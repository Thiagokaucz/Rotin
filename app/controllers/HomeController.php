<?php
require_once('config/config.php');

class HomeController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/home.php');
        require_once('app/views/footer.php');
    }
}
?>
