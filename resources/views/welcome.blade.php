@extends('layouts.base')

@section('title', 'Apply to the Pupils\' Committee')

@section('body-class', 'frontpage')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1 class="frontpage-header">Apply to the Pupils' Committee</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-default frontpage-button" href="{{ route('process') }}">Election Process</a>
        <a class="btn btn-default frontpage-button" href="{{ route('positions') }}">Positions</a>
        <a class="btn btn-primary frontpage-button" href="{{ route('form') }}">Apply</a>
      </div>
    </div>
  </div>
@endsection