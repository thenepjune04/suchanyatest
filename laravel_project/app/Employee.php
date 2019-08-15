<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
        //ชื่อตารางในฐานข้อมูล
    protected $table = "employees";
        //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["name","age","address","salary","position_id"];    
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
    public static function search($q){
        return self::where("name","like","%{$q}%")           
            ->orWhere("age","like","%{$q}%")         
            ->orWhere("address","like","%{$q}%")         
            ->orWhere("salary","like","%{$q}%")
            ->get();
            }
    public static function storeItem($item){
        return self::create($item); 			//RETURN OBJECT
            }
                
    public static function updateItem($id, $item){
        self::findOrFail($id)->update($item); 	//NO NEED TO RETURN
            }   
    public static function destroyItem($id){
        self::findOrFail($id)->delete();
            }
                
                         
}

    