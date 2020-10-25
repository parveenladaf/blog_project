<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Content;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{

    protected $validationRules = [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'email_id' => 'required|email',
        'password' => 'required',
    ];

    protected $validationMessages = [
        'first_name.required' => 'Name is required',
        'last_name.required' => 'Name is required',
        'email_id.required' => 'Email id required',
        'email_id.email' => 'Please enter a valid email',
        'password.required' => 'Password is required',
    ];

    protected $validation = [
        'email_id' => 'required|email',
        'password' => 'required',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), $this->validationRules, $this->validationMessages);
        //If any error then return errors in json format.
        if ($validator->fails()) {
            $resp['success'] = false;
            $resp['errors'] = $validator->messages();
            $resp['message'] = "Unable to save due to validation errors";
            return $resp;
        }
        $autherObj = new Author();

        $res = $autherObj->create($request->all());
        session()->put('authorId',$res['id']);
        return view('content')->with('success', 'User sing up successfully!');

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validation);
        //If any error then return errors in json format.
        if ($validator->fails()) {
            $resp['success'] = false;
            $resp['errors'] = $validator->messages()->messages();
            $resp['message'] = "Unable to login due to validation errors";
            return $resp;
        }
        $autherObj = new Author();
        $res = $autherObj->findOne($request->all());
        session()->put('authorId',$res->author_id);

        if (isset($res, $res->author_id)) {
            $contentObj = new Content();
            $contents = $contentObj->getContent($res->author_id);
            $response = [
                'contents' => $contents,
                'edit' => 'true'
            ];
        }

        if (isset($response)) {
            return view('home',compact('response'));
        }
        
    }
}
