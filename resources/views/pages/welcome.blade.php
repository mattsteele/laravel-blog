@extends('main')
@section('title', '| Home')
@section('content')
     <div class="row">
         <div class="col-md-12">
             <div class="jumbotron">
                  <h1>Welcome to my blog</h1>
                  <p class="lead">Thank you for visiting. This is my test website built with Laravel. Please read my popular post.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
         </div>
     </div> <!-- .row -->
     <div class="row">
         <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, expedita a nihil veritatis, perspiciatis reprehenderit iste fugit, recusandae modi debitis magni? Sit expedita natus aspernatur consequuntur consequatur ad, ipsum impedit...</p>
                <a href="" class="btn btn-primary">Read More</a>
            </div> <!-- .post -->
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, expedita a nihil veritatis, perspiciatis reprehenderit iste fugit, recusandae modi debitis magni? Sit expedita natus aspernatur consequuntur consequatur ad, ipsum impedit...</p>
                <a href="" class="btn btn-primary">Read More</a>
            </div> <!-- .post -->
             <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, expedita a nihil veritatis, perspiciatis reprehenderit iste fugit, recusandae modi debitis magni? Sit expedita natus aspernatur consequuntur consequatur ad, ipsum impedit...</p>
                <a href="" class="btn btn-primary">Read More</a>
            </div> <!-- .post -->
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, expedita a nihil veritatis, perspiciatis reprehenderit iste fugit, recusandae modi debitis magni? Sit expedita natus aspernatur consequuntur consequatur ad, ipsum impedit...</p>
                <a href="" class="btn btn-primary">Read More</a>
            </div> <!-- .post -->
         </div> <!-- .col-md-8 -->
         <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
         </div> <!-- .col-md-3 col-md-offset-1 -->
     </div> <!-- .row -->
 @endsection