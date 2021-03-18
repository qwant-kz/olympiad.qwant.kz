<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{


    public function create(Request $request)
    {
        //$userInfo = UserInfo::create($request->except(['_token']));
        $userInfo = new UserInfo([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'city' => $request->get('city'),
            'school' => $request->get('school')
        ]);
        $userInfo->save();

        return redirect()->to('/')->with('success', "Your application has been sent successfully! Please, check your email");;
//        $url = URL::view('welcome#register') . '#apply';
//        return Redirect::to($url);

    }

}
