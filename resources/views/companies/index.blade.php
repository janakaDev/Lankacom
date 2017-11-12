  
@extends('layouts.app')

@section('content')
  <div class="panel panel-primary col-md-6 col-lg-6 col-md-offset-3">
    <div class="panel-heading">My Companies</div>
    <div class="panel-body">
       
      <ul class="list-group">
        @foreach($companies as $company)
          <li class="list-group-item"> <a href="/companies/{{$company->id}}"> {{ $company->name }}</a></li>
        @endforeach
      </ul>

    </div>
  </div>
@endsection