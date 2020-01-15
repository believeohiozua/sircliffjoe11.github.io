@extends('layouts.user-master')
@section('title', 'Brainstaq | New Campaign')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>Create <span class="text-primary">Campaign</span></h3><br>

    <form method="POST" action="{{ route('campaings.create') }}">
        <div class="form-group">
            <label for="campaign-title" style="font-weight: bold;">Enter the title of your campaign</label>
            <input type="text" class="form-control" id="campaign-title" maxlength="25" aria-describedby="campaign-title" placeholder="Campaign Title">
            <small id="numberCount" class="form-text text-muted">Maximum of 25 characters</small>
        </div>
    
        <div class="form-group" data-width="auto">
            <label for="campaign-title" style="font-weight: bold;">Description</label><br>
            <small class="form-text text-muted">Enter a short description of your campaign</small>
            <textarea type="text" class="form-control" id="campaign-description" maxlength="100" aria-describedby="campaign-description" placeholder="Campaign Description"></textarea>
            <small id="numberCount" class="form-text text-muted">Maximum of 100 characters</small>
        </div>
    
        <p style="font-weight: bold;">Campaign Image</p>
        <div class="ml-2 col-sm-6">
            <div id="msg">
                <form method="post" id="image-form">
                    <input type="file" name="img[]" class="file" accept="image/*">
            </div>    
    
        </div><br>
        <div class="ml-2 col-sm-6">
            <img src="#" id="preview" class="img-thumbnail fa fa-user" style="width:50px; height: 50px;">
        </div><br>

        <div class="form-group">
            <label for="address" style="font-weight: bold;">Enter your address</label>
                <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Address">
        </div>
    
        <p style="font-weight: bold;">Category</p>
        <select class="select-css" data-width="auto">
            <option value="" disabled selected>Select category</option>
                                  <option value="1">Agriculture</option>
                                  <option value="2">Arts & Culture</option>
                                  <option value="3">Beauty & Fashion</option>
                                  <option value="4">Business</option>
                                  <option value="5">Community</option>
                                  <option value="6">Design</option>
                                  <option value="7">Education</option>
                                  <option value="1">Entertainment</option>
                                  <option value="1">Food</option>
                                  <option value="1">Gadgets</option>
                                  <option value="1">Internet</option>
                                  <option value="1">IT & Telecoms</option>
                                  <option value="1">Kids</option>
                                  <option value="1">Media & Publishing</option>
                                  <option value="1">Recipes</option>
                                  <option value="1">Renewable Energy</option>
                                  <option value="1">Science & Technology</option>
                                  <option value="1">Social Networks</option>
                                  <option value="1">Social & Organization</option>
                                  <option value="1">Sports & Hobbies</option>
                                  <option value="1">Startups</option>
                                  <option value="1">Sustainability</option>
                                  <option value="1">Tourism & Travel</option>
                                  <option value="1">Transportation</option>
                                  <option value="1">Web & Applications</option>
                                  <option value="1">Writings</option>
                                  <option value="1">Other</option>
                                  <!--<option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>
                                  <option value="1"></option>-->
        </select><br>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="acceptTerms">
            <label class="form-check-label" for="acceptTerms">Accept Brainstaq's<a href="{{ route('terms') }}">Terms and Conditions</a></label>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>

    
</div>

<hr>
@endsection