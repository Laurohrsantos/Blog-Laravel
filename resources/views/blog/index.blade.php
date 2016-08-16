@extends('blog/principal')

@section('conteudo')

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

<!-- BLOCO 1 -->
<div class="noticias col-md-9 pull-left">

	<h2 class="text-center">Notícias recentes</h2>
	
	<div class="col-md-4">
		<div class="thumbnail">
		  <img src="{{ asset('/img/noticia-1.png') }}" alt="IMG">
		  <div class="caption">
		    <h3>Notícia 1</h3>
		    <p>Uma breve descrição da notícia número 1</p>
		    <p><a href="#" class="btn btn-primary" role="button">Ver</a></p>
		  </div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="thumbnail">
		  <img src="{{ asset('/img/noticia-2.png') }}" alt="IMG">
		  <div class="caption">
		    <h3>Notícia 2</h3>
		    <p>Uma breve descrição da notícia número 2</p>
		    <p><a href="#" class="btn btn-primary" role="button">Ver</a></p>
		  </div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="thumbnail">
		  <img src="{{ asset('/img/noticia-3.png') }}" alt="IMG">
		  <div class="caption">
		    <h3>Notícia 3</h3>
		    <p>Uma breve descrição da notícia número 3</p>
		    <p><a href="#" class="btn btn-primary" role="button">Ver</a></p>
		  </div>
		</div>
	</div>

	<nav aria-label="Page navigation">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>

</div>
<!-- BLOCO 2 -->
<aside class="col-md-3 sider">

	<h2 class="text-center">Mais vistos</h2>

	<div class="list-group">
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">Noticia mais lida nº. 1</h4>
	    <p class="list-group-item-text">Leading da notícia mais lida</p>
	  </a>
	</div>

	<div class="list-group">
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">Noticia mais lida nº. 2</h4>
	    <p class="list-group-item-text">Leading da notícia mais lida</p>
	  </a>
	</div>

	<div class="list-group">
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">Noticia mais lida nº. 3</h4>
	    <p class="list-group-item-text">Leading da notícia mais lida</p>
	  </a>
	</div>

	<div class="list-group">
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">Noticia mais lida nº. 4</h4>
	    <p class="list-group-item-text">Leading da notícia mais lida</p>
	  </a>
	</div>

	<div class="list-group">
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">Noticia mais lida nº. 5</h4>
	    <p class="list-group-item-text">Leading da notícia mais lida</p>
	  </a>
	</div>

</aside>

@stop