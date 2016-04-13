<?php
// modal. saving updating. deleting
// eloquent just like base model, (alias for class),
class Post extends Eloquent{

    // CONVENTION: pipes for rules, colons for value
    public static $rules = [
        'title' => 'required|max:100|min:3',
        'body' => 'required|max:10000'
    ];

    protected $table = 'posts';

}
