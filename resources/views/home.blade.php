@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Benvenuto!') }}
                    </div>
                    <div class="card-body">
                        Ecco il tuo codice QR:
                        <div><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $userId }}"
                                alt=""></div>
                    </div>
                </div>
                <div class="card">
                    <a class="btn btn-primary" href="{{ route('contacts.create') }}">Aggiungi contatti</a>


                </div>
            </div>
        </div>
    </div>
@endsection
