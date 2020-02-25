@extends('admin.layouts.master_layout')
@section('title','Service')
@section('navbar-brand')
    <a class="navbar-brand" href=""><h2>Contact</h2></a>

@endsection
@push('css')

@endpush
@section('content')
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h3>Contact Details</h3>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <p>Received at {{$contact->created_at}}</p>
                        <p>Name  : {{$contact->name}}</p>
                        <p>Email : {{$contact->email}}</p><hr>
                        <div class="card-text">
                            {{$contact->message}}
                        </div>

                    </div>

                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{route('admin.contact.index')}}">Back</a>
                </div>
            </div>
        </div>
    </div>

@stop

