@extends('layouts.app')

@section('content')
<header>
    <div class="hero">
        <div class="valign-wrapper">
            <div class="container">
                <div class="center">
                    <img src="/img/logo.png" class="responsive-img"  alt="">
                </div>
                <div class="right right-align">
                    <h3 class="title white-text -texto">menor riesgo, mayor ahorro <br><span class="italic">y máximo rendimiento</span></h2>
                    <hr class="divider rojo">
                    <br><br>
                </div>
                 <div class="section center">
                    <div class="row">
                        <div class="col m6 offset-m3 s12 rojo">
                            <h4 class="white-text">¿Qué <span class="italic sombra-texto">Tipo de Llanta</span> <br>estas buscando?</h4>
                        </div>
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
        <div class="row">
            <div class="col m6 s12">
                <img src="/img/agricola.png" class="responsive-img" alt="">
                <br>
                <a href="" class="btn rojo title">Agricola</a>
            </div>
            <div class="col m6 s12">
                <img src="/img/camion.png" class="responsive-img" alt="">
                <br>
                <a href="" class="btn rojo title">Camión</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="center">
            <h3 class="rojo-text italic">Últimas Noticias</h3>
            <div class="row">
                <div class="col m6 s12">
                    <img src="/img/blog.jpg" class="responsive-img" alt="">
                </div>
                <div class="col m6 s12 left-align white">
                    <h4 class="navy-text italic">Lorem Ipsum</h4>
                    <p class="navy-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsam! Incidunt libero aliquid eos quis quod sequi illum consectetur rerum et quas doloribus numquam nostrum, aliquam perferendis nesciunt quos, assumenda error sint ipsum, esse ex fugit dolorem temporibus. Explicabo illum hic maxime! Magni quo atque consequatur iusto aliquid sapiente, voluptas.</p><br>
                    <p class="navy-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsam! Incidunt libero aliquid eos quis quod sequi illum consectetur rerum et quas doloribus numquam nostrum, aliquam perferendis nesciunt quos, assumenda error sint ipsum, esse ex fugit dolorem temporibus. Explicabo illum hic maxime! Magni quo atque consequatur iusto aliquid sapiente, voluptas.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
