@extends('layouts.website')

@section('title', 'Application Process')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Thank you</h1>
        </div>
        <p>Thank you for applying.</p>
        <p>The next step is to attend the elections on <b>Wednesday 20 September at 11:30 in the Salle des Fétes.</b> You will need to give a speech explaining why you should be in the Pupils' Committee. Once all the votes have been counted, we will inform you of the result via email{{ $sms ? ' and text.' : '.' }}</p>
        <p>Good luck!</p>
      </div>
    </div>
  </div>
@endsection