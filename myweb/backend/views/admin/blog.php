<?php 
use common\services\UrlServices;
use common\composers\BaseController;
 ?>
 <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/css/common.css">
   <link rel="stylesheet" href="/css/main.css">
   <script type="text/javascript" src="/js/jquery.min.js"></script>
   <script type="text/javascript" src="/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/js/common.js"></script>
   
   <script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
        
      }); 
   </script>
   <title>Document</title>
 </head>
 <body>
  <div class="container">
    
     
      
     <div id="forms" class="mt10">
        <div class="box">
          <div class="box_border">
            <div class="box_top"><b class="pl15">博文添加</b></div>
            <div class="box_center">
              <form action="<?=UrlServices::adminUrl('blogadd')  ?>" class="jqtransform" method="post">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                  <td class="td_right">博客名称</td>
                  <td class=""> 
                    <input type="text" name="blog_name" class="input-text lh30" size="40">
                  </td>

                </tr>
                 <tr>
                  <td class="td_right">博客内容：</td>
                  <td class="">
                    <textarea name="blog_desc" id="" cols="30" rows="10" class="textarea"></textarea>
                  </td>
                 </tr>
                 <tr>
                  <td class="td_right">博文状态</td>
                  <td class="">
                    <input type="radio" name="status" value="0" checked> 可用
                    <input type="radio" name="status" value="1"> 不可用
                  </td>
                 </tr>
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
                    <input type="button" name="button" class="btn btn82 btn_res" value="重置"> 
                   </td>
                 </tr>
               </table>
               </form>
            </div>
          </div>
        </div>
     </div>
   </div> 
 </body>
 </html>
  