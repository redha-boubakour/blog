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
    private $request;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
        $this->request = new Request();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try {
            if(isset($route))
            {
                if ($route === 'article'){
                    $this->frontController->article($this->request->getGet()->get('articleId'));
                } 
                elseif ($route === 'addArticle') {
                    $this->backController->addArticle($this->request->getPost());
                }
                else {
                    $this->errorController->errorNotFound();
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