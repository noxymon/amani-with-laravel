<?php

namespace App\Controller\Login;

use App\Controller\Login\Model\LoginRequest;
use App\Service\Login\LoginValidator;
use App\Service\Login\Model\LoginInput;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    private LoginValidator $loginValidator;

    public function __construct(LoginValidator $loginValidator)
    {
        $this->loginValidator = $loginValidator;
    }

    #[Route('/login', name: 'login_index', methods: ['GET'])]
    public function index() : Response
    {
        return $this->render('Pages/Login/index.html.twig');
    }

    #[Route('/login/do', methods: ['POST'])]
    public function login(LoginRequest $request): Response
    {
        $loginInput = $this->mapRequestToInput($request);
        $loginOutput = $this->loginValidator->login($loginInput);

        if($loginOutput->isValid()){
            return new Response('success');
        }
        return new Response('Oops !', 400);
    }

    /**
     * @param LoginRequest $request
     * @return LoginInput
     */
    private function mapRequestToInput(LoginRequest $request): LoginInput
    {
        $loginInput = new LoginInput();
        $loginInput->setUsername($request->getUsername());
        $loginInput->setPassword($request->getPassword());
        return $loginInput;
    }
}