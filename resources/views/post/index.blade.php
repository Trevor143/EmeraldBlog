<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Emerald Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/blog-home.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">

</head>

<body>

<!-- Navigation -->
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="#">Emerald Blog</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--@guest--}}
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="http://emerald.test">Back to website--}}
                        {{--<span class="sr-only">(current)</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--@else<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="http://emerald.test">Back to website--}}
                            {{--<span class="sr-only">(current)</span>--}}
                        {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="http://emerald.test">Back to website--}}
                          {{--<span class="sr-only">(current)</span>--}}
                    {{--</a>--}}
                 {{--</li>--}}
                    {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<!-- Page Content -->

@include('partials.header')

<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h3 class="my-4">Environmental Interaction <br>
                <small> Today's date will go here</small>
            </h3>

            @if($posts)
            @foreach($posts as $post)

        <!-- Blog Post -->
            <div class="card mb-4">
                <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">

                        {{ str_limit($post->description , $limit = 400, $end = '...')}}
                    </p>

                    <a href="{{ route('post.showpost', ['id' => $post->id]) }}?" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by
                    {{ $post->name }}
                </div>
            </div>

        @endforeach
            @endif


        <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Welcome</h5>
                <div class="card-body">
                    The Emerald blog is where you will find all interactive articles about the world today and how fast it is changing right under our noses. Join the conversation via Facebook in the comments section.
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;Emerald Consultancy Frim 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>


</body>

</html>

