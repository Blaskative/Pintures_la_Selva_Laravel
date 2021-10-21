<?php $catalegs = ['Tot', 'Catalegs', 'Façanes','Interior de Cases','Cel oberts','Locals','Obra Nova'];  $valor=0; $contador=0;?>

<section class="portfolio mb-5" id="portfolio">
    <div class="container-fluid">
        <div class="row " >

            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Galeria</h1>
            </div>
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div align="center">
                    @foreach ($catalegs as $cataleg)
                        <form action="{{route('galeria')}}" method="get">
                            <input type="text" name="categoria" value="{{$valor++}}" readonly hidden>
                            <button class="filter-button">{{$cataleg}}</button>
                        </form>
                    @endforeach
                </div>
            </div>
            <br/>
        </div>       
    </div>
  
       <div class="div contenedor">
            @foreach ($imatges as $imatge)
            <div>
                <img class="img-responsive" alt="" src="{{$imatge->ruta}}" />
            </div>
            <input  type="hidden" value="{{$contador++}}">
            
            @endforeach
       </div>
         
</section>

@if ($contador>=9)
<div class="card-footer">
    {{$imatges->links()}}
</div> 
@endif

