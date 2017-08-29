@extends('layouts.website')

@section('title', 'Application Process')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Application Process</h1>
        </div>
      </div>
    </div>
    <h2>Timeline</h2>
    <blockquote><strong>The dates below are <em>unconfirmed</em> and will <em>almost definitely change</em>. Please do not make any plans based on these dates.</strong></blockquote>
    <table>
      <tr>
        <td><b>Monday 11 September</b></td>
        <td><b>00:00</b></td>
        <td>Applications open via this website</td>
      </tr>
      <tr>
        <td><b>Tuesday 12 September</b></td>
        <td><b>11:10-12:15</b></td>
        <td>Public information meeting for people interested in applying in <b>E009</b></td>
      </tr>
      <tr>
        <td><b>Sunday 17 September</b></td>
        <td><b>23:59</b></td>
        <td>Deadline for applications. No more will be accepted after this time.</td>
      </tr>
      <tr>
        <td><b>Wednesday 20 September</b></td>
        <td><b>11:10-13:00</b></td>
        <td>Elections</td>
      </tr>
      <tr>
        <td><b>Wednesday 20 September</b></td>
        <td></td>
        <td>Election winners informed.</td>
      </tr>
      <tr>
        <td><b>Monday 25 September</b></td>
        <td><b>16:30</b></td>
        <td>First meeting of the new PC, positions determined, winners announced.</td>
      </tr>
    </table>

    <h2>Applying</h2>
    <p>When applications open, fill out the form <a href="{{ route('form') }}">here</a> and your application will be saved and processed by us.</p>


    <h2>Elections</h2>
    <p>On the day of the elections, all the candidates and class reps will assemble at the Salle des Fétes. One by one, each candidate will give a speech explaining why they should be in the Pupils' Committee. <b>The speech has a time limit of 2 minutes, unless they are applying for both Leisure Committee and a non-Leisure position, in which case it is 3 minutes.</b> Because there are a lot of applicants, we ask that all candidates respect the time limit to allow the elections to proceed smoothly.</p>

    <p><b>Only class reps can vote.</b> They will each be given a ballot paper as they come in. <a href="{{ asset('images/ballot-sample.png') }}">Click here to see a sample ballot paper.</a> They must put a mark next to each person, in either the "Yes", "Maybe" or "No" columns. If someone is applying for both Leisure Committee and a non-Leisure position, they will have two rows, one for each position. Each of these will be counted separately.</p>

    <p>After the elections the votes will be counted by the Electoral Board. We will aim to inform the candidates on the same day, however there may be unforeseen delays. Candidates will be informed by email and, if they entered their phone number, by text message.</p>

    <p><b>The election only determines which people make it into the Pupils' Committee, not their positions.</b></p>

    <p>The week after the elections, the Pupils' Committee will meet for the first time. In this meeting, the positions will be distributed to the members. After this meeting the winners will be announced publically.</p>
  </div>
@endsection