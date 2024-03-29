<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'This is the body texte',
                'status' => 1
            ],
            [
                'title' => 'Title tow',
                'body' => 'This is the body texte',
                'status' => 0
            ],
            [
                'title' => 'Title three',
                'body' => 'This is the body texte',
                'status' => 1
            ],
            [
                'title' => 'Title four',
                'body' => 'This is the body texte',
                'status' => 0
            ]
        ];

        return view('home', compact('blogs'));
    }
}
