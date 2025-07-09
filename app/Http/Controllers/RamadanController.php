<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Company;
use Carbon\Carbon;  // Add this line to import Carbon
use Illuminate\Support\Facades\Storage;

class RamadanController extends Controller
{
 public function show()
 {
     // Pass the city name to the view
     return view('ramadan-2025');
 }

 public function template($template){
    $templateId = $template;

    return view('ramadan.template-form', ['templateId' => $templateId]);
 }

 public function getclientDetails(Request $request){
    if ($request->hasFile('logo')) {
            $file = $request->file('logo');
        
            // Check if the file extension is allowed
            if (!in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'])) {
                return back()->withErrors(['logo' => 'Only image files (JPG, JPEG, PNG, GIF, BMP, WEBP) are allowed.']);
            }
        
            // Generate a unique filename based on the current date and time
            $filename = Carbon::now()->format('Y-m-d_H-i-s') . '.' . $file->getClientOriginalExtension();
        
            // Store the image using the 'external' disk
            $filePath = $file->storeAs('images', $filename, 'external');
        
            // Generate the URL to access the file
            $logoPath = Storage::disk('external')->url($filePath); // URL of the uploaded file
        
        } else {
            $logoPath = null; // No logo uploaded
        }

    // $company = Company::create($request->all());
    $company = Company::create(array_merge(
        $request->only(['company_name', 'slogan', 'website', 'address', 'number', 'email', 'template_code']),
        ['logo' => $logoPath] // Add the logo URL/path manually
    ));

    $templates = [
        1 => 'ramadan.template',
        2 => 'ramadan.template2',
        3 => 'ramadan.template3',
        4 => 'ramadan.template4',
        // Add more template mappings as needed
    ];

    // Check if a template exists for the given code
    if (isset($templates[$company->template_code])) {
        return view($templates[$company->template_code], compact('company'));
    }
    // return response()->json([
    //     'message' => 'Client details saved successfully',
    //     'data' => $company
    // ], 201);
 }
 
 public function sample($code){
        
        $id = 23;
        // Fetch the company data using the static ID
        $company = Company::find($id);
        if (!$company) {
            return redirect()->back()->with('error', 'Company not found.');
        }

        // Define the templates mapping
        $templates = [
            1 => 'ramadan.template',
            2 => 'ramadan.template2',
            3 => 'ramadan.template3',
            4 => 'ramadan.template4',
            // Add more template mappings as needed
        ];

        // Check if a template exists for the given template_code
        
        if (isset($code)) {
            return view($templates[$code], compact('company'));
        }

        // Fallback if no template is found
        return redirect()->back()->with('error', 'Template not found.');
 }
 public function wish($name){
    $n = $name;
    return view('ramadan.wish', compact('n'));
 }
 
 private $ramadanData = [
        "ramadan_2025" => [
            ["date" => "2025-03-02", "sehri" => "05:06 AM", "iftar" => "06:02 PM"],
            ["date" => "2025-03-03", "sehri" => "05:05 AM", "iftar" => "06:02 PM"],
            ["date" => "2025-03-04", "sehri" => "05:04 AM", "iftar" => "06:03 PM"],
            ["date" => "2025-03-05", "sehri" => "05:03 AM", "iftar" => "06:04 PM"],
            ["date" => "2025-03-06", "sehri" => "05:02 AM", "iftar" => "06:04 PM"],
            ["date" => "2025-03-07", "sehri" => "05:02 AM", "iftar" => "06:05 PM"],
            ["date" => "2025-03-08", "sehri" => "05:01 AM", "iftar" => "06:05 PM"],
            ["date" => "2025-03-09", "sehri" => "05:00 AM", "iftar" => "06:06 PM"],
            ["date" => "2025-03-10", "sehri" => "04:59 AM", "iftar" => "06:06 PM"],
            ["date" => "2025-03-11", "sehri" => "04:58 AM", "iftar" => "06:07 PM"],
            ["date" => "2025-03-12", "sehri" => "04:57 AM", "iftar" => "06:07 PM"],
            ["date" => "2025-03-13", "sehri" => "04:56 AM", "iftar" => "06:08 PM"],
            ["date" => "2025-03-14", "sehri" => "04:55 AM", "iftar" => "06:08 PM"],
            ["date" => "2025-03-15", "sehri" => "04:53 AM", "iftar" => "06:09 PM"],
            ["date" => "2025-03-16", "sehri" => "04:52 AM", "iftar" => "06:09 PM"],
            ["date" => "2025-03-17", "sehri" => "04:51 AM", "iftar" => "06:10 PM"],
            ["date" => "2025-03-18", "sehri" => "04:50 AM", "iftar" => "06:10 PM"],
            ["date" => "2025-03-19", "sehri" => "04:49 AM", "iftar" => "06:11 PM"],
            ["date" => "2025-03-20", "sehri" => "04:48 AM", "iftar" => "06:11 PM"],
            ["date" => "2025-03-21", "sehri" => "04:47 AM", "iftar" => "06:12 PM"],
            ["date" => "2025-03-22", "sehri" => "04:46 AM", "iftar" => "06:12 PM"],
            ["date" => "2025-03-23", "sehri" => "04:45 AM", "iftar" => "06:12 PM"],
            ["date" => "2025-03-24", "sehri" => "04:44 AM", "iftar" => "06:13 PM"],
            ["date" => "2025-03-25", "sehri" => "04:43 AM", "iftar" => "06:13 PM"],
            ["date" => "2025-03-26", "sehri" => "04:42 AM", "iftar" => "06:14 PM"],
            ["date" => "2025-03-27", "sehri" => "04:40 AM", "iftar" => "06:14 PM"],
            ["date" => "2025-03-28", "sehri" => "04:39 AM", "iftar" => "06:15 PM"],
            ["date" => "2025-03-29", "sehri" => "04:38 AM", "iftar" => "06:15 PM"],
            ["date" => "2025-03-30", "sehri" => "04:37 AM", "iftar" => "06:16 PM"],
            ["date" => "2025-03-31", "sehri" => "04:36 AM", "iftar" => "06:16 PM"]
        ]
    ];

public function getToday()
{
    $timezone = 'Asia/Kolkata';
    $now = Carbon::now($timezone);
    $todayDate = $now->format('Y-m-d');

    // Get today's data
    $todayData = collect($this->ramadanData['ramadan_2025'])
        ->firstWhere('date', $todayDate);

    // Validate today's data
    if (!$todayData || !isset($todayData['sehri'], $todayData['iftar'])) {
        return response()->json([
            'message' => 'No data available for today',
            'nextDay' => false
        ], 404);
    }

    // Parse times with correct AM/PM format
    try {
        $sehriTime = Carbon::createFromFormat(
            'Y-m-d h:i A', 
            "{$todayData['date']} {$todayData['sehri']}", 
            $timezone
        );

        $iftarTime = Carbon::createFromFormat(
            'Y-m-d h:i A', 
            "{$todayData['date']} {$todayData['iftar']}", 
            $timezone
        );
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Time parsing error: ' . $e->getMessage(),
            'nextDay' => false
        ], 400);
    }

    // Check if we should show next day's data
    if ($now->gt($iftarTime)) {
        $nextDayDate = $now->copy()->addDay()->format('Y-m-d');
        $nextDayData = collect($this->ramadanData['ramadan_2025'])
            ->firstWhere('date', $nextDayDate);

        if ($nextDayData) {
            return response()->json(array_merge($nextDayData, [
                'nextDay' => true
            ]));
        }

        return response()->json([
            'message' => 'Ramadan timetable completed',
            'nextDay' => false
        ], 404);
    }

    // Return today's data
    return response()->json(array_merge($todayData, [
        'nextDay' => false
    ]));
}


 public function getAll()
{
    return response()->json($this->ramadanData);
}


 public function getByDate($date)
{
    $data = collect($this->ramadanData['ramadan_2025'])->firstWhere('date', $date);
    return response()->json($data ?? ['message' => 'No data found for this date']);
}
public function getByRange(Request $request)
{
    $start = $request->query('start');
    $end = $request->query('end');

    if (!$start || !$end) {
        return response()->json(['message' => 'Please provide start and end dates']);
    }

    $data = collect($this->ramadanData['ramadan_2025'])->whereBetween('date', [$start, $end]);

    return response()->json($data->isNotEmpty() ? $data->values() : ['message' => 'No data found for this range']);
}
public function getNext()
{
    $today = Carbon::today()->toDateString();
    $data = collect($this->ramadanData['ramadan_2025'])->where('date', '>=', $today)->first();

    return response()->json($data ?? ['message' => 'Ramadan data is not available for future dates']);
}
public function getPrevious()
{
    $today = Carbon::today()->toDateString();
    $data = collect($this->ramadanData['ramadan_2025'])->where('date', '<', $today)->last();

    return response()->json($data ?? ['message' => 'No previous data found']);
}
public function getDuration()
{
    $dates = collect($this->ramadanData['ramadan_2025'])->pluck('date');
    return response()->json([
        'start_date' => $dates->first(),
        'end_date' => $dates->last(),
    ]);
}

public function ramadanDocumentation(){
    return view('api-documentation');
}


}