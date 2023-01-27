<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Commerce;

class CommerceController extends Controller
{
    public function create(Request $request){
       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            ]);

        $newcommerce = Commerce::create([
                'name' => $validatedData['name'],
                'owner_id' => $request->user()['id']
         ]);

         return response()->json([
            'response' => 'New commerce created'
         ]);
        
    }

    public function retrieve(Request $request){

        $usercommerce = Commerce::where('owner_id', '=', $request->user()['id'])->get();
        return response()->json($usercommerce);
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
