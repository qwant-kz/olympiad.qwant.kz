<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\UserInfoExport;
use PhpOffice\PhpSpreadsheet\Writer\Exception;


class MainController extends Controller
{
    function login(Request $request){
        if($request->get('email')=='bumirbayev@gmail.com' && $request->get('password')=='Bcpd9568'){
            return redirect()->to('/index');
        }
        return redirect()->to('/login')->with('success', 'Incorrect username or password');

    }

    function login_page(){
        return view('/login');
    }

    function index(){
        $users=UserInfo::all();
        $table=DB::table('user_infos')->get();
        return view('/index')->with(['users'=>$users, 'table'=>$table]);
    }

    function excel(){
        $data=DB::table('user_infos')->get()->toArray();
//
        $array[] = array('id', 'Full Name', 'Email', 'Phone number', 'City', 'School', 'Applied time');
//
//        foreach ($data as $d){
//            $array[] = array(
//                'id' => $d->id,
//                'Full Name' => $d->name,
//                'Email' => $d->email,
//                'Phone Number' => $d->phone,
//                'City' => $d->city,
//                'School' => $d->school,
//                'Applied Time' => $d->created_at
//            );
//        }
//        Excel::create('Students Info', function($excel) use ($array){
//            $excel->setTitle('Students Info');
//            $excel->sheet('Students Info', function ($sheet)
//            use ($array){
//                $sheet->fromArray($array,null,'A1', false, false);
//            });
//
//        })->download('xlsx');
//        return Excel::download( UserInfo, 'users.xlsx');
        return Excel::download( new UserInfoExport($array), 'Users_Report_'.'.xlsx');
//        return Excel::download( UserInfoExport($data), 'Users_Report_'.'.xlsx');

//        try {
//            return Excel::download(new UserInfoExport, 'users.xlsx');
//        } catch (Exception $e) {
//        } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
//        }

    }
}
