<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\User;
class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(user $userModel)//这里是模型的依赖注入
    {

    	//DB::table('name')->get();

    	// 指定一个选择字句
        //1.直接数据库查询
		//$users = DB::table('user')->where('status',1)->get();

        //2.先将数据表模型出来
        $users = $userModel->where('status',1)->get();

		//必须将以上的数据转变成数组才能赋值给模板
		$assgin=compact('users');
		//或者
		// [
		// 	'users'	=>	$users
		// ];

		//$users=compact('phone','email','ct_time');
		//dump($users);
        return view('admin.table-list',$assgin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $userModel)
    {
       	
    	$data=user::get();
    	dump($data);

        // $data=new user();
        // $okok=$data->get();
        // dump($okok);

        $data = users::get();
        dump($data);
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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





    public function delete($id)
    {
        $user=new user();
        $data=[
            'status'=>0
        ];
        $res=$user->where('id',$id)->update($data);

        if (empty($res) || $res==FALSE) {
            return '更新失败';
            exit();
        }

        //dump($res);

        return redirect()->back();
    }


}
