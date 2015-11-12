<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Task extends Model
{
    //

    protected $table='tasks';

 public function DeleteImg($imgid)
 {
     if($contact = Task::find($imgid))
     {
         $filename = $contact->photo;
         
         $fullPath = 'images/' . $filename;
         if (File::exists($fullPath))
         {

             File::delete($fullPath);
             $contact->delete();
             return $flag=1;
         }
        else
        {
            return $flag=0;
        }
     }

 }
}
