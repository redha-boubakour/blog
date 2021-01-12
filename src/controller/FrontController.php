<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{
    public function home()
    {
        $pagination = $this->pagination->paginate(5, $this->get->get('page'), $this->articleDAO->total());
        $articles = $this->articleDAO->getArticles($pagination->getLimit(), $this->pagination->getStart());
        return $this->view->render('home', [
            'articles' => $articles,
            'pagination' => $pagination
        ]);
    }

    private function checkArticleExist($articleId)
    {
        $articleExist = $this->articleDAO->checkArticle($articleId);
        if (!$articleExist) {
            $this->session->set('not_article', 'Article innéxistant.');
            header('Location: ../public/index.php');
        } else {
            return true;
        }
    }

    public function article($articleId)
    {
        if ($this->checkArticleExist($articleId)) {
            $article = $this->articleDAO->getArticle($articleId);
            $pagination = $this->pagination->paginate(5, $this->get->get('page'), $this->commentDAO->total($articleId));
            $comments = $this->commentDAO->getCommentsFromArticle($articleId, $pagination->getLimit(), $pagination->getStart());
            return $this->view->render('single', [
                'article' => $article,
                'comments' => $comments,
                'pagination' => $pagination
            ]);
        }
    }

    public function addComment(Parameter $post, $articleId)
    {
        if ($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Comment');
            if (!$errors) {
                $this->commentDAO->addComment($post, $articleId, $this->session->get('id'));
                $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
                header('Location: ../public/index.php?route=article&articleId=' . $articleId);
            } else {
                header('Location: ../public/index.php?route=article&articleId=' . $articleId);
            }
            $article = $this->articleDAO->getArticle($articleId);
            $pagination = $this->pagination->paginate(5, $this->get->get('page'), $this->commentDAO->total($articleId));
            $comments = $this->commentDAO->getCommentsFromArticle($articleId, $pagination->getLimit(), $pagination->getStart());
            return $this->view->render('single', [
                'article' => $article,
                'comments' => $comments,
                'post' => $post,
                'errors' => $errors
            ]);
        }
    }

    public function flagComment($commentId) 
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment','Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée');
                header('Location: ../public/index.php'); 
            }  
            return $this->view->render('register', [
                'post' => $post,
                'errors' => $errors
            ]); 
        }
        return $this->view->render('register');
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Bienvenue');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('role', $result['result']['name']);
                $this->session->set('pseudo', $post->get('pseudo'));
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render('login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('login');
    }

    public function search(Parameter $post)
    {
        $value = $post->get('search');
        if (!$value) {
            $this->session->set('error_search', 'Veuillez renseigner des informations dans la zone de recherche');
            header('Location: ../public/index.php');
        }
        $isArticle = $post->get('articles');
        $articles = [];
        $articles = $this->articleDAO->search($value);
        return $this->view->render('search', [
            'value' => $value,
            'articles' => $articles
        ]);
    }
}