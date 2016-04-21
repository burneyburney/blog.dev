<?php
// modal. saving updating. deleting
// eloquent just like base model, (alias for class),
class Post extends Eloquent{

    // CONVENTION: pipes for rules, colons for value
    public static $rules = [
        'title' => 'required|max:100|min:3',
        'body' => 'required|max:1000'
    ];

    public function user()
    {
            return $this->belongsTo('User');
    }


    // protected $table = 'posts'; table: "posts"
    // public function getCreatedAtAttribute($value) $value: "2015"

}

