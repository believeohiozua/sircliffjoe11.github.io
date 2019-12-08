@extends('layouts.guest-master')
@section('title', 'Brainstaq | Register')

@section('content')

    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create <span class="text-primary">Account</span></h4>
            <p class="text-center">Get started with Brainstaq, its free!</p>
            <p>
                <a href="#" class="btn btn-block btn-twitter"><i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="#" class="btn btn-block btn-facebook"><i class="fab fa-facebook-f"></i>   Login via facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

              <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" placeholder="Full Name" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- form-group -->
                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input id="username" type="text" class="form-control @error('username') 
                    is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong></span>
                        @enderror
                </div>

                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend control-label">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input id="datepicker" type="text" class="date form-control @error('birth_date') 
                    is-invalid @enderror" name="birth_date" placeholder="Date of Birth" value="{{ old('birth_date') }}">
                        @error('birth_date')
                        <span class="invalid-feedback" role="alert" >
                            <strong>
                                {{ $message }}
                            </strong></span>
                        @enderror
                   
                </div>
                    <!-- Script -->
                
                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
                    </div>
                    <select class="custom-select form-control @error('country') is-invalid @enderror" name="country">
                        <option value="" disabled selected>Choose your country</option>
                                  <option value="1">Algeria</option>
                                  <option value="2">Angola</option>
                                  <option value="3">Benin</option>
                                  <option value="4">Botswana</option>
                                  <option value="5">Burkina Faso</option>
                                  <option value="6">Burundi</option>
                                  <option value="7">Cape Verde</option>
                                  <option value="8">Cameroon</option>
                                  <option value="9">Central African Republic (CAR)</option>
                                  <option value="10">Chad</option>
                                  <option value="11">Comoros</option>
                                  <option value="12">Republic of the Congo</option>
                                  <option value="13">Democratic Republic of Congo</option>
                                  <option value="14">Cote d'Ivoire</option>
                                  <option value="15">Djibouti</option>
                                  <option value="16">Egypt</option>
                                  <option value="17">Equatorial Guinea</option>
                                  <option value="18">Eritrea</option>
                                  <option value="19">Eswatini (formerly Swaziland)</option>
                                  <option value="20">Ethiopia</option>
                                  <option value="21">Gabon</option>
                                  <option value="22">Gambia</option>
                                  <option value="23">Ghana</option>
                                  <option value="24">Guinea</option>
                                  <option value="25">Guinea-Bissau</option>
                                  <option value="26">Kenya</option>
                                  <option value="27">Lesotho</option>
                                  <option value="28">Liberia</option>
                                  <option value="29">Libya</option>
                                  <option value="30">Madagascar</option>
                                  <option value="31">Malawi</option>
                                  <option value="32">Mali</option>
                                  <option value="33">Mauritania</option>
                                  <option value="34">Mauritius</option>
                                  <option value="35">Morocco</option>
                                  <option value="36">Mozambique</option>
                                  <option value="37">Namibia</option>
                                  <option value="38">Niger</option>
                                  <option value="39" selected>Nigeria</option>
                                  <option value="40">Rwanda</option>
                                  <option value="41">Sao Tome and Principe</option>
                                  <option value="42">Senegal</option>
                                  <option value="43">Seychelles</option>
                                  <option value="44">Sierra Leone</option>
                                  <option value="45">Somalia</option>
                                  <option value="46">South Africa</option>
                                  <option value="47">South Sudan</option>
                                  <option value="48">Sudan</option>
                                  <option value="49">Tanzania</option>
                                  <option value="50">Togo</option>
                                  <option value="51">Tunisia</option>
                                  <option value="52">Uganda</option>
                                  <option value="53">Zambia</option>
                                  <option value="54">Zimbabwe</option>
                    </select>
                        @error('country')
                        <span class="invalid-feedback" role="alert" >
                            <strong>
                                {{ $message }}
                            </strong></span>
                        @enderror
                </div>

                <!-- form-group -->
                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    
                    <select class="custom-select form-control @error('country') is-invalid @enderror" name="country-code" style="max-width: 120px;">
                        <option selected="">+213</option>
                        <option value="1">+224</option>
                        <option value="2">+229</option>
                        <option value="3">+267</option>
                        <option value="3">+226</option>
                        <option value="3">+257</option>
                        <option value="3">+237</option>
                        <option value="3">+238</option>
                        <option value="3">+236</option>
                        <option value="3">+235</option>
                        <option value="3">+269</option>
                        <option value="3">+243</option>
                        <option value="3">+253</option>
                        <option value="3">+20</option>
                        <option value="3">+240</option>
                        <option value="3">+291</option>
                        <option value="3">+251</option>
                        <option value="3">+241</option>
                        <option value="3">+220</option>
                        <option value="3">+233</option>
                        <option value="3">+224</option>
                        <option value="3">+245</option>
                        <option value="3">+225</option>
                        <option value="3">+254</option>
                        <option value="3">+266</option>
                        <option value="3">+231</option>
                        <option value="3">+218</option>
                        <option value="3">+261</option>
                        <option value="3">+265</option>
                        <option value="3">+223</option>
                        <option value="3">+222</option>
                        <option value="3">+230</option>
                        <option value="3">+212</option>
                        <option value="3">+258</option>
                        <option value="3">+264</option>
                        <option value="3">+227</option>
                        <option value="3" selected>+234</option>
                        <option value="3">+250</option>
                        <option value="3">+239</option>
                        <option value="3">+221</option>
                        <option value="3">+248</option>
                        <option value="3">+232</option>
                        <option value="3">+252</option>
                        <option value="3">+27</option>
                        <option value="3">+211</option>
                        <option value="3">+249</option>
                        <option value="3">+268</option>
                        <option value="3">+255</option>
                        <option value="3">+228</option>
                        <option value="3">+216</option>
                        <option value="3">+256</option>
                        <option value="3">+260</option>
                        <option value="3">+263</option>
                    </select>
                        @error('country-code')
                        <span class="invalid-feedback" role="alert" >
                            <strong>
                                {{ $message }}
                            </strong></span>
                        @enderror

                    <input id="phone" type="text" class="form-control @error('phone') 
                    is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert"  >
                            <strong>
                                {{ $message }}
                            </strong></span>
                        @enderror
                </div>

                <!-- form-group end -->
                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" placeholder="Password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <!-- form-group -->
                <div><small class="text-danger"></small></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" 
                    name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                </div>

                <!-- form-group -->                                      
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Create Account') }}
                    </button>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="{{ route('terms') }}" required> Terms & Conditions</a> 
                        </label>
                      </div>
                    </div>
                  </div>
                <!-- form-group -->      
                <p class="text-center">Have an account?<a href="{{ route('login') }}"> Log In</a></p>                                                            
            </form>
    </article>

                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'dd-mm-yyyy'

     });  

</script>  
@endsection
