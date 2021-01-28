<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FileList;

class DbList extends Controller
{
    function show()
    {
        $data= FileList::all('mailing_name', 'mailing_date', 'name', 'file_path');
        return view('list',['files'=>$data]);
    }

    function csv_to_array ($fname)
    {
        $header = null;
        $data = array();
        if (($handle = fopen('../public/uploads/'.$fname, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, ',')) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
    
                return view('details', ['files'=>$data], ['name'=>$fname]);
    }

}