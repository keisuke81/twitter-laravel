<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Tweet;
use App\Models\Follower;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $items = User::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = User::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $item = User::find($user);
        if($item){
            return response()->json([
                'data' => $item
            ], 200);
        }else {
            return response()->json([
                'message' => 'Not Found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $item = User::where(id, $user->id)->delete();
        if($item){
            return response()->json([
                'message' => 'Delete Succesfully',
            ], 200);
        }else{
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
