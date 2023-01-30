<?php
namespace app\Controller;

use app\View\MainView;

class ControllerMain{
    public function main()
    {
        $view = new MainView();
        $view->drawLinks();
    }

}

?>