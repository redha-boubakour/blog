<?php

namespace App\src\controller;

use App\config\Request;
use App\src\constraint\Validation;
use App\src\DAO\UserDAO;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\model\View;

abstract class Controller
{
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;
    protected $userDAO;
    protected $articleDAO;
    protected $commentDAO;
    protected $view;

    public function __construct()
    {
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
        $this->validation = new Validation();
        $this->userDAO = new UserDAO();
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }
}