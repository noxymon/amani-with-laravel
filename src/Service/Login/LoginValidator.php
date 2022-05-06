<?php

namespace App\Service\Login;

use App\Entity\MasterLogin;
use App\Repository\MasterLoginRepository;
use App\Service\InvalidLogin;
use App\Service\Login\Model\LoginInput;
use App\Service\Login\Model\LoginOutput;

class LoginValidator
{
    private MasterLoginRepository $masterLoginRepository;

    /**
     * @param MasterLoginRepository $masterLoginRepository
     */
    public function __construct(MasterLoginRepository $masterLoginRepository)
    {
        $this->masterLoginRepository = $masterLoginRepository;
    }

    public function login(LoginInput $loginInput)
    {
        $existingLogin = $this->masterLoginRepository->findOneBy(
            array(
                'username'=>$loginInput->getUsername(),
                'pwd'=>$loginInput->getPassword()
            )
        );
        if($existingLogin != null){
            return new LoginOutput();
        }
        throw new InvalidLogin('Username and password not match !');
    }
}