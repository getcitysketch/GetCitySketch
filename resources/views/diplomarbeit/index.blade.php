@extends('layouts.layout')

@section('content')
    <h1>Diplomarbeit</h1>

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
    <label for="da-progress">Fortschritt</label>
    <progress id="da-progress" value="0" max="100"> 0% </progress>

    <hr>
    <h2>Downloads</h2>
    <ul>
        <li>Ansuchen</li>
        <li>Antrag</li>
        <li>Infos</li>
    </ul>
@endsection