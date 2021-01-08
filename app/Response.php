<?php


namespace App;

use React\Http\Message\Response as ReactResponse;
use App\Core\View;

class Response
{
    public static function view(string $viewPath, array $viewData = []): ReactResponse
    {
        return self::html((string)View::load($viewPath, $viewData));
    }

    public static function html(string $html): ReactResponse
    {
        return new ReactResponse(200, [
            'content-type' => 'text/html'
        ], $html);
    }
}