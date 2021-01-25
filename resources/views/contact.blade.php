@extends('layouts.app')

@section('hero')
<section class="site-hero overlay page-inside" style="background-image: url(img/hero_2.jpg)">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center">
                <h1 class="heading" data-aos="fade-up">Kontakt</h1>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<section class="section contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Imie</label>
                            <input type="text" id="name" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Numer Telefonu</label>
                            <input type="text" id="phone" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Dodatkowe informacje</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Wyślij wiadomość" class="btn btn-primary">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p class="name">Krzysztof Bubnowski</p>
                        <p>
                            <span class="d-block">Adres:</span>
                            <span> Kalinowa 8</span>
                            <br>
                            <span> 61-436 Poznań</span>
                        </p>
                        <p>
                            <span class="d-block">Numer Telefonu:</span>
                            <span> 602 457 092</span>
                        </p>
                        <p>
                            <span class="d-block">Email:</span>
                            <span> <a href="mailto:k.bubnowski.psychoterapia@gmail.com ">k.bubnowski.psychoterapia@gmail.com </a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
