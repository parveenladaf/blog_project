<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use DB;

class Author extends Model
{
    protected $table = 'author';
    public $timestamps = false;

    public function create($data)
    {
        try {
            $author = new Author();
            $author->first_name = $data['first_name'];
            $author->last_name = $data['last_name'];
            $author->email_id = $data['email_id'];
            $author->password = $data['password'];
            $author->save();
            return $author;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function findOne($data)
    {
        try {
            $res = DB::table('author')
                ->where('email_id', $data['email_id'])
                ->where('password', $data['password'])
                ->select('password', 'email_id', 'author_id')
                ->first();
            return $res;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
