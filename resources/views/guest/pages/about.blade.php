@extends('layouts.guest-master')
@section('title', 'Brainstaq | About')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>About <span class="text-primary">Brainstaq</span></h3>
    
    <div id="about">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              We see initiatives, projects, and businesses starting up here and there, especially in Africa, only to disappear quickly due to lack of funds. Those that are resilient enough soon become difficult to sustain over a period of time. Without adequate finances and funding, most of the ideas that can change the African narrative are rarely able to break out from being just an idea, let alone grow into a tangible business.
            </p>

            <p style="font-weight: bold; color: gray; font-size: 18px;">This is the problem which Brainstaq solves!</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-globe-africa fa-lg"></i></div>
              <h4 class="title"><a href="">Our Mission</a></h4>
              <p class="description">Brainstaq is on a mission to help empower creative and innovative ideas and encourage development among African startups and small businesses.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-handshake fa-lg"></i></div>
              <h4 class="title"><a href="">What We Are</a></h4>
              <p class="description">It is an online community to share, validate, and market your ideas, projects, insights and inspiration and attract cofounders and investors by engaging the power of the crowd.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fas fa-project-diagram fa-lg"></i></div>
              <h4 class="title"><a href="">What We Do</a></h4>
              <p class="description">Brainstaq provide the tools to validate your idea, amplify your reach, enhance collaboration and source for funding for your projects, all in full transparency.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{ asset('frontend/images/banner.jpg') }}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('frontend/images/eye.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Join the Movement</h4>
            <p>
              We want all those ideas to have a chance to grow and give them a fighting chance to reach their true potential.
            </p>
            <p>
              We believe every African should have the tools to create the solutions of tomorrow. And we are dedicating ourselves to make that happen!
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="{{ asset('frontend/images/glass.jpg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Our goals for the next 5 years are:</h4>
            <ul>
                <li>Empower 10,000 innovative ideas and projects.</li>
                <li>Encourage development in Africa, by creating a pool of solutions needed to effect lasting changes.</li>
                <li>Help 200 Brainers get cofounders in Africa</li>
                <li>Fund 100 projects</li>
            </ul>
          </div>
          
        </div>
    </div>
    <p>Contact us: <a href="{{ 'info@brainstaq.com' }}">info@brainstaq.com</a></p>
    <p>Support: <a href="{{ 'support@brainstaq.com' }}">support@brainstaq.com</a></p><br>

    <h3 class="text-center">Frequently Asked Questions</h3><br>

                <ul id="faq-list" class="wow fadeInUp">
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1" style="text-decoration: none;">What is Brainstaq? </a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                                Brainstaq is an online community to share, validate, and market your ideas, projects,
                                insights and inspiration and attract cofounders and investors by engaging the power of
                                the crowd.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed" style="text-decoration: none;">Who is Brainstaq for? </a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Brainstaq is great for African entrepreneurs, startups, small businesses, organizations,
                                and more - and for the sponsors and backers who want to support and collaborate with
                                them.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed" style="text-decoration: none;">Can I use Brainstaq for free? </a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                You can set up an account for absolutely free. However, there are fees to accept
                                funding. If you want to do crowdfunding and generate receipts, you need to pay the
                                Brainstaq 10% platform fee. Payment processing fees are determined by the providers we
                                use, Paystack.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed" style="text-decoration: none;">Does it work in my country? </a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                It works for all <a href="{{ route('countries') }}">African countries</a>. People can contribute from anywhere by credit card, with donations denominated in the currency of the creator. Payouts work everywhere our payment provider, Paystack serves.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed" style="text-decoration: none;">How is Brainstaq different from other
                            platforms? </a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Brainstaq is different. It's fully transparent (you can see where money comes from and
                                where it goes), and designed for African creators.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed" style="text-decoration: none;">How much does it cost? </a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Pricing is based on a small percentage commission on the total amount of funds raised
                                through the platform, which is 10%.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq7" class="collapsed" style="text-decoration: none;">Can I get a receipt for my donations?
                            </a>
                        <div id="faq7" class="collapse" data-parent="#faq-list">
                            <p>
                                Yes! One main purpose of Brainstaq is to provide transparency
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq8" class="collapsed" style="text-decoration: none;">How can I contact you? </a>
                        <div id="faq8" class="collapse" data-parent="#faq-list">
                            <p>
                                Email: <a href="{{ 'support@brainstaq.com' }}">support@brainstaq.com
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq9" class="collapsed" style="text-decoration: none;">How can I contribute to Brainstaq? </a>
                        <div id="faq9" class="collapse" data-parent="#faq-list">
                            <p>
                                We run as a Campaign ourselves. You can contribute money or translations. And we'd
                                really love it if you
                                shared
                                your own idea and contributed by growing the community!
                            </p>
                            <p>For more info about how you can contribute to Brainstaq, <a href="{{ 'support@brainstaq.com' }}">contact us.</a></p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- #faq -->
</div>
<hr>

@endsection