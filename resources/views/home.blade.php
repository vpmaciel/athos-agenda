@extends('layouts.main_layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            @include('layouts.main_menu')
        </div>
        <br>
        <div class="col-md-6 col-sm-8">
            <div class="card p-5">

                <!-- logo -->
                <div class="text-center p-3">
                    <h3>Athos Agenda</h3>
                </div>

                <!-- form -->
                <div class="row justify-content-center">
                    <div class="col-md-10 col-12">
                        <blockquote>
                        Sua Agenda Digital Inteligente!<br>
                        Organize seus compromissos de forma simples e eficiente. Com o athos agenda, você pode:<br>
                        - Agendar reuniões e eventos em poucos cliques.<br>
                        - Receber notificações e lembretes automáticos.<br>
                        - Gerenciar sua agenda de forma prática e segura.<br>
                        - Acessar de qualquer dispositivo, a qualquer momento.
                        </blockquote>
                    </div>
                </div>

                <!-- copy -->
                <div class="text-center text-secondary mt-3">
                    <small>&copy; <?= date('Y') ?> Notes</small>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
