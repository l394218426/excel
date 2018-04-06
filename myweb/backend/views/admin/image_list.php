<?php 
use common\services\UrlServices;
use common\composers\BaseController;
 ?>
 <!doctype html>
 <html lang="zh-CN">
 <head>
  <style type="text/css">
    img{
      width: 100px;
      height: 100px;
    }
  </style>
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
            <div class="box_top"><b class="pl15">展示</b></div>
            <div class="box_center">
             
              <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="td_right">图片ID</td>
                  <td class="td_right">图片名称</td>
                  <td class="td_right">图片</td>
                  <td class="td_right">图片状态</td>
                  <td class="td_right">添加时间</td>
                  <td class="td_right">操作</td>
                </tr>
                <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td><?=$value['image_id']  ?></td>
                    <td><?=$value['image_name']  ?></td>
                    <td><img src="<?=UrlServices::adminUrl('/').$value['image_url']  ?>"></td>
                    <td><?php if($value['status']==0) echo "显示"; else echo "不显示"; ?></td>
                    <td><?php echo date("Y-m-d",$value['image_time'])  ?></td>
                    <td><a href="<?=UrlServices::adminUrl('imagedel')  ?>?id=<?=$value['image_id']  ?>">删除</a>
                      <a href="<?=UrlServices::adminUrl('imagesave')  ?>?id=<?=$value['image_id']  ?>">修改</a></td>

                </tr>
                <?php endforeach ?>



               </table>
               </form>
            </div>
          </div>
        </div>
     </div>
   </div> 
 </body>
 </html>
  