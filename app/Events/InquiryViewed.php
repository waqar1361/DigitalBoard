<?php

namespace App\Events;

use App\Inquiry;
use Illuminate\Foundation\Events\Dispatchable;

class InquiryViewed {
    
    use Dispatchable;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Inquiry $inquiry)
    {
        if ( ! $this->isViewed($inquiry))
        {
            $inquiry->views += 1;
            $inquiry->save();
            $this->storeInSession($inquiry);
        }
    }
    
    private function isViewed($inquiry)
    {
        $viewed = request()->session()->get('faqViewed', []);
        if ($viewed === null)
        {
            return false;
        }
        if (array_key_exists($inquiry->id, $viewed))
            return true;
    }
    
    private function storeInSession($inquiry)
    {
        $viewed = request()->session()->get('faqViewed', []);
        $viewed[$inquiry->id] = "viewed";
        request()->session()->put("faqViewed", $viewed);
    }
    
    
}
