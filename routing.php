<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('main'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('main', 'MainCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('rejestracja', 'RejestracjaCtrl');
Utils::addRoute('rejestracjautworz', 'RejestracjaCtrl');