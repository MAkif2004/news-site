<x-layout>


    <!--Hero start-->

    <div class="flex-container">
        <section class="container" style=" margin-left: 0; margin-right: 0;">
            <h2 class="title">
                <span class="primary textColor">Recente nieuws</span>
                <span class="secondary textColor">
                    Hover met je muis over de afbeeldingen voor meer info
                </span>
            </h2>
            <div class="gallery-wrapper bg-white" data-aos="fade-down">

                @if (count($posts) < 1)
                    <p>Geen resultaten gevonden :/ </p>

                @else

                @foreach ($posts as $post)
                    @if ($loop->iteration <= 5)
                        <figure class="gallery-item">
                            <a href="#sleep">
                                <img src="{{ asset($post->image->photo) }}" alt="" class="item-image" />
                            </a>
                            <figcaption class="item-description">
                                <a href="#link2">
                                    <h2 class="name">{{ strlen($post->title) > 100 ? substr($post->title, 0, 100) . "..." : $post->title }}</h2>
                                </a>
                                <span class="role">Bron: {{ isset($post->user->name) ? $post->user->name : 'Deleted Acc' }}</span>
                            </figcaption>
                        </figure>
                    @endif
                @endforeach

                @endif





                {{-- Nieuwe studie toont aan dat regelmatige powernaps de productiviteit kunnen verhogen --}}
                {{-- <img src="/images/sleepingfemale.jpg" alt="" class="item-image" /> --}}
                {{-- <figure class="gallery-item">
                    <a href="#sleep">
                        <img src="/images/olympischespelen.jpg" alt="" class="item-image" />
                    </a>
                    <figcaption class="item-description">
                        <a href="#link2">
                            <h2 class="name">Olympische Spelen in Parijs 2024 introduceren nieuwe sporten om jongere
                                doelgroepen te bereiken</h2>
                        </a>
                        <span class="role">Bron: ChatGPT</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="#sleep">
                        <img src="/images/wnba.jpeg" alt="" class="item-image" />
                    </a>
                    <figcaption class="item-description">
                        <a href="#link2">
                            <h2 class="name">WNBA-sterren protesteren tegen ongelijkheid in salarissen en
                                investeringen</h2>
                        </a>
                        <span class="role">Bron: ChatGPT</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="#sleep">
                        <img src="/images/area51.jpg" alt="" class="item-image" />
                    </a>
                    <figcaption class="item-description">
                        <a href="#link2">
                            <h2 class="name">Gelekte beelden van area 51</h2>
                        </a>
                        <span class="role">Bron: ChatGPT</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="#sleep">
                        <img src="/images/tiktok.jpg" alt="" class="item-image" />
                    </a>
                    <figcaption class="item-description">
                        <a href="#link2">
                            <h2 class="name">TikTok introduceert nieuwe functies om cyberpesten aan te pakken</h2>
                        </a>
                        <span class="role">Bron: ChatGPT</span>
                    </figcaption>
                </figure> --}}
            </div>
        </section>
        <section class="container-3-border" data-aos="fade-down" data-aos-duration="700">
            <div class="container-3">
                <h1>Iets Gemist?</h1>

            </div>
            <div class="nieuws-2">
                <ul>
                    @foreach ($posts as $post)
                    @if ($loop->iteration >= 6 && $loop->iteration <= 8)
                    <li>
                        <p class="textColor">{{ strlen($post->title) > 80 ? substr($post->title, 0, 80) . "..." : $post->title }}</p>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="button-container">
                <button onclick="location.href='/nieuws'" style="position: absolute;bottom: 10px;left: 12px;height: 40px;" class="button-24-2">Bekijk Meer</button>
            </div>
        </section>
    </div>

    @for ($i = 5; $i < count($posts); $i+=3)

        <div class="onder-img" style="width: 100%;">
            @for ($j = $i; $j < $i + 3; $j++)

                @if (isset($posts[$j]))

                    <div class="img-hover-zoom">
                        <img style="cursor: pointer;" src="{{ asset($posts[$j]->image->photo) }}" alt="This zooms-in really well and smooth" height="205" width="500">
                        {{-- <span id="boxx">
                            <p style="position: absolute;bottom: -9px;">Meer</p>
                        </span> --}}
                        <a href="#Corona">
                            <span>test title lol</span>
                        </a>
                        <p class="textColor">{{ strlen($post->title) > 60 ? substr($post->title, 0, 60) . "..." : $post->title }}</p>
                        <a href="#Corona">
                        {{-- <span id="box-1">
                            <p style="position: absolute;bottom: -9px;">Meer</p>
                        </span> --}}
                        <i class="fa-solid arrow fa-arrow-down" style="position: relative;top: -29px;left: 79px;"></i>
                        </a>
                    </div>

                @endif

            @endfor

        </div>

    @endfor


    {{-- <div class="onder-img">
        <div class="img-hover-zoom">
          <img src="..//images/covid.jpg" alt="This zooms-in really well and smooth" height="205" width="500">
          <a href="#Corona">
            <span>Corona</span>
          </a>
          <p>Nieuwe maatregelen tegen verspreiding van coronavirus in Nederland</p>
          <a href="#Corona">
            <span id="box-1">
              <p>Meer</p>
            </span>
            <i class="fa-solid fa-arrow-down"></i>
          </a>
        </div> --}}




    {{-- <div class="onder-img">
        <div class="img-hover-zoom">
          <img src="..//images/covid.jpg" alt="This zooms-in really well and smooth" height="205" width="500">
          <a href="#Corona">
            <span>Corona</span>
          </a>
          <p>Nieuwe maatregelen tegen verspreiding van coronavirus in Nederland</p>
          <a href="#Corona">
            <span id="box-1">
              <p>Meer</p>
            </span>
            <i class="fa-solid fa-arrow-down"></i>
          </a>
        </div>

        <div class="img-hover-zoom">
          <img src="..//images/fehnerbache.jpg" alt="This zooms-in really well and smooth" height="205" width="500">
          <a href="#Euroleague">
            <span>Euroleague</span>
          </a>
          <p>Fenerbahce wint van Panathinaikos in intense Euroleague wedstrijd</p>
          <a href="#Euroleague">
            <span id="box-1">
              <p>Meer</p>
            </span>
            <i class="fa-solid fa-arrow-down" id="arrow-2"></i>
          </a>
        </div>

        <div class="img-hover-zoom">
          <img src="..//images/blikje.jpg" alt="This zooms-in really well and smooth" height="205" width="500">
          <a href="#Zaterdag">
            <span>Vanaf zaterdag</span>
          </a>
          <p>Blikje meenemen voor statiegeld: gaan we dat echt doen?</p>
          <a href="#Zaterdag">
            <span id="box-1">
              <p>Meer</p>
            </span>
            <i class="fa-solid fa-arrow-down" id="arrow-3"></i>
          </a>
        </div>
    </div> --}}

    {{ $posts->links() }}


    @if (session()->has('success'))
    <div x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>
                {{ session('success') }}
            </p>
        </div>
    @endif

    <!--Hero end-->
</x-layout>
