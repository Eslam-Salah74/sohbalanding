<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    // Get Country And Pass it To View
    public function index(){
        try {
            // Make a GET request to the external API
            $response = Http::get('https://sohba.ourcrm.app/public/api/getCountries');

            // Check if the request was successful
            if ($response->successful()) {
                // Get the JSON response body
                $data = $response->json();
                $coutries = $data['data'];
                // Return the data to a view or as a JSON response
                return view('pages.index', compact('coutries')); // To return data to a view
                // return response()->json($data); // To return as a JSON response
            } else {
                // Handle the case where the API request fails
                return back()->withErrors(['error' => 'Failed to fetch data from the external API.']);
            }
        } catch (\Exception $e) {
            // Handle exceptions (like connection errors)
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }



public function getCitiesByCountryId($id)
{
    try {
        // Make a GET request to the external API
        $response = Http::get('https://sohba.ourcrm.app/public/api/getCitiesByCountryId/' . $id);
        // Check if the request was successful
        if ($response->successful()) {
            // Get the JSON response body
            $data = $response->json();
            $cities = $data;
            
            // Return the data as JSON response
            return response()->json($cities);
        } else {
            // Handle the case where the API request fails
            return response()->json(['error' => 'Failed to fetch data from the external API.'], 500);
        }
    } catch (\Exception $e) {
        // Handle exceptions (like connection errors)
        return response()->json(['error' => $e->getMessage()], 500);
    }
}






}
