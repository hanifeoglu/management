<?php

use Illuminate\Http\Request;
class Auth extends Controller
{
    public function index()
    {
        //bir sey olursa buraya gonder herkesi :)
        header("Location: /home");
    }

    public function postSignUp()
    {
        
        if (isset($_POST['firstname'])) {

            echo 'Data is coming here Data:' . ' '. $_POST['firstname'];

        }else{

            echo "Birşey oldu";
        }
    }

    public function getSignOut()
    {
        $this->logout();
        header("Location: /home");
    }

    public function user()
    {
        return User::find($_SESSION['user']);

    }

    public function check()
    {

        return isset($_SESSION['user']);

    }

    public function signin()
    {

        $this->view('auth/signin', []);
    }

    public function signup()
    {

        $this->view('auth/signup', []);
    }

    public function postSignin()
    {

        $auth = $this->attempt(
            $email      = $_POST['email'],
            $password   = $_POST['password']
        );

        if (!$auth) {

            header("Location: /auth/signin");
        }else{

            header("Location: /");
        }

    }


    public function attempt($email, $password)
    {

         $user = User::where('email', $email)->first();


        if (!$user) {

            return false;
        }

        if (password_verify($password, $user->password)) {

            $_SESSION['firstname'] = $user->firstname;
            $_SESSION['user'] = $user->id;

            return true;
        }

        return false;

    }

    public function logout()
    {
        unset($_SESSION['user']);
    }



}