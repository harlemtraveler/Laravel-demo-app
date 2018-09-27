@extends('layouts.app')

@section('content')
<h1>Services</h1>
<p>
  Lorem ipsum dolor amet retro man braid waistcoat polaroid literally
  single-origin coffee asymmetrical ethical pok pok. Plaid 3 wolf moon af
  farm-to-table kickstarter 90's. Lomo mustache photo booth post-ironic.
  Single-origin coffee af vape four loko locavore palo santo.
</p>
@if(count($services) > 0)
  <ul class="list-group">
    @foreach($services as $service)
      <li class="list-group-item">{{$service}}</li>
    @endforeach
  </ul>
@endif
@endsection
