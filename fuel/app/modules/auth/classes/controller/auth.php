<?php

namespace Auth\Controller;

class Auth extends \Controller
{
    protected $mainPage = 'main';

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {
        
        return \Response::forge(\View::forge('login/index'));
        
    }

    public function post_index() 
    {
        $username = \Input::post('username', null);
        $password = \Input::post('password', null);
        
        $createUsername = \Input::post('create_username', null);
        $createPassword = \Input::post('create_password', null);
        echo $username;
        echo $password;
        echo $createUsername;
        die;
        if(!$username || !$password){
            \Session::set_flash('error', 'Usuário e senha obrigatórios');
            \Response::redirect('auth');
            exit;
        }

        if(\Auth::login($username, $password)){
            \Response::redirect($this->mainPage);
            die;
        }
        
        \Session::set_flash('error', 'Usuário/Senha inválidos');
        \Response::redirect('auth');
    }
}