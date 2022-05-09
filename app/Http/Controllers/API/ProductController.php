<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository\IEloquentProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $IEloquentPostRepository;

    public function __construct(IEloquentProductRepository $IEloquentProductRepository)
    {
        $this->IEloquentProductRepository = $IEloquentProductRepository;
    }

    public function index()
    {
        return $this->IEloquentProductRepository->listActive();
    }

    public function show($id)
    {
        return $this->IEloquentProductRepository->showActive($id);
    }
}
