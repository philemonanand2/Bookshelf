<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class bookscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',  ['except' => ['index', 'home']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('books')->get();

        return view('books.index', ['books' => $books]);
    }

    
    public function orders()
    {   $id=auth()->user()->id;
         
        $users = DB::table('users')
        
        ->join('customers','users.id','=','customers.user_id')
        
        ->get();

        
      

       return view('books.orders')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'cname' => $request->name,
            'email' => $request->email,
            'address'=> $request->address,
            'contact'=> $request->contact,
            'bookid'=>$request->id,
            'user_id'=>auth()->user()->id
        ];
           

        DB::table('customers')->insert($data); 
        return redirect('/index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=DB::table('books')->find($id);
        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home()

    {
       return view('books.welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
