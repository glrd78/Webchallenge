<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />

        <!-- referencement -->
        <meta name="keywords" content="">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- op meto -->
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />
        <meta property="og:title" content="" />

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($section) ? ucfirst($section) . ' | ' : '' }}{{ config('app.name') }}</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" >

    <body>
        @include('.layouts.app.partials._nav')
