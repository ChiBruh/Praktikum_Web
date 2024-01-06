<?php

namespace App\Http\Controllers;

use App\Services\ApiServices; 
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $apiService;

    public function __construct(ApiServices $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getRandomDogImage()
    {
        $data = $this->apiService->getRandomDogImage();
        $imageUrl = $data->message;
        return view('view-name', compact('data'));
    }
}
