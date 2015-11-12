<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/10/15
 * Time: 9:50 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as TestController;

class ContactController extends TestController
{
    public function index()
    {
        $data['title']="Contact Page";
        $data['cell']='01714905039';
        $data['email']="raejsh@coderstrust.com";
        $data['addr']="Azimpur Dhaka";
        return view('pages.contact',$data);
    }

}