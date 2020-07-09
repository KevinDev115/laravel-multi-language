@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                
                </div>

                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        {{__("Hello!")}}
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        {{ __("How are you?") }}
                    </div>
                    <div class="alert alert-success" role="alert">
                        {{ __("Success!") }}
                    </div>
                    <div class="alert alert-danger" role="alert">
                        {{__("Unauthorized")}}
                    </div>
                    <div class="alert alert-warning" role="alert">
                        {{__("Whoops!")}}
                    </div>
                    <div class="alert alert-info" role="alert">
                        {{__("You are logged in!")}}
                    </div>
                    <div class="alert alert-light" role="alert">
                        {{__("Regards")}}
                    </div>
                    <div class="alert alert-dark" role="alert">
                        {{__("All rights reserved.")}}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <p>{{ __("Positive people are the ones who fall, get up, shake, heal the scratches, smile at life and say:") }}</p>
                    <b>{{ __("Here I go again") }}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
