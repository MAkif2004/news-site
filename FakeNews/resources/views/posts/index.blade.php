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
                                <span class="role">Bron: {{ $post->user->name }}</span>
                            </figcaption>
                        </figure>
                    @endif
                @endforeach

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
                <h1>Meer Nieuws</h1>

            </div>
            <div class="nieuws-2">
                <ul>
                    @foreach ($posts as $post)
                    @if ($loop->iteration >= 6)
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
    <!--Hero end-->
</x-layout>
