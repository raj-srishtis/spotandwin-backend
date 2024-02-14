@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Participants List
                        <a href="{{ route('dashboard.download.csv') }}" target="_blank" class="btn btn-primary pull-right">Download CSV</a>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th scope="col">id</th>
                                             <th scope="col">uid</th>
                                             <th scope="col">device</th>
                                             <th scope="col">browser</th>
                                             <th scope="col">os</th>
                                             <th scope="col">user_ip</th>
                                             <th scope="col">created_date</th>
                                             <th scope="col">source</th>
                                             <th scope="col">gameTry</th>
                                             <th scope="col">encryptkey</th>
                                             <th scope="col">nextClick</th>
                                             <th scope="col">beginChallengeClick</th>
                                             <th scope="col">sheikhFound</th>
                                             <th scope="col">locationConfirmed</th>
                                             <th scope="col">name</th>
                                             <th scope="col">email</th>
                                             <th scope="col">age</th>
                                             <th scope="col">mobile</th>
                                             <th scope="col">fbshare</th>
                                             <th scope="col">wtshare</th>
                                             <th scope="col">twshare</th>
                                             <th scope="col">timeInSeconds</th>
                                             <th scope="col">language</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach($participants as $participant)
                                             <tr>
                                                 <th scope="row">{{ $participant->id }}</td>
                                                 <td>{{ $participant->uid }}</td>
                                                 <td>{{ $participant->device }}</td>
                                                 <td>{{ $participant->browser }}</td>
                                                 <td>{{ $participant->os }}</td>
                                                 <td>{{ $participant->user_ip }}</td>
                                                 <td>{{ $participant->created_date }}</td>
                                                 <td>{{ $participant->source }}</td>
                                                 <td>{{ $participant->gameTry }}</td>
                                                 <td>{{ $participant->encryptkey }}</td>
                                                 <td>{{ $participant->nextClick }}</td>
                                                 <td>{{ $participant->beginChallengeClick }}</td>
                                                 <td>{{ $participant->sheikhFound }}</td>
                                                 <td>{{ $participant->locationConfirmed }}</td>
                                                 <td>{{ $participant->name }}</td>
                                                 <td>{{ $participant->email }}</td>
                                                 <td>{{ $participant->age }}</td>
                                                 <td>{{ $participant->mobile }}</td>
                                                 <td>{{ $participant->fbshare }}</td>
                                                 <td>{{ $participant->wtshare }}</td>
                                                 <td>{{ $participant->twshare }}</td>
                                                 <td>{{ $participant->timeInSeconds }}</td>
                                                 <td>{{ $participant->language }}</td>
                                             </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                             <div>
                                 {{ $participants->links('pagination::bootstrap-4') }}
                             </div>
                         </div>
                    </div>
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