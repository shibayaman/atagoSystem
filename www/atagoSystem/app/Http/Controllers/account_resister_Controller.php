<?php

namespace App\Http\Controllers;
use Illnminate\Validation\Roule;
use Illuminate\Http\Request;
use App\Models\cust_resister;
//use App\Http\Requests\cust_resister_Request;
use Redirect;
use Validator;
class account_resister_Controller extends Controller
{

    // public $validateRules = [
    //     'name' => 'max:20',
    //     'kana' => ['max:20','regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
    //     'mail' => 'email | max:50',
    //     'mail2' => 'email | max:50',
    //     'zip' => 'numeric',
    //     'pref' => 'required',
    //     'city' => 'required',
    //     'other' => 'required',
    //     'phone' => 'required',
    //     'phone2' => 'required',
    //     'pass' => 'required | min:8',
    // ];

    // public $validateMessages = [
    //     "required" => "必須項目です。",
    //     "integer" => "整数で入力してください。",
    //     "pass.min" => "8文字以上で入力してください。",
    //     "email" => "メールアドレスの形式で入力してください。",
    //     "numeric" => "数値で入力してください。",
        
    // ];

    public function store(request $request)

    {
    
        $request->validate([
            
            'cust_name' => 'max:20',
            'cust_kana_name' => ['max:20','regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'mail_address' => 'email | max:50',
            'mail_address2' => 'nullable | email | max:50',
            'address_number' => 'numeric',
            'address1' => 'required',
            'address2' => 'required',
            'address3' => 'required',
            'phone_number' => 'required',
            'urgent_phone_number' => 'max:50',
            'password' => ['required','min:8','regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,}+\z/','unique:cust_resisters'],
            'password2' => 'required | same:password',
            'kiyaku' => 'required',
        ]);
        
        // $data = Request::all();
 
        
        // $val = Validator::make(
        //     $data,
        //     $this->validateRules,
        //     $this->validateMessages
        // );
 
        // //バリデーションNGの場合
        // if($val->fails()){
        //     return redirect('/accountresister')->withErrors($val)->withInput();
        // }

        $name = $request->cust_name;
        $kana = $request->cust_kana_name;
        $mail = $request->mail_address;
        $mail2 = $request->mail_address2;
        $zip = $request->address_number;
        $pref = $request->address1;
        $city = $request->address2;
        $other = $request->address3;
        $phone = $request->phone_number;
        $phone2 = $request->urgent_phone_number;
        $pass = $request->password;
        

        $cust_resister = new cust_resister;

        $cust_resister->cust_name = $name;
        $cust_resister->cust_kana_name = $kana;
        $cust_resister->password = $pass;
        $cust_resister->mail_address = $mail;
        $cust_resister->mail_address2 = $mail2;
        $cust_resister->address_number = $zip;
        $cust_resister->address1 = $pref;
        $cust_resister->address2 = $city;
        $cust_resister->address3 = $other;
        $cust_resister->phone_number = $phone;
        $cust_resister->urgent_phone_number = $phone2;
        
       
        $cust_resister->save();

        $msg = "登録";

        return redirect('/complete');

    }
}
