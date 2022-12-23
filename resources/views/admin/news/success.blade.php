@extends('admin.layout')
@section('css')
    <style>
        body {
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <h1>Create New Success</h1>
    <strong>{{$news->title}}</strong>
    <div>{{$news->content}}</div>
    <div>{{$news->status}}</div>
@endsection
@section('script')
    <script>
        alert(1);
    </script>
@endsection

