<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepository\IEloquentUserRepository;

class UserController extends Controller
{
    protected $eloquentUserRepository;

    public function __construct(IEloquentUserRepository $eloquentUserRepository)
    {
        $this->eloquentUserRepository = $eloquentUserRepository;
    }

    public function index()
    {
        return UserResource::collection($this->eloquentUserRepository->listActive());
    }

    public function show($id)
    {
        return UserResource::make($this->eloquentUserRepository->show($id));
    }
}
