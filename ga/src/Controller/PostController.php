<?php

namespace App\Controller;

use App\Entity\Level;
use App\Entity\Post;
use App\Repository\LevelRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/articles', name: 'app_post')]
    public function index(PostRepository $postRepository, LevelRepository $levelRepository): Response
    {
        $posts = $postRepository->findLatestPosts();
        $levels = $levelRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'levels' => $levels
        ]);
    }

    #[Route("/post/{id}", name: "post_detail")]
    public function details(Post $post): Response
    {
        return $this->render('post/details.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('posts/level/{level}', name: "app_level")]
    Public function filter(Level $level, PostRepository $repo, LevelRepository $levelRepository)
    {
        $posts = $repo->findByLevel($level);
        $levels = $levelRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'levels' => $levels
        ]);
    }
}
