<?php

namespace App\Repositories\UserRepository;

interface IEloquentUserRepository
{
    public function listActive();

    public function show($id);
}
