@extends('layouts.app')
@section('content')




<a href="{{ route('userappointment.create',$user->id)}}" class="btn btn-primary">Book Appointment</a>

@endsection



