<?php

namespase App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Client;
use Validator;

class ClientController extends BaseController
{
    /**
     * Показ списка.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = 

    }

    public function update(Request $request, Client $client)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $client->name = $input['name'];
        $client->detail = $input['detail'];
        $client->save();
        return $this->sendResponse($client->toArray(), ' Успешное обновление!');
    }

}
