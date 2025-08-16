@extends('layout')

@section('content')
<h2 class="section-title">Work Experience</h2>
<div class="cards">
  @foreach($experiences as $exp)
    <div class="card">
      <h3>{{ $exp['title'] }}</h3>
      <p>{{ $exp['desc'] }}</p>
    </div>
  @endforeach
</div>

<h2 class="section-title">Projects</h2>
<div class="cards">
  @foreach($projects as $proj)
    <div class="card">
      <h3>{{ $proj['title'] }}</h3>
      <p>{{ $proj['desc'] }}</p>
    </div>
  @endforeach
</div>
@endsection
