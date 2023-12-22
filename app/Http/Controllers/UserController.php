<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('site.formlayout');
    }

    public function store(ClientRequest $request){
        $client = new Client();

        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->gender = $request->gender;
        $client->cpf = $request->cpf;
        $client->phone = $request->phone;
        $client->cellphone = $request->cellphone;
        $client->birth = $request->birth;
        $client->cep = $request->cep;
        $client->street = $request->street;
        $client->number = $request->number;
        $client->complement = $request->complement;
        $client->district = $request->district;
        $client->city = $request->city;
        $client->state = $request->state;

        $client->save();

        return view('site.formsuccess');
    }
}
