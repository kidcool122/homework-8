<?php

namespace app\models;

class Post {
    public function getAllPostsByTitle($params) {
        $allPosts = [
            ['id' => '1', 'title' => 'First Post', 'content' => 'This is the first post content.'],
            ['id' => '2', 'title' => 'Second Post', 'content' => 'This is the second post content.'],
        ];

        if (!empty($params['title'])) {
            return array_filter($allPosts, function ($post) use ($params) {
                return stripos($post['title'], $params['title']) !== false;
            });
        }

        return $allPosts;
    }

    public function savePost($data) {
        return [
            'id' => uniqid(),
            'title' => $data['title'],
            'content' => $data['content'],
        ];
    }
}
