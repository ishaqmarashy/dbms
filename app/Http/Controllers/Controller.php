<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

function displayTable($result) {
    $Jar=json_decode(json_encode($result), true);
    $res = " <table id=\"dataTable\" class=\"table table-bordered dataTable\" aria-describedby=\"dataTable_info\" cellspacing=\"0\" role=\"grid\"style=\"height: 100 %; width: 100 %;\" >   <thead>";
    $i = 0;
    $res .= " <tr> ";
    $res .= " <th scope=\"col\"> ROW </th>";
    $keys = array_keys($Jar[0]);
    foreach ($keys as &$col){
        $i++;
        $res .= " <th scope=\"col\"> " . $col . "</th>";}
    $i = 0;
    $res .= " </tr>  </thead>  <tbody>\n";
    foreach ($Jar as &$row){
        $res .= " <tr id=\"" . $i . "\">  ";
        $res .= " <th id=\"" . $i . "\" scope=\"row\">" . $i . "</th>";
        $ii = 0;
        foreach ($row as &$col){
            $res .= " <th  scope=\"row\">" . $col . "</th>";
            $ii++;
            }
            $res .= " </tr>\n";
            $i++;
        }
    $res .= "  </tbody> </table>";
    return $res;}