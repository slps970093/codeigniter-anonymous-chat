<?php
/**
 * WebSocket Server
 * Class WebSocketController
 *
 * @another 小周
 */

class ChatController extends  CI_Controller
{

    public function __construct() {
        if (!is_cli()) {
            show_404();
            die();
        }
        parent::__construct();
    }

    public function start() {


    }
}