<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
    public function getPosts()
    {
        $postModel = new Post();
        #$posts = $postModel->getAllPosts(); // Assuming you have a method in Post model to fetch posts
        $template = $this->twig->load('post/posts.twig');
        $homepageData = [
            'posts' => $userModel ->getAllPosts(),
        ];
        echo $template-> render($homePageData);
        #return $template->render(['posts' => $posts]);
    }
}
