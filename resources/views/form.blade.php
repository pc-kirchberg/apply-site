@extends('layouts.website')

@section('title', 'Positions')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Apply Form</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('submit') }}" method="post" id="form">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input name="first_name" id="first_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input name="last_name" id="last_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="class">Class</label>
            <input name="class" id="class" class="form-control" required>
          </div>
          <div class="form-field">
            <label for="pos1">Which position would you go for, should you be elected?</label>
            <select name="pos1" id="pos1" class="form-control" required>
              <option value="president">President</option>
              <option value="vice-president">Vice-President</option>
              <option value="secretary">Secretary</option>
              <option value="treasurer">Treasurer</option>
              <option value="cosup">CoSup</option>
              <option value="internal">Internal Committee</option>
              <option value="poster">Internal Committee (Poster Designer)</option>
              <option value="internal-relations">Internal Relations</option>
              <option value="conseil">Conseil Representative</option>
              <option value="it">IT Member</option>
              <option value="leisure">Leisure Committee</option>
            </select>
          </div>
          <div class="form-field">
            <label for="pos2">Which position would you go for, should you be elected but not get the first?</label>
            <select name="pos2" id="pos2" class="form-control">
              <option value="none"></option>
              <option value="president">President</option>
              <option value="vice-president">Vice-President</option>
              <option value="secretary">Secretary</option>
              <option value="treasurer">Treasurer</option>
              <option value="cosup">CoSup</option>
              <option value="internal">Internal Committee</option>
              <option value="poster">Internal Committee (Poster Designer)</option>
              <option value="internal-relations">Internal Relations</option>
              <option value="conseil">Conseil Representative</option>
              <option value="it">IT Member</option>
              <option value="leisure">Leisure Committee</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group control-group">
            <label for="phone">Phone Number (optional, <a tabindex="6" href="#" role="button" data-toggle="popover"
                                                          data-trigger="focus"
                                                          title="Enter phone number for SMS notifications"
                                                          data-content="If you enter your phone number, we can send you a notification via SMS if you're elected, in addition to an email. This is completely optional, and we'll delete your phone number from our servers after the election is over.">why?</a>)</label>
            <div class="controls">
              <input type="tel" id="phone" class="form-control inline">
            </div>
          </div>
          {{ csrf_field() }}
          <input type="hidden" id="phone_field" name="phone">
          <input type="hidden" id="phone_country" name="phone_country">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(function() {
       $("#phone").intlTelInput({
           "preferredCountries": ["LU", "DE", "FR", "BE"],
           "initialCountry": "LU"
       });
       $("#form").submit(function() {
           var phone = $("#phone");
           $("#phone_field").val(phone.intlTelInput("getNumber"));
           $("#phone_country").val(phone.intlTelInput("getSelectedCountryData")["iso2"]);
       });
    });
  </script>
  <script src="{{ asset('js/utils.js') }}"></script>
@endpush