@extends('dashboard.layouts.default')

@section('content')
    <style>
        h2 {
            font-size: 2.4em;
            margin-bottom: 0;
            color: #6b6b6b;
            font-weight: 300;
        }
    </style>

    <div class="center-content">
        <h2>Dashboard</h2>
    </div>

    @if(true)
        {{ $session->getFlashMessage() }}
    @endif
@endsection