<?php include "inc/header.php"; ?>

<div class="para">
    <?php

// class Authentication{
//     function authenticate($username, $password, $externalService){
//         if('google' == $externalService){
//             $ga = new GoogleAuthentication();
//             $ag->authenticate();
//         }elseif('github' == $externalService){
//             $git = new GitHubAuthentication();
//             $ag->authenticate();
//         }
//     }
// }



interface AuthenticationProviderInterface
{
    function authenticate();
}

class GitHubAuthentication implements AuthenticationProviderInterface
{
    function authenticate()
    {
        // GitHub-specific authentication logic
    }
}

class Authentication
{
    private $authServiceProvider;

    function __construct(AuthenticationProviderInterface $authServiceProvider)
    {
        $this->authServiceProvider = $authServiceProvider;
    }

    function authenticate()
    {
        $this->authServiceProvider->authenticate();
    }
}

$git = new GitHubAuthentication();
$auth = new Authentication($git);
$auth->authenticate();



   
    ?>
</div>
<?php include "inc/footer.php"; ?>