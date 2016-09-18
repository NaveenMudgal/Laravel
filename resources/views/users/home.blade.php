@extends('layouts.master')
@section('content')
<h2> home page for user: {{ \Auth::user()->name }} </h2>
@endsection