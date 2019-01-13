<?php

namespace App\Events;

use App\Document;
use Illuminate\Foundation\Events\Dispatchable;


class DocumentDownloaded {
    
    use Dispatchable;
    
    public function __construct(Document $document)
    {
        if ( !$this->isDownloaded($document))
        {
            $document->downloads += 1;
            $document->save();
            $this->storeInSession($document);
        }
        
    }
    
    private function isDownloaded($document)
    {
        $downloaded = request()->session()->get('downloaded', []);
        if ($downloaded === null)
        {
            return false;
        }
        if (array_key_exists($document->id, $downloaded))
            return true;
    }
    
    private function storeInSession($document)
    {
        $downloaded = request()->session()->get('downloaded', []);
        $downloaded[$document->id] = "downloaded";
        request()->session()->put("downloaded", $downloaded);
    }
    
}
