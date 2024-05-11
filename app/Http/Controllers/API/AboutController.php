<?php

namespace App\Http\Controllers\API;

use App\Constants\HttpStatusCodes;
use App\Helpers\ResponseFormatter;
use App\Models\About;
use App\Http\Controllers\Controller;
use Exception;


class AboutController extends Controller
{
    public function index()
    {
       try{
        $about = About::find(1);
        if ($about) {
            return ResponseFormatter::success($about);
        } else {
            $statusCode = HttpStatusCodes::notFound;
            $statusMessage = HttpStatusCodes::getMessage($statusCode);
            return ResponseFormatter::error($statusMessage,  $statusCode);
        }
       }catch (Exception $e) {
        return ResponseFormatter::handleServiceException($e);
       } 
    }
}
