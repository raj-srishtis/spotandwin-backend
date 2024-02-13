@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Participants List</div>

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
    <a href="{{ route('dashboard.download.csv') }}" class="btn btn-primary">Download CSV</a>
    <table id="participants-table">
        <thead>
            <tr>
                <th>id</th>
                <th>uid</th>
                <th>device</th>
                <th>browser</th>
                <th>os</th>
                <th>user_ip</th>
                <th>created_date</th>
                <th>source</th>
                <th>gameTry</th>
                <th>encryptkey</th>
                <th>nextClick</th>
                <th>beginChallengeClick</th>
                <th>sheikhFound</th>
                <th>locationConfirmed</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>mobile</th>
                <th>fbshare</th>
                <th>wtshare</th>
                <th>twshare</th>
                <th>timeInSeconds</th>
                <th>language</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $participant)
                <tr>
                    <td>{{ $participant->id }}</td>
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
    <p>
        {{ $participants->links('pagination::bootstrap-4') }}
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