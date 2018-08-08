@extends('master')
@section ('content')

    <div class="container">
    




        
     
        <div class="maker-section">
        <p class="lead col-md-12"><a href="/stories">View recent story</a></p>

          <h4 class="mb-3">User name</h4> 

       

         <form method="POST" action="/maker" class="needs-validation" novalidate>

{{ csrf_field() }}

<div class="row">
  <div class="col-md-6 mb-3">
  <label for="firstName">First name</label>
  <input type="text" name ="firstName" class="form-control" id="firstName" placeholder="Alfred" value="" required>
    <div class="invalid-feedback">
    Valid first name is required.
    </div>
    </div>
    <div class="col-md-6 mb-3">
    <label for="lastName">Last name</label>
    <input type="text" name ="lastname" class="form-control" id="lastName" placeholder="Jones" value="" required>
    <div class="invalid-feedback">
    Valid last name is required.
    </div>
  </div>
</div>



<div class="mb-3">
<label for="email">Email <span class="text-muted">(Required)</span></label>
<input type="email" name ="email" class="form-control" id="email" placeholder="you@example.com">
<div class="invalid-feedback">
Please enter a valid email address to save your story.
</div>
</div>

<div class="mb-3">
<label for="noun">Noun</label>
<input type="text" name ="noun" class="form-control" id="noun" placeholder="boulder, parchment, scythe" required>
<div class="invalid-feedback">
Please enter a noun.
</div>
</div>

<div class="mb-3">
<label for="verb">verb</label>
<input type="text" name ="verb" class="form-control" id="verb" placeholder="jumped">
</div>


<div class="mb-3">
<label for="Famous_Person">Famous person</label>
<input type="text" name ="famous_person" class="form-control" id="famous_person" placeholder="Abe Lincoln, Igor Stravinsky">
</div>



<hr class="mb-4">
<button class="btn  btn-primary  btn-large fire-button col-sm-12 col-md-12 col-lg-12" type="submit">Create your story!</button>
</form>

        </div>
      </div>

  
    </div>
    @endsection