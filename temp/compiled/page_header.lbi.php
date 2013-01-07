<link href="themes/ecmoban_mbaobao/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script language='javascript' src='themes/ecmoban_mbaobao/qq/ServiceQQ.js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>

 <div id="topNav"  >
<div class="block">


<div class="f_l" style="_padding-top:3px;">
    <a style="cursor: pointer"  
    onClick="window.external.AddFavorite(location.href,document.title);">
    <img src="themes/ecmoban_mbaobao/images/biao12.gif"> 收藏360°潮流
    </a>
    <span> 
    <img src="themes/ecmoban_mbaobao/images/biao13.gif"> 订购热线：<b> 
    <?php if ($this->_var['service_phone']): ?>
    <?php echo $this->_var['service_phone']; ?>
 <?php endif; ?></b>
    </span> 
</div>
<div class="f_r log">
     
    <ul>
        <li style="float:left"   class="clearfix">
        <?php if ($this->_var['navigator_list']['top']): ?>
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>  
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> <?php endif; ?>
         <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
   <font id="ECS_MEMBERZONE">
   <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
        </li>
    </ul>
</div>
 


</div>
</div>


<div style=" clear:both"></div>


<div class="block clearfix" style=" height:73px;">
 <div class="f_l" style=" padding-top:15px ">
 <a href="index.php" name="top"><img style="float:left" src="themes/ecmoban_mbaobao/images/logo.gif" /></a>
 </div>

 
   <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
   
   <div class="clearfix"   onclick="this.className='clearfix ul2_on'" >
   
   <div style="float:left; position:relative">
   <input name="keywords" type="text" id="keyword" value="品名或商品号" onclick="javascript:this.value=''" class="B_input"/>
   <img style=" position:absolute; left:4px; top:4px;" src="themes/ecmoban_mbaobao/images/biao14.gif">
   </div>
   
   <input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;" />
   </div>
   
   
   
   
   <div class="keys">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    <?php if ($this->_var['searchkeywords']): ?>
  <b> 热门关键词：</b>
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
  </div>
   </form>
   
  
  
 

 
 

 
</div>

 


<div  class="block" style=" position:relative; z-index:99999999;">
<div id="mainNav" class="clearfix">


  <a class="a2" href="index.php" <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> id="a1_on"   <?php endif; ?>><?php echo $this->_var['lang']['home']; ?> </a>
  
  
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1" <?php if ($this->_var['nav']['active'] == 1): ?>  id="a1_on" <?php endif; ?>  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
   </ul>
  
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
   
<div class="mainNav_r">
<a href="search.php?intro=new">新品</a>
<a href="brand.php">品牌</a>
<a href="search.php?intro=promotion">促销</a>
<a href="#">风云榜</a>
<a href="pick_out.php">选包中心</a>
</div>



</div>
</div>
 










<div class="block clearfix">
 <div id="search" >
 <div class="f_l">
 <img src="themes/ecmoban_mbaobao/images/biao15.gif"> 

 公告：
 <img src="themes/ecmoban_mbaobao/images/biao16.gif">
 <a href="#" style="color:#ed1c24">全场免运费（支持货到付款，7天无条件退换货）</a>
 <a href="#"><img src="themes/ecmoban_mbaobao/images/biao16.gif">
 意大利品牌馆盛大开启！</a>
 <img src="themes/ecmoban_mbaobao/images/biao16.gif">
 <a href="#">新版网站调查反馈</a> 
 </div>

  
  
  
<div class="buy_car_bg_box" style="float:right; padding-top:5px; padding-right:8px;">  
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="buy_car_bg " id="ECS_CARTINFO" onmouseover="this.className='buy_car_bg ul1_on'" onmouseout="this.className='buy_car_bg'">
<div style="background:url(themes/ecmoban_mbaobao/images/biao3.gif) 0 center no-repeat; padding-left:30px;">
 
 <a  href="flow.php"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>
 </div> 
</div> 
</div> 






</div>

</div>
  
 



<div class="blank"></div>
