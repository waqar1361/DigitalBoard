<?php

namespace App\Http\Requests;

use App\Department;
use App\Document;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class DocumentFormRequest extends FormRequest {
    
    public $data;
    protected $fileExtension;
    
    public function authorize()
    {
        if (auth('admin')->check())
            return true;
        
        return abort(403);
    }
    
    public function rules()
    {
        return [
            'subject'     => 'required|min:4',
            'type'        => 'required|in:notice,notification',
            'tags'        => 'nullable|string',
            'department'  => 'required|exists:departments,id',
            'issued_at'   => 'required|date',
            'upload_file' => 'required|mimes:pdf,docx,png,jpg,jpeg|max:5120',
        ];
        
    }
    
    public function ready()
    {
        $tags = $this->tags;
        $tags .= "," . $this->subject;
        $tags .= ", " . $this->type . "s";
        $tags .= ", " . Department::find($this->department)->name;
        $tags .= ", " . $this->issued_at;
        $tags .= ", " . Carbon::parse($this->issued_at)->format('j F Y');
        
        $fileName = preg_replace(['/\s+/', '/\./'], '', microtime());
        $this->fileExtension = $this->upload_file->getClientOriginalExtension();
        
        return $this->data = [
            'subject'       => $this->subject,
            'tags'          => $tags,
            'type'          => $this->type,
            'department_id' => $this->department,
            'issued_at'     => $this->issued_at,
            'file'          => $fileName,
            'extension'     => $this->fileExtension,
        ];
        
    }
    
    public function persist()
    {
        return Document::create($this->data);
    }
    
    public function storeFile($path)
    {
        $this->upload_file->storeAs('public', $path);
    }
    
}
