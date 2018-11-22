<?php

namespace App\Http\Controllers\Util;

use App\Exceptions\UploadException;
use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\DeclareDeclare;

//1.首先能正常上传图片
//2.将上传文件正常写入数据表
//3.文件列表方法filesLists
//4.用异常类处理上传
class UploadController extends Controller
{
//    处理上传
   public function uploader(Request $request){
       //dd(11);
//      dd(asset(''));
//       以下这句话中第一个attachment意思上传文件存储目录
//       第二个attachment对应confin/filesystem.php中disk选项中attachment
       $file = $request->file('file');
//       对上传文件的大小以及类型拦截
       $this->checkSize($file);
       $this->checkType($file);
        if ($file){
            $path = $file->store('attachment','attachment');
//            将上传数据存储到数据表
//            我们创建附件的模型与迁移文件
//            关联添加
            auth()->user()->attachment()->create([
                'name'=>$file->getClientOriginalName(),
                'path'=>url($path)
            ]);

        }
//       dd($path);
//       dd(url($path));
      return ['file' =>url($path),'code'=>0];
   }

//    验证上传大小
     private function checkSize($file){
//
       if($file->getSize()>20000000){
//           使用异常类处理上传异常
//           创建异常类：exception
           throw new UploadException('上传文件过大');
       }
     }

//     验证上传类型
     private function checkType($file){
       if (!in_array(strtolower($file->getClientOriginalExtension()),['jpg','png'])){
           throw new UploadException('类型不允许');
       }
     }
//    获取图片列表
   public function filesLists(){

       $files = auth()->user()->attachment()->paginate(20);
       $data = [];
       foreach ($files as $file){
           $data[]=[
               'url'=>$file['path'],
               'path'=>$file['path']
           ];
       }
//       dd($data);
       return [
           'data'=>$data,
           'page'=>$files->links() . '',//这里一定要注意分页后面拼接一个控字符串
           'code'=>0
       ];

   }
}
