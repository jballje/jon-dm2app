<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileUpload extends Controller
{
  public function createForm(){
    return view('upload');
  }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls',
        'mailing_name' => 'required','mailing_date' => 'required'
        ]);
      

        $fileModel = new File;

        $fileModel->mailing_name=$req->mailing_name;
        $fileModel->mailing_date=$req->mailing_date;
        $fileModel->save();

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
  }


}