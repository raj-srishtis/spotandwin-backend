@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Total Participants</div>
              <div class="card-body">
                 <p>Total Participants</p>
                 <h5 class="card-title">{{$total_participants_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Web Activations</div>
              <div class="card-body">
                 <p>Web Activations</p>
                 <h5 class="card-title">{{$web_participants_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Mobile Activations</div>
              <div class="card-body">
                 <p>Mobile Activations</p>
                 <h5 class="card-title">{{$mobile_participants_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Next Button Clicks</div>
              <div class="card-body">
                 <p>Next Button Clicks</p>
                 <h5 class="card-title">{{$next_btn_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Begin Challenge Clicks</div>
              <div class="card-body">
                 <p>Begin Challenge Clicks</p>
                 <h5 class="card-title">{{$begin_challenge_click_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Location Confirmed Clicks</div>
              <div class="card-body">
                 <p>Location Confirmed Clicks</p>
                 <h5 class="card-title">{{$location_confirmed_click_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Shares on FB</div>
              <div class="card-body">
                 <p>Shares on FB</p>
                 <h5 class="card-title">{{$fbshare_click_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Shares on WhatsApp</div>
              <div class="card-body">
                 <p>Shares on WhatsApp</p>
                 <h5 class="card-title">{{$wtshare_click_count}}</h5>
              </div>
           </div>
        </div>
        <div class="col-lg-3">
           <div class="card  mb-3">
              <div class="card-header">Shares on X</div>
              <div class="card-body">
                 <p>Shares on X</p>
                 <h5 class="card-title">{{$twshare_click_count}}</h5>
              </div>
           </div>
        </div>
    </div>
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