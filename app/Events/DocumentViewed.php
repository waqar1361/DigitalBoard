<?php

namespace App\Events;

use App\Document;
use Illuminate\Foundation\Events\Dispatchable;

class DocumentViewed {
    
    use Dispatchable;
    
    public function __construct(Document $document)
    {
        if ( ! $this->isViewed($document))
        {
            $document->views += 1;
            $document->save();
            $this->storeInSession($document);
        }
    }
    
    private function isViewed($document)
    {
        $viewed = request()->session()->get('viewed', []);
        if ($viewed === null)
        {
            return false;
        }
        if (array_key_exists($document->id, $viewed))
            return true;
    }
    
    private function storeInSession($document)
    {
        $viewed = request()->session()->get('viewed', []);
        $viewed[$document->id] = "viewed";
        request()->session()->put("viewed", $viewed);
    }
    
}