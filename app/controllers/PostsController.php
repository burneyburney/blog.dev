<?php

class PostsController extends BaseController {

    public function index(){
        // posts folder / index file
        return View::make('posts.index', [
            'posts' => Post::all()
        ]);
    }
    public function create(){
        // return 'showing create';
        return View::make('posts.create');
    }
    public function store(){
        return Redirect::back()->withInput();
    }
    public function show($id){
        return View::make('posts.show', [
        'post' => Post::find($id),
        ]);
    }
    public function edit(){
        return 'showing edit';
    }
    public function update(){
        return 'showing update';
    }
    public function destroy(){
        return 'showing destroy';
    }
}
