<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    public function index()
    {
        // Load the "about" view
        return view('about');
    }
}
