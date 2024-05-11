<?php

namespace App\Constants;

class HttpStatusCodes
{

    const OK = 200;
    const NOT_FOUND = 404;
  
    
    public static function getMessage($statusCode)
    {
        switch ($statusCode) {
            case self::OK: return 'OK';
            case self::NOT_FOUND: return 'Not Found';
            default: return 'Unknown';
        }
    }
}
