@extends('main')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron">
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting. This is my test website built with Laravel. Please read my latest post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div> <!-- end of header .row -->

<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet
                Consectetur adipiscing elit
                Integer molestie lorem at massa
                Facilisis in pretium nisl aliquet
                Nulla volutpat aliquam velit...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet
                Consectetur adipiscing elit
                Integer molestie lorem at massa
                Facilisis in pretium nisl aliquet
                Nulla volutpat aliquam velit...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet
                Consectetur adipiscing elit
                Integer molestie lorem at massa
                Facilisis in pretium nisl aliquet
                Nulla volutpat aliquam velit...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet
                Consectetur adipiscing elit
                Integer molestie lorem at massa
                Facilisis in pretium nisl aliquet
                Nulla volutpat aliquam velit...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
        Lorem ipsum dolor sit amet
        Consectetur adipiscing elit
        Integer molestie lorem at massa
        Facilisis in pretium nisl aliquet
        Nulla volutpat aliquam velit
    </div>
</div>
@endsection