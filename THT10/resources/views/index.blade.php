@extends('layouts.app')

@section('content')
        <header class="grid-item">
            <h1 class="title">Music Genres</h1>
            <p>
            </p>
            <button id="toggleDarkMode">Toggle Dark Mode</button>
        </header>

        <nav class="grid-item">
            <h1>
                <span class="spanstyle2">Ichiro</span><span class="spanstyle1">Albert</span>
            </h1>
            <ul id="genreList"></ul>
            <li>
                <a href="#acoustic">Acoustic</a>
            </li>
            <li>
                <a href="#rock">Rock</a>
            </li>
            <li>
                <a href="#jazz">Jazz</a>
            </li>
            <li>
                <a href="#classical">Classical</a>
            </li>
            <li>
                <a href="#hiphop">HipHop</a>
            </li>
            </ul>
        </nav>
        <main class="grid-item">
            <p id="currentTime">
            </p>
            <section id="acoustic">
                <img src="{{ asset('IMG\guitar-756326_1280.jpg')}}" alt="Acoustic">
                <p>Acoustic</p>
                <p>"Musik akustik seperti pelukan hangat di telinga saya, menenangkan dan menyentuh hati. Dengan mudah membawa saya ke kabin yang nyaman di hutan, dikelilingi oleh ketenangan."</p>
            </section>
            <section id="rock">
                <img src="{{ asset('IMG\istockphoto-1371976428-612x612.jpg')}}" alt="Rock">
                <p>Rock</p>
                <p>"Musik rock, adrenalin yang dibutuhkan playlist saya! Riff gitar yang kuat dan ketukan yang energik membuat setiap momen terasa seperti klimaks dari petualangan epik."</p>
            </section>
            <section id="jazz">
                <img src="{{ asset('IMG\saxophone-4473023_640.jpg')}}" alt="Jazz">
                <p>Jazz</p>
                <p>"Jazz adalah musik yang setara dengan pesta makan malam yang canggih. Pesona improvisasi dan melodi yang halus menciptakan suasana yang berkelas dan sangat menawan."</p>
            </section>
            <section id="classical">
                <img src="{{ asset('IMG\as.jpg')}}" alt="Classical">
                <p>Classical</p>
                <p>"Musik klasik adalah mahakarya yang tak lekang oleh waktu, seperti berjalan melalui galeri seni yang penuh dengan emosi. Setiap nadanya merupakan sebuah karya jenius, melukiskan gambaran yang jelas dalam teater pikiran."</p>
            </section>
            <section id="hiphop">
                <img src="{{ asset('IMG\hip-hop-1536x1022.jpg')}}" alt="HipHop">
                <p>HipHop</p>
                <p>"Hip-Hop, puisi jalanan! Iramanya yang berirama dan liriknya yang mentah menceritakan kisah kehidupan, perjuangan, dan kemenangan. Ini adalah soundtrack hutan kota, sangat otentik."</p>
            </section>
        </main>
        <footer class="grid-item">
            <p>&copy; 2023 IchiroAlbert_105221022
        </footer>
    </div>
@endsection