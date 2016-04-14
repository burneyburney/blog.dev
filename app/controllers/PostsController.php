<?php

class PostsController extends BaseController {

    public function index(){
        $posts = Post::paginate(4);
        return View::make('posts.index')->with(array('posts' => $posts));
    }
    public function create(){
        // return 'showing create';
        return View::make('posts.create');
    }
    public function store(){
        // create the validator
        $validator = Validator::make(Input::all(), Post::$rules);
        // attempt validation
        if ($validator->fails()) {
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            // validation succeeded, create and save the post
        }
    }
    // i made
    // return Redirect::back()->withInput();
    public function show($id){
        return View::make('posts.show', [
        'post' => Post::find($id),
        ]);
    }
    public function edit($id){
        $post = Post::fine($id);
        // go to edit file
        return View::make('posts.edit')->make();
    }
    public function update(){
        return 'showing update';
    }
    public function destroy(){
        return 'showing destroy';
    }
}
