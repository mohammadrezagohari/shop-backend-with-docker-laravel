<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository\IEloquentUserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $eloquentUserRepository;

    public function __construct(IEloquentUserRepository $eloquentUserRepository)
    {
        $this->eloquentUserRepository = $eloquentUserRepository;
    }

    public function index()
    {
        $user = $this->eloquentUserRepository->listActive();

    }

    public function show($id)
    {
        $user = $this->eloquentUserRepository->show($id);
        dd($user);
    }
}
