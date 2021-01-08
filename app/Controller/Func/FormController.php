<?php


namespace App\Controller\Func;


use App\Response;
use Psr\Http\Message\ServerRequestInterface;

class FormController
{
    public function show(): \React\Http\Message\Response
    {
        return Response::view('func/form/index');
    }

    public function submit(ServerRequestInterface $request): \React\Http\Message\Response
    {
        return Response::view('func/form/submitted', [
            'formData' => $request->getParsedBody(),
        ]);
    }

    public function file(): \React\Http\Message\Response
    {
        return Response::view('func/form/file');
    }

    public function upload(ServerRequestInterface $request): \React\Http\Message\Response
    {
        return Response::view('func/form/uploaded', [
            'uploaded' => $request->getUploadedFiles(),
            'submitted' => $request->getParsedBody(),
        ]);
    }
}