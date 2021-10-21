<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers as Controller;

class BaseController extends Controller 
{
    /**
     * успешный response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendPesponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response,200);
    }

    /**
     * возврат ошибки запроса error response
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessage = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error;
        ];

        if(!empty($errorMessage)) {
            $response['data'] = $errorMessages;
         }
         return response()->json($response, $code);
    }


}
