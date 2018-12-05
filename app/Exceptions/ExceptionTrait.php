<?php
namespace App\Exceptions;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    public function apiException( $request, $e )
    {
        if ( $this->isModel( $e ) ) {
            return $this->ModelResponse( $e );
        }

        if (  $this->isHttp( $e ) ) {
            return $this->HttpResponse( $e );
        }

    }

    public function isModel( $e ) {
        return $e instanceof ModelNotFoundException;
    }

    public function isHttp( $e ) {
        return $e instanceof NotFoundHttpException;
    }

    protected function HttpResponse( $e ) {
        return response()->json([
            "errors" => "Invalid route"
        ], Response::HTTP_NOT_FOUND);
    }

    protected function ModelResponse( $e ) {
        return response()->json([
            "errors" => "Model not Found"
        ], Response::HTTP_NOT_FOUND);
    }

}