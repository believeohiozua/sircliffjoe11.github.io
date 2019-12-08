@extends('layouts.guest-master')
@section('title', 'Brainstaq | Help')


@section('content')

<div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>Help</h3><br>
    <h5 style="font-weight: bold;">1. My account</h5>
    <hr style="length: 10%;">
    <p style="font-weight: bold;">Can I participate without registering?</p>
            <p>If you are not logged in, you can only read ideas and vote for them. 
                To publish ideas, comments and participate in Campaigns, you need to <a href="{{ route('login') }}">log in.</a></p> 

            <p>And if you don't yet have an account, click on <a href="{{ route('register') }}">Register,</a> it’s simple and quick.</p>

            <p style="font-weight: bold;">I haven’t received the confirmation email for my new account.</p>
            <p>This can be for several reasons:</p>
        <ul>
            <li>You entered the email address incorrectly.</li>
            <li>The process may be slower than usual.</li>
            <li>The email has entered your junk mail box: please check your Spam folder.</li>
        </ul>
        <p>If none of these reasons apply, contact us at <a href="{{ 'support@brainstaq.com' }}">support@brainstaq.com</a></p>

    <p style="font-weight: bold;">Edit my user profile</p>
    <p>Go to User > Settings in the menu bar on the top right of the screen. There you can edit your personal information.</p>
    <p style="font-weight: bold;">My account was deleted </p>
    <p>This will only happen if the Administrator considers your profile breach the Community Rules by publishing inappropriate content. If that is the case, you will always receive an email informing you that your account will be deleted.</p>

    <h5 style="font-weight: bold;">2. Community users</h5>
    <hr style="length: 10%;">
    <p style="font-weight: bold;">Communicating with other users</p> 
    <p>You can do so by leaving a comment in one of their ideas or leaving a private message on their 
        user profile.</p> 

    <p style="font-weight: bold;">Following other users</p> 
    <p>Yes, you can follow other users in the community, and other users can follow you. 
        To do so, simply access the user profile you want to follow and click the Follow 
        button next to his or her name. To stop following a user, just click on the same button again.</p> 

    <p>Each user’s profile shows the users that follow him or her, and who he or she follows. 
        Everything is public. </p>

    <p style="font-weight: bold;">Blocking a user</p>
    <p>You will be able to block other users to prevent them from following you or commenting on your ideas. 
        Also, if you find a user or a specific comment to be offensive or inappropriate, you can report it 
        and the Administration will consider eliminating such content.</p>

    <h5 style="font-weight: bold;">3. Languages</h5>
    <hr style="length: 10%;"> 
    <p>By default, when you visit brainstaq, all the content of the platform would appear in the 
        default language which is English.</p>

    <p style="font-weight: bold;">Changing the language of content</h5>
    <p>You can also select your prefered language. To do so, go to Settings > Language and select your language.</p>  

    <h5 style="font-weight: bold;">4. Reporting content</h5>
    <hr style="length: 10%;"> 
    <p>If you find there is content (ideas or comments) that does not comply with our Community Rules, you can report it. You can do that by sending an email to <a href="abuse@brainstaq.com">abuse@brainstaq.com</a>  

    <p>When you report content, you must specify the reasons for which you consider it inappropriate, from the following:</p>
    <ul>
        <li><strong>False:</strong>it is not a real idea, but rather a comment, opinion, meaningless content, etc.</li>
        <li><strong>Advertising:</strong> it is an advertising content and makes “commercial” references to sites that are external to brainstaq.</li>
        <li><strong>Offensive content:</strong> any content used to attack or intimidate other users, ethnicities, communities, or to spark violence, etc.</li>
        <li><strong>Inappropriate content:</strong> any content that is violent, pornographic, etc.</li>
        <li><strong>Copyrighted Material:</strong> any content that is copyrighted or has been copied from other websites.</li>
    </ul>
 
    <p>Reported content is then passed on to our observatory, where the brainstaq Administration will evaluate whether the content should be removed.</p>

    <h5 style="font-weight: bold;">5. Ideas</h5>
    <hr style="length: 10%;">  
    <p style="font-weight: bold;">Publishing an idea</p>
    <p>You must be logged in to share an idea, and you can do so by clicking the “Share an idea” button on your profile page.</p>

    <p>First, write the title for your idea. The title should summarize its content and contain the key words that describe it, 
        so it will appear easily in the search engine. This should not be more than 25 characters. 
        Then enter the idea’s description and include a photo, which will be the first thing users see when they 
        explore your idea.</p> 

    <p>Next, you will find several other fields to fill out, all of which are mandatory:</p>

    <p style="font-weight: bold;">Category</p>
    <p>This is the classification of your idea.</p>
    <p style="font-weight: bold;"> Property</p> 
    <p>Offers two options to establish the type of license you are publishing your idea under. 
    You can read about these licenses in the <a href="{{ route('terms') }}">Terms & Conditions.</a></p>
    <p>You can also add attached files to add value to your idea.</p> 
    <p>When your idea is complete, click on “Create idea” to publish the idea and make it visible to all other users. 

    <h5 style="font-weight: bold;">6. Intellectual property rights for ideas</h5>
    <hr style="length: 10%;"> 

    <p>When you publish your idea or challenge, you must choose between two copyright options:</p> 
    <ul>
        <li><span style="font-weight: bold;">1. Creative Commons Attribution 2.5:</span> Under this modality, you only 
            retain authorship of your idea, but you transfer all other rights over the idea. 
            So, you lose your idea’s copyright, but in exchange you receive that great feeling of sharing something.</li>

        <li><span style="font-weight: bold;">2. Brainstaq License Agreement:</span> Keep your copyright. 
            Under this modality, you only grant brainstaq and its users permission to show your idea, etc.
            However, this will not necessarily keep other people from copying your idea and using it. 
            If you are worried about patents, one possible alternative is to display only a general, 
            broad description of your idea, but not all the details.</li>
    </ul>
 
    <p style="font-style: italic;">You can find more information in the <a href="{{ route('terms') }}">Terms & Conditions.</a>

    <p style="font-weight: bold;">Why was my idea deleted?</p>
    <p>Only you can delete your ideas, but if the Administration considers that your idea does not comply with our 
    Community Rules, the idea may be deleted. If this is the case, you will always receive an email informing you of 
    its removal. Also, your ideas may be deleted if it maintains a relevance value of less 
    than 10% for six consecutive week.</p>


    <p>If you have any other queries, please do not hesitate to contact 
        us <a href="{{ 'support@brainstaq.com' }}">support@brainstaq.com</a></p>

    Thank you!
    </div>

<hr>
@endsection