<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top text-sans">
  <div class="container-fluid">

    <a class="navbar-brand pt-0" href="/">
      <img src="<? echo get_theme_file_uri( 'assets/images/pr-resolution-logo.png' ) ?>" alt="PR Resolution logo" class="nav-logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarContent" aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <nav class="navbar-nav ml-auto font-weight-bold">
        <div class="nav-item{% if page.url contains 'blog' %} active{% endif %} mr-4">
          <a class="nav-link" href="/blog">Blog</a>
        </div>
        <div class="nav-item{% if page.url contains 'podcast' %} active{% endif %} mr-4">
          <a class="nav-link" href="/podcast">Podcast</a>
        </div>
        <div class="nav-item{% if page.url contains 'books' %} active{% endif %} mr-4">
          <a class="nav-link" href="/books">Books</a>
        </div>
        <div class="nav-item{% if page.url contains 'about' %} active{% endif %} mr-4">
          <a class="nav-link" href="/about">About</a>
        </div>
        <div class="nav-item{% if page.url contains 'newsletter' %} active{% endif %}">
          <hr class="d-md-none mt-1" />
          <a class="btn btn-primary px-4" href="/newsletter">Newsletter</a>
        </div>
      </nav>
    </div>
  </div>
</nav>
