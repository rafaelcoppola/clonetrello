<?php

use Fuel\Core\Controller;

class Controller_Login extends Controller
{
    public function action_index()
    {
		return Response::forge(View::forge('login/index'));

    }
}