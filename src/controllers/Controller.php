<?php

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        require "src\\views\\$view.php";
    }
}
