<?php

namespace App\src\DAO;

use App\src\model\Comment;
use App\config\Parameter;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        $comment->setFlag($row['flag']);
        $comment->setPseudo($row['pseudo']);
        return $comment;
    }

    public function total($articleId)
    {
        $sql = 'SELECT COUNT(*) 
                FROM comment 
                WHERE article_id = ?';
        return $this->createQuery($sql, [$articleId])->fetchColumn();
    }

    public function getCommentsFromArticle($articleId, $limit = null, $start = null)
    {
        $sql = 'SELECT comment.id, comment.content, comment.createdAt, comment.flag, user.pseudo
                FROM comment INNER JOIN user
                ON comment.user_id = user.id
                WHERE article_id = ?
                ORDER BY createdAt DESC';
        if($limit) {
            $sql .= ' LIMIT ' . $limit . ' OFFSET ' . $start;
        }
        $result = $this->createQuery($sql, [
            $articleId
        ]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }

    public function addComment(Parameter $post, $articleId, $userId)
    {
        $sql = 'INSERT INTO comment (content, createdAt, flag, article_id, user_id) 
                VALUES (?, NOW(), ?, ?, ?)';
        $this->createQuery($sql, [
            $post->get('content'),
            0,
            $articleId,
            $userId
        ]);
    }

    public function flagComment($commentId)
    {
        $sql = 'UPDATE comment 
                SET flag = ? 
                WHERE id = ?';
        $this->createQuery($sql, [
            1, 
            $commentId
        ]);
    }
    public function unflagComment($commentId)
    {
        $sql = 'UPDATE comment 
                SET flag = ? 
                WHERE id = ?';
        $this->createQuery($sql, [
            0, 
            $commentId
        ]);
    }
    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment 
                WHERE id = ?';
        $this->createQuery($sql, [
            $commentId
        ]);
    }
    public function getFlagComments()
    {
        $sql = 'SELECT comment.id, comment.content, comment.createdAt, comment.flag, user.pseudo
                FROM comment INNER JOIN user
                ON comment.user_id = user.id
                WHERE comment.flag = ? 
                ORDER BY comment.createdAt DESC';
        $result = $this->createQuery($sql, [
            1
        ]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
}