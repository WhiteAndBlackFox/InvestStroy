<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/registration', name: 'web_')]
class RegistrationController extends AbstractController
{
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return $this->render('registration/index.html.twig', [
            'form' => $this->createForm(UsersType::class, (new User)),
        ]);
    }
}
