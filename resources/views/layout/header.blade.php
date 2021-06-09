<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" >
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .bckground-doctor{
            background-image: url("{{ asset('images/docteur.jpg') }}");
            min-height: 120px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;
        }
    </style>
</head>
<body class="container">
