<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Image;


class ContentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contentObj = new Content();
        
        $contentObj->create($request->all());
        $response = [
            'success' => true,
            'message' => "Post save successfully"
        ];
        return redirect('/');

    }

    public function getContents(Request $request)
    {
        $contentObj = new Content();
        $contents = $contentObj->findAll();
        $response = [
            'contents' => $contents,
            'edit' => 'false'
        ];
        return view('home', compact('response'));
    }

     public function deletePost(Request $request)
     {
         if (isset($request->id)) {
            $res = Content::where('id', $request->id)->delete();
            if($res == true) {
                return redirect('/api/login');
            } else {
                $response = [
                    'success' => false,
                    'message' => "Post connot be deleted, internal server error."
                ];
            }
         } else {
            $response = [
                'success' => false,
                'message' => "Post id not found."
            ];
         }
         return $response;
     }

     public function showEdit(Request $request)
     {
        $content = Content::find((int)$request->id);

        return view('content', compact('content'));
     }
}
