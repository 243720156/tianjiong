<?php

namespace App\Http\Controllers\Zjtj;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\user;

class ZjtjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data="okok";
        // $assign=compact('data');

        // return view('Zjtj.index',$assign);

    	$assign=array(
    			'title'=>'浙江天炯电子商务有限公司',
    			'description'	=>'天炯,天炯眼镜,浙江天炯,浙江天炯电子商务有限公司'
    	);
        return view('Zjtj.index', $assign);
    }




    public function join(Request $request)
    {   

        //验证极验验证码是否成功
        $result = $this->validate($request, 
        [
          'geetest_challenge' => 'geetest',
        ], [
          'geetest' => config('geetest.server_fail_alert')
        ]);
        if (!$request) {
          return '验证出错';
        }

        $data=$request->input();

        $email=$request->input('email');

        $phone=$request->input('phone');
        if (empty($email) || empty($phone)) {
            return redirect('/Zjtj/index')->with('error', '用户名和邮箱不能为空');
        }

        $userModel=new user();

        $add=$userModel->insert(
            [   'phone'=>$phone,
                'email'=>$email,
                'status'=>1,
                'username'=>$request->input('username'),
                'ct_time'=>time()
            ]
        );

        if (!$add) {
            report($add);
            return redirect('/Zjtj/index')->with('error', '保存失败');
            exit();
        }

        return redirect('/Zjtj/index')->with('success', '提交成功!');

    }


    /**
   * @param Request $request
   */
  public function postValidate(Request $request)
  {
    $result = $this->validate($request, [
      'geetest_challenge' => 'geetest',
    ], [
      'geetest' => config('geetest.server_fail_alert')
    ]);
    if ($request) {
      return 'success';
    }
  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "这是Home目录下的SongController下的create方法";
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




}
