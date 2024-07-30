<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   $users= User::doesntHave('post')->get();
    //   $users= User::has('post',"<",3)->with('post')->get();
    //   $users= User::has('post',">=",3)->with('post')->get();
    //   $users= User::withCount('post')->get();
    //   $users= User::select(['name','email'])->withCount('post')->get();
    //   $users= User::select(['name','email'])->with('post')->get();
      $users= User::with('post')->get();
    
      return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = new Post([
        //     'title'=>'New Post',
        //     'description'=>'Dolore amet consequat excepteur enim non reprehenderit aliquip irure incididunt enim cillum.'
        // ]);
        // $user = User::find(2);
        // $user->post()->save($post);
        // $user = User::find(2);
        // $user->post()->create([
        //     'title'=>'New Post 2',
        //     'description'=>'Dolore amet consequat excepteur enim non reprehenderit aliquip irure incididunt enim cillum.'
        // ]);
        $user = User::find(2);
        $user->post()->createMany([
            [
                'title'=>'New Post 3',
            'description'=>'Dolore amet consequat excepteur enim non reprehenderit aliquip irure incididunt enim cillum.'
            ],
            [
                'title'=>'New Post 4',
            'description'=>'Dolore amet consequat excepteur enim non reprehenderit aliquip irure incididunt enim cillum.'
            ],
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
