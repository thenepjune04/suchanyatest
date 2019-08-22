<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class vehicle extends Model
{
    protected $table = "vehicles";
//ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
protected $fillable = ["brand","series","colour","year","mileage"];    
//Primary Key
 	protected $primaryKey = "id";
public static function getAll(){
        return self::get();
     }
public static function getItem($id){
        //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
        //return self::where('id',$id)->get($id);
    return self::findOrFail($id);
        }
public static function storeItem($item){
        return self::create($item); 			//RETURN OBJECT
                }    
}
