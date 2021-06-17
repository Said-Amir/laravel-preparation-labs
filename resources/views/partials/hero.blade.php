<section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>{{ $home->title }}</h1>
      <h2>{{ $home->subTitle }}</h2>
      <a href="#about" class="btn-get-started scrollto">{{ $home->button }}</a>
      <img src="img/{{ $home->image }}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
</div>

</section><!-- End Hero -->