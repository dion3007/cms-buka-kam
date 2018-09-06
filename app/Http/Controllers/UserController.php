<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
use Cookie;

class UserController extends Controller
{
    public function postUsers(Request $request){
        try {
			$client = new Client([
                'base_uri' => 'https://buka-kamar-auth-webapi.herokuapp.com/',
			]);
			
			$response = $client->request('POST', 'v1/authenticate/create/new-hotel', [
                'json' => [
					'email'=> $request->email,
                    'password'=> $request->password,
                    'profile' => [
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'hotelname' => $request->hotelname,
                        'images' => [],
                    ]
				]
            ]);

            dd($response);
        } catch(Exception $e) {
			dd($e->getMessage());
		}
	}
	
	public function postLogin(Request $request){
        try {
			$client = new Client([
                'base_uri' => 'https://buka-kamar-auth-webapi.herokuapp.com/',
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
			]);
			$data = [
                'username'=> $request->email,
                'password'=> $request->password
            ];

			$response = $client->request('POST', 'v1/authenticate/user', [
                'body' => json_encode($data),
            ]);
            
			$body = json_decode($response->getBody()->getContents());
            Session::put('token', $body->data);
            return redirect('/');
        } catch(Exception $e) {
			dd($e->getMessage());
		}
    }

	public function postLogout(Request $request){
		try {
			Session::flush();
			return redirect('/');
		} catch(Exception $e) {
			return redirect('/');
		}
	}
}
