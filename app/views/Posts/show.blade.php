
@extends('layouts.master')
@section('top-script')
<style>
	html{
		background-color: ghostwhite;
		font-family: "proxima-nova-soft",sans-serif;

	}
</style>

@stop
@section('content')
    <h1>{{{ $post->title }}} </h1>
    <p> {{ $post->body}}</p>
    	<!-- time -->
    <p> {{{  $post->created_at->format('l, F jS Y @ h:i:s A') }}} </p>

    <p>Written by {{{ $post->user->first_name }}} </p>



<!-- This is for Disquss -->
<div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//michaelburneysblog.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

@stop