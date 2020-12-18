<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class JobOfferController extends Controller
{
    public function index($id)
    {
        $results = DB::select('select * from job_offers where id = :id', ['id' => $id]);
        
        $data = [
            'title' => $results[0]->title,
            'description' => $results[0]->description,
            'cash' => $results[0]->cash
        ];
        
        return view('joboffer', $data);
    }
}