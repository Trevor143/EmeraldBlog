<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Posts</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/blog-post.css') }}" rel="stylesheet">

    <!-- Facebook JDK plugin -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=239966393407553&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


</head>

<body>
@include('partials.header')
<!-- Page Content -->

<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">


                    <!-- Title -->
                    <h1 class="mt-4">{{ $post->title }}</h1>

                    <!-- Author -->
            @if($names)
                @foreach($names as $name)
                    <p class="lead">
                        by {{ $name->name }}
                    </p>
                @endforeach
            @endif
                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on {{ $post->created_at }}</p>

                    <hr>

                    <!-- Preview Image -->
                    <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

                    <hr>

                    <!-- Post Content -->
                    <p>{{ $post->description }}</p>
                    <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5">

                    </div>
                </div>
            </div>
            <!-- Single Comment -->
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <br><br>
            <div class="card my-4">
                <h5 class="card-header">Join the team</h5>
                <div class="card-body">
                    To be part of the writers for the emeraldblog, send your request to
                    <a href="mailto:blog@emeraldconsult.org?Subject=Join%20Emerald%20Writers" target="_top">blog@emeraldconsult.org</a>
                    and you shall be promptly verified and added.
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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
<script src="{{ URL::to('js/bootstrap.js') }}"></script>

</body>

</html>
