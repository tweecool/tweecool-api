<?php
namespace Tweecool;

class Tweecool
{
    
    
    public static function get($screenname = 'tweecool', $count = 3)
    {
       
        // Request
        $url = 'http://api.tweecool.com/?screenname='.$screenname.'&count='.$count;
        
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch); 
        
        
        return json_decode($output);
        
             
        
    }
    
}