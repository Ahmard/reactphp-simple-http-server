<?php


namespace App\Controller;


use App\Response;

class MainController
{
    public function index(): \React\Http\Message\Response
    {
        return Response::view('index.php');
    }

    public function list(): \React\Http\Message\Response
    {
        return Response::view('list.php');
    }
}