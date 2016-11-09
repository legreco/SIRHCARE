@extends('layouts.app')


@section('content')
<h1>{{ $role->name }}</h1>
<p>{{ $role->display_name }}</p>
@endsection