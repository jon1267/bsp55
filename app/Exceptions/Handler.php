<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // добавил для обработки 404
        if($this->isHttpException($exception)) {
            $statusCode = $exception->getStatusCode();
            switch($statusCode) {
                case '404' :
                    $obj = new \App\Http\Controllers\SiteController(
                        new \App\Repositories\FooterRepo(new \App\Footer),
                        new \App\Repositories\AddrRepo(new \App\Address)
                    );
                    $nav = $obj->getNavigation();
                    $content = view('site.404_content')->render();
                    $foo = $obj->getFooter();
                    return response()->view('site.404',
                        ['navigation' => $nav, 'content' => $content ,'footer' => $foo]);
                    break;
            }
        }

        return parent::render($request, $exception);
    }
}
