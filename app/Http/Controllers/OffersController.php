<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offers;

class OffersController extends Controller
{
    public function store(){
    	$offer = new Offers();
    	$offer->offer_name = request('title');
    	$offer->bandwidth = request('bandwidth');
    	$offer->cost = request('cost');
    	$offer->valid_upto = request('date');
    	$offer->save();
    	return redirect('/admin.offers');
    }
}
