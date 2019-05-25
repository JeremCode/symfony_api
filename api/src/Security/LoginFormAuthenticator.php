<?php
// src/Security/LoginFormAuthenticator.php
namespace App\Security;

use Symfony\Component\Security\Core\User\InMemoryUserProvider;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class LoginFormAuthenticator /*extends  AbstractFormLoginAuthenticator*/
{
    private $userProvider;

    // change the 'InMemoryUserProvider' type-hint in the constructor if
    // you are injecting a different type of user provider
    public function __construct(/*InMemoryUserProvider */$userProvider /* ... */)
    {
        $this->userProvider = $userProvider;
        // ...
    }
}

 ?>
