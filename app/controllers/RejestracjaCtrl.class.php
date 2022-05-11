<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RejestracjaCtrl {
    
    public function action_rejestracja() {
		        
        
        App::getSmarty()->display("rejestracja.tpl");
        
    }
    
    public function action_rejestracjautworz() {
		        
        
        App::getSmarty()->display("rejestracja.tpl");
        
    }
}
