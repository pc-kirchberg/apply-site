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
        <form action="{{ route('submit') }}" method="post">
          <div class="form-group">
            <label for="name">First Name</label>
            <input name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="lastName">Last Name</label>
              <input name="lastName" id="lastName" class="form-control" required>
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
          <div class="form-group">
              <label for="phone">Phone Number (optional, <a tabindex="6" href="#" role="button" data-toggle="popover" data-trigger="focus" title="Enter phone number for SMS notifications" data-content="If you enter your phone number, we can send you a notification via SMS if you're elected, in addition to an email. This is completely optional, and we'll delete your phone number from our servers after the election is over.">why?</a>)</label>
              <input type="tel" name="phone" id="phone" class="form-control">
          </div>
          {{ csrf_field() }}
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection