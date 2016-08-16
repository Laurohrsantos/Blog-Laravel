@yield('slider')
<!-- SLIDER -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner media" role="listbox">
    <div class="item active">
      <img src="{{ asset('/img/1.jpg') }}" alt="Imagem 1">
      <div class="carousel-caption">
      	<h2>Descrição da imagem 1</h2>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/img/2.jpg') }}" alt="Imagem 2">
      <div class="carousel-caption">
        <h2>Descrição da imagem 2</h2>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/img/3.jpg') }}" alt="Imagem 3">
      <div class="carousel-caption">
        <h2>Descrição da imagem 3</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>