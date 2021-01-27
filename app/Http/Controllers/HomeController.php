<?php

namespace App\Http\Controllers;

use App\PortalFunction;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactUs;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Welcome to Skoolblike - Homepage';
        function generateRandomString($length) {
            $key = '';
            $keys = array_merge(range(0, 9), range('A', 'Z'), range('a', 'z'));

            for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
            }

            return $key;
        }
        $code_generate = generateRandomString(16);
        return view('pages.home', compact('title','code_generate'));
    }

    public function schools(Request $request)
    {
        $title = 'Partnered Schools';
        $schools = School::where('schoolcode', '!=', 'SCH0000')->where('active', true)->get();
        return view('pages.schools', compact('title','schools'));
    }

    public function aboutUs(Request $request)
    {
        $title = 'About Us';
        return view('pages.aboutUs', compact('title'));
    }

    public function features(Request $request)
    {
        $title = 'Features';
        $portalFunctions = PortalFunction::where('status', true)->get();
        return view('pages.features', compact('title','portalFunctions'));
    }

    public function pricing(Request $request)
    {
        $title = 'Pricing';
        return view('pages.pricing', compact('title'));
    }
    
    public function tutorials(Request $request)
    {
        $title = 'Tutorials';
        return view('pages.tutorials', compact('title'));
    }

    public function download(Request $request)
    {
        $title = 'Download';
        return view('pages.download', compact('title'));
    }

    public function contact(Request $request)
    {
        $title = 'Contact Us';
        if ($request->has('name')){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => 'Feedback'.' '.$request->subject,
                'message' => $request->message,
            ];
            Mail::to('info@skoolblike.com')->send(new contactUs($data));
        }
        return view('pages.contact', compact('title'));
    }

    public function download_app(Request $request)
    {
        $title = 'Contact Us';
        return view('pages.download_app', compact('title'));
    }

}
