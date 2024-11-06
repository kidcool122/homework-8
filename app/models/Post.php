<?php

namespace app\models;

class Post {

    public function getAllPostsByTitle($params) {
        // Placeholder for future database integration
        $allPosts = [
            [
                'id' => '1',
                'title' => 'Post 1',
                'content' => 'Content for post 1'
            ],
            [
                'id' => '2',
                'title' => 'Post 2',
                'content' => 'Content for post 2'
            ],
        ];

        // Search posts by title if the parameter is set
        if (!empty($params['title'])) {
            return array_filter($allPosts, function ($post) use ($params) {
                if (stripos($post['title'], $params['title']) !== false) {
                    return $post;
                }
                return null;
            });
        }

        return $allPosts;
    }

    public function savePost($data) {
        // Placeholder for future database integration
        // Normally here we would save the post to the database
        return [
            'title' => $data['title'],
            'content' => $data['content']
        ];
    }
}
