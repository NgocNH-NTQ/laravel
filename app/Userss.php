<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class Userss extends Model
{
    protected $table = 'Userss';
    protected $fillable = ['name','age','email','phone','address'];
    protected $hidden = ['created_at','updated_at','is_deleted'];

    /*
    *@Desc: Get all user
    *@Author: NgocNH <ngoc.nguyen.hong@ntq-solution.com.vn>
    *@Update: 2015/10/20
    **/
    public function getListUsers()
    {
        $aryResult = array();
        $aryResult = Userss::all()->toArray();
        return $aryResult;
    }

}