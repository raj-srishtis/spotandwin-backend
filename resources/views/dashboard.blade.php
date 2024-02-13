@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p>
        <h1>Total Participants</h1>
        <h3>{{$total_participants_count}}</h3>
    </p>
    <p>
        <h1>Web Activations</h1>
        <h3>{{$web_participants_count}}</h3>
    </p>
    <p>
        <h1>Mobile Activations</h1>
        <h3>{{$mobile_participants_count}}</h3>
    </p>
    <p>
        <h1>Next Button Clicks</h1>
        <h3>{{$next_btn_count}}</h3>
    </p>
    <p>
        <h1>Begin Challenge Clicks</h1>
        <h3>{{$begin_challenge_click_count}}</h3>
    </p>
    <p>
        <h1>Location Confirmed Clicks</h1>
        <h3>{{$location_confirmed_click_count}}</h3>
    </p>
    <p>
        <h1>Shares on FB</h1>
        <h3>{{$fbshare_click_count}}</h3>
    </p>
    <p>
        <h1>Shares on WhatsApp</h1>
        <h3>{{$wtshare_click_count}}</h3>
    </p>
    <p>
        <h1>Shares on X</h1>
        <h3>{{$twshare_click_count}}</h3>
    </p>
</div>
@endsection

@push('css')
<style>

</style>
@endpush
    
@push('js')    
<script>
    
</script>
@endpush