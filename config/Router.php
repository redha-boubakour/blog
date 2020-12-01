<?php

namespace App\config;
use App\src\controller\FrontController;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try {
            if(isset($_GET['route']))
            {
                if ($_GET['route'] === 'article'){
                    $this->frontController->article($_GET['articleId']);
                }
                else {
                    echo 'page inconnue';
                }
            }
            else {
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}