@extends('layouts.member-master')
@section('title', 'Brainstaq | Create Idea')


@section('content')

    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
        <h3>Share an <span class="text-primary">Idea</span></h3>

<form method="POST" action="{{ route('create-idea') }}">
  {{ csrf_field() }}

  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="exampleFormControlInput1">Idea Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter the title of your idea" maxlength="25" id="exampleFormControlInput1">

    @if ($errors->has('title'))
        <small>{{ $errors->first('title') }}</small>
    @endif
  
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category">
      <option value="" disabled selected>Select category</option>
                                  <option value="1">Agriculture</option>
                                  <option value="2">Arts & Culture</option>
                                  <option value="3">Beauty & Fashion</option>
                                  <option value="4">Business</option>
                                  <option value="5">Community</option>
                                  <option value="6">Design</option>
                                  <option value="7">Education</option>
                                  <option value="8">Entertainment</option>
                                  <option value="9">Food</option>
                                  <option value="10">Gadgets</option>
                                  <option value="11">Internet</option>
                                  <option value="12">IT & Telecoms</option>
                                  <option value="13">Kids</option>
                                  <option value="14">Media & Publishing</option>
                                  <option value="15">Recipes</option>
                                  <option value="16">Renewable Energy</option>
                                  <option value="17">Science & Technology</option>
                                  <option value="18">Social Networks</option>
                                  <option value="19">Social & Organization</option>
                                  <option value="20">Sports & Hobbies</option>
                                  <option value="21">Startups</option>
                                  <option value="22">Sustainability</option>
                                  <option value="23">Tourism & Travel</option>
                                  <option value="24">Transportation</option>
                                  <option value="25">Web & Applications</option>
                                  <option value="26">Writings</option>
                                  <option value="27">Other</option>
    </select><br>
    <label for="exampleFormControlSelect1">Location</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option value="" disabled selected>Choose your country</option>
                                  <option value="1">Algeria</option>
                                  <option value="2">Angola</option>
                                  <option value="3">Benin</option>
                                  <option value="4">Botswana</option>
                                  <option value="5">Burkina Faso</option>
                                  <option value="6">Burundi</option>
                                  <option value="7">Cape Verde</option>
                                  <option value="1">Cameroon</option>
                                  <option value="1">Central African Republic (CAR)</option>
                                  <option value="1">Chad</option>
                                  <option value="1">Comoros</option>
                                  <option value="1">Republic of the Congo</option>
                                  <option value="1">Democratic Republic of Congo</option>
                                  <option value="1">Cote d'Ivoire</option>
                                  <option value="1">Djibouti</option>
                                  <option value="1">Egypt</option>
                                  <option value="1">Equatorial Guinea</option>
                                  <option value="1">Eritrea</option>
                                  <option value="1">Eswatini (formerly Swaziland)</option>
                                  <option value="1">Ethiopia</option>
                                  <option value="1">Gabon</option>
                                  <option value="1">Gambia</option>
                                  <option value="1">Ghana</option>
                                  <option value="1">Guinea</option>
                                  <option value="1">Guinea-Bissau</option>
                                  <option value="1">Kenya</option>
                                  <option value="1">Lesotho</option>
                                  <option value="1">Liberia</option>
                                  <option value="1">Libya</option>
                                  <option value="1">Madagascar</option>
                                  <option value="1">Malawi</option>
                                  <option value="1">Mali</option>
                                  <option value="1">Mauritania</option>
                                  <option value="1">Mauritius</option>
                                  <option value="1">Morocco</option>
                                  <option value="1">Mozambique</option>
                                  <option value="1">Namibia</option>
                                  <option value="1">Niger</option>
                                  <option value="1">Nigeria</option>
                                  <option value="1">Rwanda</option>
                                  <option value="1">Sao Tome and Principe</option>
                                  <option value="1">Senegal</option>
                                  <option value="1">Seychelles</option>
                                  <option value="1">Sierra Leone</option>
                                  <option value="1">Somalia</option>
                                  <option value="1">South Africa</option>
                                  <option value="1">South Sudan</option>
                                  <option value="1">Sudan</option>
                                  <option value="1">Tanzania</option>
                                  <option value="1">Togo</option>
                                  <option value="1">Tunisia</option>
                                  <option value="1">Uganda</option>
                                  <option value="1">Zambia</option>
                                  <option value="1">Zimbabwe</option>
                       </select><br>
           </div>

  <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea type="text" class="form-control" maxlength="100" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a brief description of your idea" name="description"></textarea>
  
    @if ($errors->has('description'))
        <small>{{ $errors->first('description') }}</small>
    @endif
  </div>
  
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="image">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>&nbsp;
<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

<hr>
@endsection