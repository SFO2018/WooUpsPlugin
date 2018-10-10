<?php

namespace fptUps\controller;

class adminController
{

    function _display() {
        $smarty = fptUpsSmarty::getSmarty();
        $smarty->assign('data', "this is test");
        echo $smarty->fetch("admin/test.tpl");
    }

}
