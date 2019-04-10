@extends('layouts.app')

@section('content')
<header>
    <div class="hero">
        <div class="valign-wrapper">
            <div class="container">
                <div class="center mt1">
                    <img src="/img/logo.png" class="responsive-img"  alt="">
                </div>
                <div class="right right-align">
                    <h3 class="title white-text -texto">menor riesgo, mayor ahorro <br><span class="italic">y máximo rendimiento</span></h2>
                    <hr class="divider rojo">
                    <br><br>
                </div>
                 <div class="section center">
                    <div class="row">
                        <a href="{{ route('tires') }}" class="col m6 offset-m3 s12 rojo">
                            <h4 class="white-text">¿Qué <span class="italic sombra-texto">Tipo de Llanta</span> <br>estas buscando?</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg class="poligono-top hide-on-med-and-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="0,100 100,0 100,100"/>
        </svg>
    </div>
</header>
<main>
    <div class="fondo-1 section">
        <div class="container center section">
            <h3 class="rojo-text italic">Sobre la empresa</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur, quos iure culpa enim eum. Atque nesciunt recusandae temporibus iste inventore sunt eveniet dolorum accusantium accusamus in dolor, numquam eos hic, odit ea ratione fuga? Eaque consequuntur iusto beatae cumque, quia repudiandae architecto officiis, amet iure dignissimos inventore, nemo molestiae doloremque reprehenderit neque! Accusantium ex recusandae a incidunt neque quod expedita, est cumque dolor, numquam consectetur quasi? Voluptas eligendi corporis mollitia ut tempora nemo cumque minus maxime facilis doloremque, neque dignissimos eos aliquam excepturi, cum beatae libero rerum unde nostrum autem porro. Consequuntur quos maiores id, optio illum culpa architecto quae quisquam nihil eius explicabo officiis assumenda totam ratione ullam facilis perspiciatis praesentium possimus aliquid nulla. Aut ut, inventore sapiente, totam natus dolores quod nobis cum nemo animi corrupti fuga necessitatibus! Velit quam molestias, at reprehenderit animi obcaecati, omnis voluptate id qui quis alias sit veniam. Consequuntur incidunt necessitatibus facere quasi quidem nobis harum, porro explicabo, tenetur perferendis tempore et mollitia reprehenderit. Animi id illum accusantium, fugiat ducimus modi consequatur debitis, distinctio, vel libero provident vitae perspiciatis dolorum ullam quia molestiae voluptate minus reprehenderit odit. Consequatur neque ullam facere. Error dolores, repellat mollitia quidem libero nesciunt perferendis impedit quae ratione atque amet ad deserunt at, dignissimos id numquam voluptates? Velit, accusamus? Atque, omnis, modi, cupiditate temporibus quia consequatur velit maiores non perferendis voluptatum impedit sit nobis fugiat sunt pariatur consequuntur adipisci sequi laborum explicabo. Vitae molestiae atque odit blanditiis, mollitia voluptatibus, quisquam ea quos nihil debitis obcaecati in suscipit amet!</p>
        </div>
    </div>

    <section class="section grey lighten-2  center sombra">
        <h3 class="rojo-text">La llanta <span class="italic title">Perfecta</span><br><span class="right-align navy-text italic">Para tu trabajo</span></h3>
        <div class="row center">
                        @foreach($types as $type)
                            @if($type->name == 'N/A')

                            @else
                                <div class="col m4 s12">
                                    <a href="{{ route('types', $type->slug) }}">
                                        <img src="/img/tipo.png" class="responsive-img" alt="">
                                        <p class="navy-text">{{ $type->name }}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
    </section>

    <section class="section">
        <div class="center">
            <h3 class="rojo-text italic">Últimas Noticias</h3>
            <div class="card horizontal hide-on-med-and-down">
                <div class="card-image">
                        <img src="{{ $post->file }}" class="responsive-img" alt="">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <a href="{{ route('post', $post->slug) }}"><h4 class="navy-text italic">{{ $post->name }}</h4></a>
                        <p class="azul-text flow-text">{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('post', $post->slug) }}" class="btn navy right">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="card hide-on-med-and-up">
                <div class="card-image">
                        <img src="{{ $post->file }}" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                    <a href="{{ route('post', $post->slug) }}"><h4 class="navy-text italic">{{ $post->name }}</h4></a>
                    <p class="azul-text">{{ $post->excerpt }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('post', $post->slug) }}" class="btn rojo ">Leer más</a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="row container">
            <div class="col m10 s12 fondo-1">
                <h4 class="italic navy-text">La mejor maquinaria de <br>Construcción, Industrial y Minería</h4>
                <a href="{{ route('machinery') }}" class="btn rojo">Ver Catalogo</a>
                <br><br><br>
                <div class="col s12 offset-m4 mt-4">
                    <img src="/img/maquinaria.png" class="responsive-img" alt="">
                </div>
            </div>
        </div>
    </section>
        
</main>
@endsection
