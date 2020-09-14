<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\CustomException;

class ErrorController extends Controller
{
    
    public function index(){
        throw new CustomException('My exception without stacktrace!');
    }
}
