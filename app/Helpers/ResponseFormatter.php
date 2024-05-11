<?php

namespace App\Helpers;
use App\Constants\HttpStatusCodes;

class ResponseFormatter
{

    protected static $statusCodeOk;
    protected static $statusMessage;

    public static function setDefaultStatusCode()
    {
        self::$statusCodeOk = HttpStatusCodes::OK; 
        self::$statusMessage = HttpStatusCodes::getMessage(self::$statusCodeOk);
    }



    public static function success($data = null)
    {
        self::setDefaultStatusCode();
        $response = [
            'code' => self::$statusCodeOk,
            'message' => self::$statusMessage,
            'data' => $data,      
        ];

        return response()->json($response, self::$statusCodeOk,);
    }

    public static function error($message = null, $code)
    {
        self::setDefaultStatusCode();
        $response = [
            'code' => $code,
            'message' => $message,
            'data' => [],
            
        ];

        return response()->json($response, self::$statusCodeOk,);
    }

    public static function handleServiceException($exception)
    {
        self::setDefaultStatusCode();
        $message = $exception->getMessage();
        $code = $exception->getCode();

        $response = [
            'code' => $code ?: 500, 
            'message' => $message ?: 'Internal Server Error',
            'data' => null,
        ];

        return response()->json($response, self::$statusCodeOk,);
    }

}
