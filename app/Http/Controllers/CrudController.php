<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
class CrudController extends Controller
{

    public function __construct()
    {

    }


   /* public function store(){
        Offer::create([
            'name'=>'ahmed',
            'price' => '5000$',
            'details' => 'offer details'

        ]);
    } */
    public function create(){
        return view('offers.create');
    }
    public function getAllOffers(){
       $offers =  Offer::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name' ,'details_'.LaravelLocalization::getCurrentLocale().' as details','price')->get();
        return view('offers.all',compact('offers'));
    }

    public function store(OfferRequest $request){
        //validation
       //$rules = $this -> getRules();
       // $messages = $this->getMessage();
       // $validator = Validator::make($request->all(),$rules,$messages);
     //   if($validator -> fails()){
      //       return redirect() -> back() ->withErrors($validator)->withInputs($request->all());
      //  }
        //insert to database
        Offer::create([
            'name_ar'=> $request->name_ar,
            'name_en'=> $request->name_en,
            'price'=>$request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en
        ]);
        return redirect() -> back() ->with(['success'=>'تم إظافة العرض بنجاح']);
    }
       /* public function getRules(){
        return $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
        }
        public function getMessage(){
        return $message =[
            'name.required' => trans('messages.name.required'),
            'name.unique' => trans('messages.name.unique'),
            'price.numeric' => 'سعر العرض يجب ان يكون متكونا من ارقام'
        ];
        }*/

}
