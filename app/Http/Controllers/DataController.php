<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open()
    {
        return 'This data is open for all users.';
    }
    public function closed()
    {
        return 'This data is for authenticated users only.';
    }
}
