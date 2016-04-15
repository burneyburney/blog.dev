<?php

class PostsController extends BaseController {
    // i have a beore
    public function __contruct()
    {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }

    public function index()
    {
        $posts = Post::paginate(4);
        // generally have same name, if KEY is posts... then VAR is $posts...
        return View::make('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        // bring up a form
        return View::make('posts.create');
    }

    public function store()
    {
        return $this->validateAndSave();
        // return Redirect::action('PostsController', $post->index);
    }
    // i made
    // return Redirect::back()->withInput();

    public function show($id)
    {
        return View::make('posts.show', [
        // send data into the view
        // show a single page
        'post' => Post::find($id),
        ]);
    }


    public function edit($id)
    {
        // goes to edit file
        $post = post::fine($id);
        return View::make('posts.edit')->make();
    }
    public function update()
    {

    }
    public function destroy($id)
    {
        $post = Post::find($id);

        if(!$post) {
            Session::flash('errorMessage', 'Post was not found');
            return Redirect::action('PostsController@index');
        }
        $post->delete();
        Session::flash('successMessage', 'The post was successfully deleted');
        return Redirect::action('PostsController@index');
    }

    //  keep code dry, use this function
    public function validateAndSave()
    {
        $validator = Validator::make(Input::all(), Post::$rules);
        // attempt validation
        if ($validator->fails()) {
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $post = new Post();
            $post->title = input::get('title');
            $post->body = input::get('body');
            // $post->user_id = Auth::id();
            $post->user_id = User::first()->id;
            $post->save();

        }
        Session::flash('successMessage', 'The post was successfully added!');
        return Redirect::action('PostsController@index');
    }
}
    // pascal sent me this
    // {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
    // {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    // {{ Form::close() }}


    // same as SELECT * FROM USERS in db (done in php artisan tinker)
    // 7] > foreach($user->posts as $post){
    // [7] *> echo $post->title;}
