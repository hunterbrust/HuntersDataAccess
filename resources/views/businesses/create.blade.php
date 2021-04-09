@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection


@section('content')
    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Business</h1>

        <form method="POST" action="/businesses" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>

                <div class="control">
                    <input 
                    class="input @error('name') is-danger @enderror" 
                    type="text" 
                    name="name" 
                    id="name"
                    value="{{old('name')}}">
                    @error('name')
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>

                <div class="control">
                    <input 
                    class="input @error('email') is-danger @enderror" 
                    type="email" 
                    name="email" 
                    id="email"
                    value="{{old('email')}}">
                    @error('title')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="logo">Logo</label>
                <input type="file" id="logo" name="logo" accept="image/*">
                @error('logo')
                        <p class="help is-danger">{{$errors->first('logo')}}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </div>
        
    </div>
@endsection