<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box  ">
 
   <div class="tit1">
       <span>
   热卖商品 
   
    </span>
        <a class="more" href="search.php?intro=hot">更多</a> 
      </div>
 
  
  
  <div class="blank"></div>
  <div id="show_hot_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_94138100_1357546156');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_94138100_1357546156']):
?>
  <div class="goodsItem">
 
           <a href="<?php echo $this->_var['goods_0_94138100_1357546156']['url']; ?>"><img src="<?php echo $this->_var['goods_0_94138100_1357546156']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_94138100_1357546156']['name']); ?>" class="goodsimg" /></a><br />
            <p class="f1"><a href="<?php echo $this->_var['goods_0_94138100_1357546156']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_94138100_1357546156']['name']); ?>"><?php echo $this->_var['goods_0_94138100_1357546156']['short_style_name']; ?></a></p>
              <font class="market"><?php echo $this->_var['goods_0_94138100_1357546156']['market_price']; ?></font><br />
           <font class="f1">
           <?php if ($this->_var['goods_0_94138100_1357546156']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_94138100_1357546156']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_94138100_1357546156']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>
