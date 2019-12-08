@extends('layouts.guest-master')
@section('title', 'Brainstaq | How it Works')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>How it <span class="text-primary">Works</span></h3>
    <br><br><br>

    <section id="services">
        <div class="row">
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-settings" style="color: #ff689b;"></i></div>
              <h4 class="title">1. Create a Brainstaq Account</h4>
              <p class="description">Users can create a Brainer or Investor account. Brainers can share ideas, create teams, projects and crowdfunding campaigns. Investors could be Brainers whose primary objective is supporting innovative ideas and projects financially.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-compose-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title">2. Share Your Idea</h4>
              <p class="description">Users can post ideas, creations or insights in text, image or video formats, and can even add a location to their posts. These ideas are validated by the community either by voting up/down, liking, adding comments or sharing with others.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-thumbsup" style="color: #3fcdc7;"></i></div>
              <h4 class="title">3. Get Validations</h4>
              <p class="description">Positive validations increases an idea’s ‘Relevance Bar’. Ideas with more than 75% relevance will be featured as ‘Trending Ideas’. Those with less than 10% relevance for 4 consecutive weeks will be deleted from our database.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-people-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title">4. Build Teams. Create Projects</h4>
              <p class="description">The User can build a team around an idea by inviting others to join in enhancing the idea, allowing for team work and collaboration. An idea automatically becomes a project when it has a team working on it.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-cash" style="color: #d6ff22;"></i></div>
              <h4 class="title">5. Create a Campaign. Get Funded</h4>
              <p class="description">When the relevance bar of an idea-turned-project gets to 100%, there is an option for the Brainer (and his team) to create a crowdfunding campaign for the project, where the Brainer and his team can ask for, and receive donations from the crowd in a 30-day period.<br> Terms and conditions apply – Brainstaq collects a fee of 10% of the total donation received by a project.

                The crowd here refers to the general public, family members, friends, and those within the Brainer’s circle of influence.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-android-share-alt" style="color: #4680ff;"></i></div>
              <h4 class="title">6. Give Details of Your Campaign</h4>
              <p class="description">
                Make your Campaign successful. Give details that would make donors and investors interested in supporting.<br>
                Set your funding goal. This should not be more than the equivalent of <strong>1,500 USD</strong> in your local currency, Offer perks or benefits at different levels, Define your financial and project goals clearly, Excite contributors with what their support could make possible, Fulfil the delivery of perks and benefits, Publish updates to keep your supporters posted, and Build accountability.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
</div>
<hr>


@endsection