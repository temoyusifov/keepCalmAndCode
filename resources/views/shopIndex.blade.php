

@section('auth')
    <h5>Hello my name is: <?=$username;?></h5>
@endsection

@section('notAuth')
    <h5>I'm not a auth.</h5>
@endsection

@extends('poligonDesign/Eshopper.index')