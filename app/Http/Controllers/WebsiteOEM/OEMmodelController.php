<?php

namespace App\Http\Controllers\WebsiteOEM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;

class OEMmodelController extends Controller
{


    public function Fourwheeler_OEM(Request $request)
    {
      
        
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where  Products='4wheeler' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from fourwheelerspecsfeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $fourwspecs = DB::select($sql2);
        return view('DekhoevWebsite/OEM/4Wheeler_OEM', ['fourwspecs' => $fourwspecs],['Oemvalues' => $Oemvalues])->with('fourwspecs', $fourwspecs)->with('Oemvalues',$Oemvalues);
    }


    public function Twowheeler_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='2wheeler' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);
        
        $sql2 = "select * from twowheelerspecsfeatures where OEM_name='$OEMName' AND  Status='Active'ORDER BY id DESC";
        $twowspecs = DB::select($sql2);

        return view('DekhoevWebsite/OEM/2Wheeler_OEM',['Oemvalues' => $Oemvalues])->with('twowspecs', $twowspecs)->with('Oemvalues',$Oemvalues);
    }


    public function Threewheeler_Cargo_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='3wheeler Cargo' ORDER BY id DESC ";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from threewheelercargofeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $threewcargo = DB::select($sql2);
        return view('DekhoevWebsite/OEM/3Wheeler_Cargo_OEM', ['threewcargo' => $threewcargo],['Oemvalues' => $Oemvalues])->with('threewcargo', $threewcargo)->with('Oemvalues',$Oemvalues);
       
    }


    public function Threewheeler_Pass_OEM(Request $request)
    {
        $OEMName = $request->input('new_oem_name');
        session()->put('new_oem_name', $OEMName);

        $sql1 = "select * from brandmasters Where Products='3wheeler Pass' ORDER BY id DESC";
        $Oemvalues = DB::select($sql1);

        $sql2 = "select * from threewheelerpassfeatures where OEM_name='$OEMName' AND  Status='Active' ORDER BY id DESC";
        $threewpass = DB::select($sql2);
        return view('DekhoevWebsite/OEM/3Wheeler_Pass_OEM', ['threewpass' => $threewpass],['Oemvalues' => $Oemvalues])->with('threewpass', $threewpass)->with('Oemvalues',$Oemvalues);
    }


}
