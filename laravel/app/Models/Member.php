<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

///php artisan make:model Member
class Member extends Model
{
    ///定义一个$table属性。值是不要前缀的表名。如果不指定则使用类名的负数形式作为表名 修饰词：protected
    ///
    /// （可选）定义$primaryKey属性。值是主键名称，如果需要使AR模式的find方法，则可能需要制定主键Model：：find(n),在主键字段不是id的时候则需要制定主键。修饰词：protected
    ///
    ///
    /// 定义$fillable属性，表示使用模型插入数据时，允许插入到数据库的字段信息。
    use HasFactory;

    protected $table = "member";
    protected $primaryKey = 'id';
     public  $timestamps = false;
     protected $fillable = [
         'id',
         'firstname',
         'age',
         'email'
     ];

}
