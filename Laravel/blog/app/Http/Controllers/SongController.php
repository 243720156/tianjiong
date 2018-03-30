<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'name'=>'nihao',
            'email'=>'123@qq.com',
            'password'=>'666',
            'address'=>'tjyj',
            'status'=>1,
            'ct_time'=>time()
        ];
        $res=DB::table('user')->insert($data);

        dd($res);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "这是create方法啊";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //查询表内全部内容,相当于select()
        $data=DB::table('user')->get();
        dump($data);
        //获取一条
        $one=DB::table('user')->where('id',1)->get();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {   
        $data=[
            'name'=>'nihao',
            'email'=>'123@qq.com',
            'password'=>'666',
            'address'=>'天炯眼镜',
            'status'=>1,
            'ct_time'=>time()
        ];

        $updata=DB::table('user')->where('id',1)->update($data);

        dump($updata);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
