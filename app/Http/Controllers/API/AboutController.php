<?php

namespace App\Http\Controllers\API;

use App\Constants\HttpStatusCodes;
use App\Helpers\ResponseFormatter;
use App\Models\About;
use App\Http\Controllers\Controller;
use Exception;


class AboutController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/about",
     *     tags={"About"},
     *     summary="Get About Information",
     *     description="enter your description here",
     *     operationId="getAbout",
     *     @OA\Response(
     *         response="default",
     *         description="return array model todo"
     *     )
     * )
     */
    public function index()
    {
       try{
        $about = About::find(1);
        if ($about) {
            return ResponseFormatter::success($about);
        } else {
            $statusCode = HttpStatusCodes::NOT_FOUND;
            $statusMessage = HttpStatusCodes::getMessage($statusCode);
            return ResponseFormatter::error($statusMessage,  $statusCode);
        }
       }catch (Exception $e) {
        return ResponseFormatter::handleServiceException($e);
       } 
    }
}
