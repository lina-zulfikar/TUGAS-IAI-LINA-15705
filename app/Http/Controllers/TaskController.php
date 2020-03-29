<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    public function pangkat2($n){ 
      $result = " ";
      $result = $n * $n;
      return $result;
    }
}