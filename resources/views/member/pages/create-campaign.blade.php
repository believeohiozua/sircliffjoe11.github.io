@extends('layouts.member-master')
@section('title', 'Brainstaq | Create Campaign')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
        <h3>Create <span class="text-primary">Campaign</span></h3>
            <div class="text-center">
                <p>
                    <a href="#"><img src="{{ asset('frontend/images/Untitled3.png') }}" class="img-fluid" style="height: 150px; width: 350px;">
                    </a>
                </p>
            <h3>Let's get you started!</h3>
                <p style="font-size: 20px;">We are here to help you succeed - please fill out the information below to get started. <br><strong>Your responses cannot be changed for this particular campaign.</strong></p>
        </div><br>

        <h5>Who are you raising money for?</h5>
            <p>Please choose receiving account type</p>
            <div class="form-check">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Personal Account</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">Corporate Account</label>
            </div><br>

        <h5>Where are you located?</h5>
            <p>Choose your country of residence or where your business is located. See <a href="{{ route('countries') }}">eligible countries.</a></p>
            <select class="select-css" data-width="auto">
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

            <h5>Currency</h5>
            <p>Select your prefered currency</p>
                        <select class="select-css" data-width="auto">
                <option value="" disabled selected>Select currency</option>
                                  <option value="1">Algerian dinar (DZD)</option>
                                  <option value="2">Angolan kwanza (AOA)</option>
                                  <option value="3">CFA franc</option>
                                  <option value="4">Botswana pula</option>
                                  <option value="5">CFA franc</option>
                                  <option value="6">Burundi franc</option>
                                  <option value="7">Cape Verdean escudo</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Comorian franc</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Congolese franc</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Djiboutian franc</option>
                                  <option value="1">Egyptian pound</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Eritrean nakfa</option>
                                  <option value="1">Lilangeni</option>
                                  <option value="1">Ethiopian birr</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Dalasi</option>
                                  <option value="1">Ghanaian cedi</option>
                                  <option value="1">Guinean franc</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Kenyan shilling</option>
                                  <option value="1">Lesotho lothi</option>
                                  <option value="1">Liberian dollar</option>
                                  <option value="1">Libyan dinar</option>
                                  <option value="1">Malagasy ariary</option>
                                  <option value="1">Malawian kwacha</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Ouguiya</option>
                                  <option value="1">Mauritian rupee</option>
                                  <option value="1">Moroccan dirham</option>
                                  <option value="1">Mozambican metical</option>
                                  <option value="1">Namibian dollar</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Nigerian naira</option>
                                  <option value="1">Rwandan franc</option>
                                  <option value="1">Sao Tome and Principe dobra</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Seychellois rupee</option>
                                  <option value="1">Sierra Leonean leone</option>
                                  <option value="1">Somali shilling</option>
                                  <option value="1">South African rand</option>
                                  <option value="1">South Sudanese pound</option>
                                  <option value="1">Sudanese pound</option>
                                  <option value="1">Tanzanian shilling</option>
                                  <option value="1">CFA franc</option>
                                  <option value="1">Tunisian dinar</option>
                                  <option value="1">Ugandan shilling</option>
                                  <option value="1">Zambian kwacha</option>
                                  <option value="1">RTGS Dollar</option>
            </select><br>
            <a href="{{ route('new-campaign') }}"><button type="button" class="btn btn-primary">Start Campaign</button></a>
            
</div>

<hr>
@endsection