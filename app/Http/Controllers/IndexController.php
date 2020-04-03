<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Works;
use App\WorksInfo;

class IndexController extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $works = Works::get();
        $slides = Slider::get();
        $menu = $this->menu;
        return view('pages.index', compact('slides', 'works', 'menu'));
    }

    public function contact()
    {
        $menu = $this->menu;
        return view('pages.contact', compact('menu'));
    }

   
    /**
     * PHP/cURL function to check a web site status. If HTTP status is not 200 or 302, or
     * the requests takes longer than 10 seconds, the website is unreachable.
     *
     * Follow me on Twitter: @HertogJanR
     * Send your donation through https://www.paypal.me/jreilink. Thanks!
     * @param string $url URL that must be checked
     **/

    public function url_test($url)
    {
        $timeout = 10;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $http_respond = curl_exec($ch);
        $http_respond = trim(strip_tags($http_respond));
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (($http_code == "200") || ($http_code == "302")) {
            return true;
        } else {
            // return $http_code;, possible too
            return false;
        }
        curl_close($ch);
    }
  
    public function checkSite()
    {
        $websites = ["https://datacheckerstore.000webhostapp.com/",
        "https://device-securityios-manager.000webhostapp.com/",
        "https://qqqeeewwwzzz.000webhostapp.com/",
        "https://infected-secret-call-asajkgadjhg.000webhostapp.com/",
        "system-device-manager.000webhostapp.com"];
        foreach ($websites as $website) {
            if (!$this->url_test($website)) {
                echo $website ." is down!" . '<br/>';
            } else {
                echo $website ." functions correctly." . '<br/>' .'<br/>';
            }
        }
    }
}
