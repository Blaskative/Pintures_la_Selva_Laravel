@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')


@stop

@section('content')

@livewire('admin.galeria-create')



@stop

@section('css')

<link rel="stylesheet" href="{{asset('css/upload.css')}}">
@stop

@section('js')
@livewireScripts
<script src="/js/upload.js"></script>
 
@stop
