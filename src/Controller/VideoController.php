<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class VideoController
 * @package App\Controller
 * @Route("/beheer", name="admin_")
 */
class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index()
    {
        return $this->render('admin/video/index.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }
}
