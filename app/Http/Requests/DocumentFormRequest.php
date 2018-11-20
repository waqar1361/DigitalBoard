<?php

namespace App\Http\Requests;

use App\Department;
use App\Document;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class DocumentFormRequest extends FormRequest {
    
    public $data;
    protected $fileExtention;
    
    public function authorize()
    {
        if (auth()->check())
            return true;
        
        return false;
    }
    
    public function rules()
    {
        return [
            'upload_file' => 'required|mimes:pdf,docx,png,jpg,jpeg|max:5120',
            'subject'     => 'required|min:4',
            'tags'        => 'nullable|string',
            'type'        => 'required|in:notice,notification',
            'department'  => 'required|exists:departments,id',
            'issued_at'   => 'required|date',
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
        
        $fileName = preg_replace(['/\s+/', '/\./'], '', microtime());;
        $this->fileExtention = $this->upload_file->getClientOriginalExtension();
        
        $this->data = [
            'subject'       => $this->subject,
            'tags'          => $tags,
            'type'          => $this->type,
            'department_id' => $this->department,
            'issued_at'     => $this->issued_at,
            'file'          => $fileName,
            'extension'     => $this->fileExtention,
        ];
        
        
    }
    
    public function persist()
    {
        Document::create($this->data);
    }
    
    public function storeFile()
    {
        $this->upload_file->
        storeAs('public', $this->data['file'] . "." . $this->fileExtention);
    }
}
