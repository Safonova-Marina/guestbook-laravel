<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = [
            'title' => 'Гостевая книга',
            //'messages' => Post::orderBy('created_at', 'desc') -> get(),
            'messages' => Post::latest() -> paginate(3),
            'total_mes' => Post::count(),
        ];
        return view('home', $data);
    }

    public function add()
    {
        $rules = array(
            'name' => 'required',
            'email'    => 'email',
            'message' => array('required', 'min:5')
        );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        Post::create([
            'avtor_name' => Input::get('name'),
            'email' => Input::get('email'),
            'message' => Input::get('message'),
        ]);
        
        return redirect() -> route('home');
    }
}
