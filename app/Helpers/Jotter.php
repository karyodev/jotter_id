<?php 

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

Class Jotter{
    public static function makeid($size, $name, $table){
        $tanggal = Carbon::today()->isoFormat('DDMMYYYY');
        $rnd = Str::random($size);
        $kode = $name.$tanggal.$rnd;
        $id = DB::table($table)->where('id', $kode)->get('id');
        if($id){
            while(!$id){
                $rnd = Str::random(10);
                $kode = $name.$tanggal.$rnd;
                $id = DB::table($table)->where('id', $kode)->get('id');
            }
        }
        return $kode;
    }
}