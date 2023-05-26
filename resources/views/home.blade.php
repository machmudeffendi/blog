@extends('layout.main')
@section('title', 'Home')

@section('content')
<div class="p-4 p-md-5 mb-4 mt-2 text-dark rounded c-bg-light row g-2 align-items-center">
  <div class="col">
    <h3 class="display-5 fst-italic text-limit-2">Title of a longer Title of a longer Title of a longer Title of a longer featured blog post</h3>
    <p class="lead my-3 text-limit-3">Multiple lines Multiple lines Multiple lines Multiple lines Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
    <p class="lead mb-0"><a href="#" class="text-dark fw-bold">Continue reading...</a></p>
  </div>
  <div class="col-md-5 d-none d-lg-block">
    <img class="card-img featured-top-img" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image">
  </div>
</div>

<div class="row mb-4 g-4">
  <div class="col-md-6">
    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 bg-light h-md-250 position-relative h-100">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0 text-limit-1">Featured post Featured post Featured post Featured post</h3>
        <div class="mb-1 text-muted">Nov 12 by <a href="#">Mark</a></div>
        <p class="card-text mb-auto text-limit-3">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img class="seconds-img-row" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="250">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 bg-light h-md-250 position-relative h-100">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Design</strong>
        <h3 class="mb-0">Post title</h3>
        <div class="mb-1 text-muted">Nov 11 by <a href="#">Mark</a></div>
        <p class="mb-auto text-limit-3">This is a wider card with supporting text below as a natural lead-in to additional content. asdasdasdnaksd aksd kas dkas dkas kd aksd kasd </p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img class="seconds-img-row" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="250">
      </div>
    </div>
  </div>
</div>

<div class="row g-5">
  <div class="col-md-8">
    <h3 class="p-4 mb-4 border rounded">
      Artikel Terbaru
    </h3>

    <article class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative border rounded">
      <div class="blog-post col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-1 text-primary">World</strong>
        <h3 class="mb-1 blog-post-title text-limit-1">Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post Sample blog post</h3>
        <p class="mb-1 text-muted blog-post-meta">Nov 12 by <a href="#">Mark</a></p>
        <p class="card-text mb-auto text-limit-3">This is a wider This is a wider This is a wider This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block p-4">
        <img class="img-fit-cover rounded" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="200">
      </div>
    </article>

    <article class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative border rounded">
      <div class="blog-post col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0 blog-post-title">Sample blog post</h3>
        <p class="mb-1 text-muted blog-post-meta">Nov 12 by <a href="#">Mark</a></p>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block p-4">
        <img class="img-fit-cover rounded" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="200">
      </div>
    </article>

    <article class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative border rounded">
      <div class="blog-post col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0 blog-post-title">Sample blog post</h3>
        <p class="mb-1 text-muted blog-post-meta">Nov 12 by <a href="#">Mark</a></p>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block p-4">
        <img class="img-fit-cover rounded" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="200">
      </div>
    </article>

    <article class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative border rounded">
      <div class="blog-post col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0 blog-post-title">Sample blog post</h3>
        <p class="mb-1 text-muted blog-post-meta">Nov 12 by <a href="#">Mark</a></p>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block p-4">
        <img class="img-fit-cover rounded" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="200">
      </div>
    </article>

    <article class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative border rounded">
      <div class="blog-post col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0 blog-post-title">Sample blog post</h3>
        <p class="mb-1 text-muted blog-post-meta">Nov 12 by <a href="#">Mark</a></p>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block p-4">
        <img class="img-fit-cover rounded" src="https://cdn.pixabay.com/photo/2021/08/01/12/58/beach-6514331_960_720.jpg" alt="Card image" width="200" height="200">
      </div>
    </article>

    <nav class='d-flex flex-nowrap justify-content-between blog-post-spacer p-4 border rounded' id='pager'>
      <a class='btn btn-outline-primary' id='pager-newer' role='button'>
        <i class="fa fa-angle-left"></i>&nbsp;Lebih Baru
      </a>

      <a class='btn btn-outline-primary' id='pager-home' role='button'>
        <i class="fa fa-home"></i>&nbsp;Beranda
      </a>

      <a class='btn btn-outline-primary' id='pager-older' role='button'>
        Lebih Lama&nbsp;<i class="fa fa-angle-right"></i>
      </a>
    </nav>

  </div>

  <div class="col-md-4" id="sidebar">
    <div class="position-sticky" style="top: 1.4rem;">
      <div class="sidebar-section">
        <div class="widget HTML" data-version="2" id="HTML2">
          <h3 class="title rounded">
            Title
          </h3>
          <div class="widget-content">
            <p>Hello, world!</p>
          </div>
        </div>
        <div class="mb-3 widget rounded">
          <h3 class="title rounded">About</h3>
          <div class="widget-content">
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          </div>
        </div>
        <div class="mb-3 widget rounded">
          <h3 class="title rounded">Pekan Ini</h3>
          <div class="widget-content">
            <div class="row g-2 align-items-center mb-2">
              <div class="col-5">
                <img 
                src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_960_720.jpg" 
                class="rounded img-fit-cover" 
                width="100%"
                />
              </div>
              <div class="col-7 text-limit-3">Title</div>
            </div>
            <div class="row g-2 align-items-center mb-2">
              <div class="col-5">
                <img 
                src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_960_720.jpg" 
                class="rounded img-fit-cover" 
                width="100%"
                />
              </div>
              <div class="col-7 text-limit-3"><a href="#" class="text-dark">asdasdasdad asd asd asd as das d asd asd as das d asd asd</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection