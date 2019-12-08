<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Contracts\SubscriberContract;
use App\Http\Controllers\BaseController;

class SubscriberController extends BaseController
{
    protected $subscriberRepository;

    public function __construct(SubscriberContract $subscriberRepository)
    {
        $this->subscriberRepository = $subscriberRepository;
    }

    public function index()
    {
        $subscribers = $this->subscriberRepository->listSubscribers();

        $this->setPageTitle('Subscribers', 'List of all subscribers');
        return view('admin.subscribers.index', compact('subscribers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|unique:subscribers'
        ]);

        $subscriber = $this->subscriberRepository->createSubscriber($request); 
    
        if (!$subscriber) {
            return $this->responseRedirectBack('An error occurred. Please try again later.', 'error', true, true);
        }
                
        return $this->responseRedirect('subscriber.thanks', 'You are now subscribed to our newletters.' ,'success',false, false);


    }

    public function thanks()
    {        
        $this->setPageTitle('', '');
        return view('guest.newsletters.thank-you');
    }
}
