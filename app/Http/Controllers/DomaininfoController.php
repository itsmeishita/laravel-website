<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomaininfoController extends Controller
{
    public function showDomainInfo(Request $request)
    {
        // Check if the request is an AJAX request
        if ($request->ajax()) {
            $domain = $request->input('domain', 'google.com');
            $apiKey = 'at_zHGOmweE6fmy1MTiLWsIikV7OEvDz';

            try {
                $response = Http::get("https://www.whoisxmlapi.com/whoisserver/WhoisService", [
                    'apiKey' => $apiKey,
                    'domainName' => $domain,
                    'outputFormat' => 'JSON',
                ]);

                if ($response->failed()) {
                    return response()->json(['error' => 'Failed to fetch WHOIS information'], 500);
                }

                $data = $response->json();

                return response()->json([
                    'domain' => $domain,
                    'whois' => $data,
                ]);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
            }
        }

        // If it's not an AJAX request, return the view
        return view('domain');
    }
}
