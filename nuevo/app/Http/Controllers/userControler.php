<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControler extends Controller
{
	public function index()
    {
        return User::all();
    }
    
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return \Response::json(['data' => $request], 200);
    }
    
   
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user -> update($request->all());
        return \Response::json(['update'=>true], 200);
    }
   
    public function destroy($id)
    {
       	$item = Item::findOrFail($id);
    	$item->delete();
    	return \Response::json(['deleted'=>true], 200);
    }
}
