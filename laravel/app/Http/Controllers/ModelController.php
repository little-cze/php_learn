<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use function MongoDB\BSON\toJSON;

class ModelController extends Controller
{
    public function demo(){
        echo Input::stream;
    }


    //php  artisan make:model Member
    public function test(Request $request)
    {

        $model = new Member();

        $request = $model->create($request->all());
        dd($request);
    }

    public function add()
    {
        ///AR模式
        ///
        $model = new Member();//映射关系1：将表映射到模型
        $model->id = '9';
        $model->firstname = 'aaa'; //映射关系2：将字段映射到属性，属性名和字段名一致
        $model->age = '123';
        $model->email = '1123@qq.com';
        $model->save();//映射关系3：将记录映射到实例

    }

    public function del()
    {
        ///获取需要删除的对象
        $data = Member::find(12);
        dd($data->delete());

    }

    public function update()
    {
        $data = Member::find(9)->email = '123@qq.com';

    }

    public function select()
    {
        $data = Member::getActualClassNameForMorph("age");

        $data1 = Member::all();

        $data2 = Member::find(9);
        $data2->email = '123@qq.com';
        $result = $data2->save();

        dd($result);

    }
}
