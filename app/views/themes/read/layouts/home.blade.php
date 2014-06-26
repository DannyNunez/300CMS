<html>
<head>
    @include('themes.read.partials.header')
</head>
<body>
<div id="page" class="hfeed site">
@include('themes.read.partials.headernav')
<!-- #main -->
<section id="main" class="middle wrapper">
<div class="row row-fluid">
<!-- #primary -->
<div id="primary" class="site-content">
<!-- #content -->
<div id="content" role="main">
<!-- .blog-posts -->
    @yield('content')
<!-- .blog-posts -->
</div>
<!-- #content -->
</div>
<!-- #primary -->
</div>
</section>
<!-- #main -->
@include('themes.read.partials.footer')
</div>
<!-- #PAGE -->
</body>
</html>