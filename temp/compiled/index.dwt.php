<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_body">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<TABLE cellSpacing=0 cellPadding=0 width=980 align=center border=0>
  <TBODY>
  <TR>
   
    <TD height="28" width="100%">
      <MARQUEE scrollAmount=4 scrollDelay=90 direction=rtl 
      ><?php echo $this->_var['shop_notice']; ?></MARQUEE></TD>
  </TR></TBODY></TABLE>

<div class="block clearfix">
 
 
  
   
    <div class="box clearfix">
    <div style="float:left; width:700px;">
       <?php echo $this->fetch('library/index_ad.lbi'); ?>
       
       
       
       
<?php echo $this->fetch('library/index_tree.lbi'); ?>
        </div>
       <div style="float:right; width:250px;">
        <?php echo $this->fetch('library/new_articles.lbi'); ?>
        
          
<?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php echo $this->fetch('library/ad_position.lbi'); ?>

        
        
         </div>
        </div>
    <div class="blank"></div> 
 
  
  
  
  
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

  
  
    </div>
  
  
  
 


    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
