<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\House;

class HousesController extends Controller
{
    public function index()
    {
        $data=[];
        if(\Auth::check()){
            $houses=House::orderBy('created_at','desc')->paginate(5);
            return view('houses.index',['houses'=>$houses,]);
        }
        else{
            return view('welcome');
        }
    }
    
    public function create()
    {
        if(\Auth::check())
        {
            $house=new House;
            return view('houses.create',['house'=>'$house',]);
        }
        else{
            return view('welcome');
        }
    }
    
    public function store(Request $request)
    {
        $user=\Auth::user();
        $house=new House;
        if($request->picture==null){
            $house->picture="";
        }
        else{
            $house->picture=$request->picture;
        }
        $house->user_id=$user->id;
        $request->validate(['contact_name'=>'required|max:10',
        'contact_tel'=>'required|max:11',
        'address'=>'required|max:200',
        'postal_code'=>'required|max:7',
        'age'=>'required',
        'price'=>'required',
        'overview'=>'max:250',
        ]);
        $house->contact_name=$request->contact_name;
        $house->contact_tel=$request->contact_tel;
        $house->address=$request->address;
        $house->postal_code=$request->postal_code;
        $house->age=$request->age;
        $house->price=$request->price;
        if($request->overview==null){
            $house->overview="";
        }
        else{
            $house->overview=$request->overview;
        }
        $house->save();
        return redirect('/');
    }
    
    public function show($id)
    {
        if(\Auth::check()){
            $house=House::findOrFail($id);
            return view('houses.show',['house'=>$house,]);
        }
        else{
            return view('welcome');
        }
    }
    
    public function edit($id)
    {
        $house=House::findOrFail($id);
        if(\Auth::id()===$house->user_id){
            return view('houses.edit',['house'=>$house,]);
        }
        else{
            return redirect('/');
        }
        
    }

    public function update(Request $request,$id)
    {
        $house=House::findOrFail($id);
        if($request->picture==null){
            $house->picture="";
        }
        else{
            $house->picture=$request->picture;
        }
        $request->validate(['contact_name'=>'required|max:10',
        'contact_tel'=>'required|max:11',
        'address'=>'required|max:200',
        'postal_code'=>'required|max:7',
        'age'=>'required',
        'price'=>'required',
        'overview'=>'max:250',
        ]);
        $house->contact_name=$request->contact_name;
        $house->contact_tel=$request->contact_tel;
        $house->address=$request->address;
        $house->postal_code=$request->postal_code;
        $house->age=$request->age;
        $house->price=$request->price;
        if($request->overview==null){
            $house->overview="";
        }
        else{
            $house->overview=$request->overview;
        }
        $house->save();
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $house=House::findOrFail($id);
        if(\Auth::id()===$house->user_id)
        {
            $house->delete();
            return redirect('/');
        }
        else{
            return redirect('/');
        }
        
    }
}
