<?php

class Home extends Controller
{
    public $user;

    public function index($name = '')
    {
        $user = $this->model('user');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email,
        ]);
    }

    public function users()
    {
        $userlist = User::userList();
        $this->view('home/test', ['users' => $userlist]);
    }


    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }



}


