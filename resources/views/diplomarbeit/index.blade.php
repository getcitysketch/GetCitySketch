@extends('layouts.layout')

@section('content')
    <h1>Diplomarbeit</h1>
    <h2>Phase: {{$da_phase->value}}</h2>

    <ul>
        <li>
            <div>
                <div>Steven San Diego</div>
                <div>Graphic Designer</div>
            </div>
        </li>
        <li>
            <div>
                <div>Kamil Kruk</div>
                <div>Progrrammierer</div>
            </div>
        </li>
        <li>
            <div>
                <div>Felix Rabas</div>
                <div>Programmierer</div>
            </div>
        </li>
        <li>
            <div>
                <div>Huy Tran</div>
                <div>Essensexperte</div>
            </div>
        </li>
    </ul>

    <hr>
    <label for="da-progress">Fortschritt Insgesamt: {{$da_progress_overall->value}}%</label>
    <progress id="da-progress" value="{{$da_progress_overall->value}}" max="100"> {{$da_progress_overall->value}}% </progress>

    <label for="da-progress">Fortschritt Planung: {{$da_progress_planning->value}}%</label>
    <progress id="da-progress" value="{{$da_progress_planning->value}}" max="100"> {{$da_progress_planning->value}}% </progress>


    <hr>
    <h2>Downloads</h2>
    <ul>
        <li>Ansuchen</li>
        <li>Antrag</li>
        <li>Infos</li>
    </ul>
@endsection