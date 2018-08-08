@extends('master')

@section ('content')

<div class="container">


    <div class="col-xs-12 col-sm-12 col-lg-12 story-display">

        <h1 class="center-headline"> A Story by:


        @foreach ($users as $user)

        <span class="user-word">{{ $user->name }}</span>
        </h1>


        @endforeach



        @foreach ($words as $word)

        <p class="story-paragraph">
            
            A 
            <span class="user-word">
            {{ $word->noun }}</span>
            
            recently
            <span class="user-word">{{ $word->verb }}</span>


        @endforeach

            right next to the police station and 


            @foreach ($words as $word)
            <span class="user-word">
        {{ $word->famous_person }}
        </span>
            @endforeach

            
        didn't say a thing.
        
        </p>


    </div>



 </div>

 

    <div class="titles col-md-12 bottom-section-ask">
        <p class="col-md-12">Wanna see more?</p>
        
        <a href="/maker"> 

        
        <button class="btn  btn-primary  btn-large fire-button col-sm-12 col-md-6 col-lg-6">Go Again</button></a>
       
       
        </div>

 </div>

  @endsection



