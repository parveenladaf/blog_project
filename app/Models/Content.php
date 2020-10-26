<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use DB;

class Content extends Model
{

    protected $table = 'content';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function create($data)
    {
        try {
            $content = new Content();
            $content->title = $data['title'];
            $content->author_id = session('authorId') ?? '';
            $content->post = $data['post'];

            if (isset($data['id'])) {
                $res = DB::table('content')->where('id', $data['id'])->select('author_id')->first();
                $content->author_id = $res->author_id;
                DB::table('content')
                    ->where('id', $data['id'])
                    ->update([
                        'author_id' => $res->author_id,
                        'title' => $data['title'],
                        'post' => $data['post']
                    ]);
            } else {
                $content->save();
            }

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function findAll()
    {
        try {
            $res = DB::table('content as c')
                ->select('c.id', 'c.title', 'c.post')
                ->get();
            return ($res);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getContent($authorId)
    {
        $data = DB::table('content')->where('author_id', $authorId)->get();
        return $data;
    }
}
