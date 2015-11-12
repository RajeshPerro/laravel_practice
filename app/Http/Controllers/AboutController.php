<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/10/15
 * Time: 9:14 PM
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as TestController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class AboutController extends TestController
{
    public function index()
    {
        $data['title']="About Page";
        $data['name']="Rajesh Ghosh";
        $data['desc']="Software Engineer";
        return view('pages.about',$data);
    }

}