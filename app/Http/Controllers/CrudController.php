<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{

    public function __construct()
    {

    }

    public function getOffers(){
        return Offer::select('name')->get();
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
            'name'=> $request->name,
            'price'=>$request->price,
            'details' => $request->details
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
