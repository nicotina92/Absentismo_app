@extends('layouts.sidebar')

@section('scripts')
    

    
@endsection
@section('styles')

    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('admin-content')

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">

            MY Calender    

        </div>

        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>

</div>

@endsection