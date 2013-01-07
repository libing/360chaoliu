<div class="box">
 
 
 
 
 
 <div class="tit1">
       <span>
 <?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?> 
   
    </span>
        <a class="more" href="<?php echo $this->_var['goods_cat']['url']; ?>">更多</a> 
      </div>
 
 
 
   <div class="blank"></div>
 
 
 
 
    <div class="clearfix goodsBox" style="border:none;">
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_94443300_1357546156');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_94443300_1357546156']):
?>
      <div class="goodsItem ">
           <a href="<?php echo $this->_var['goods_0_94443300_1357546156']['url']; ?>"><img src="<?php echo $this->_var['goods_0_94443300_1357546156']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_94443300_1357546156']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_94443300_1357546156']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_94443300_1357546156']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_94443300_1357546156']['short_name']); ?></a></p>
           <?php if ($this->_var['goods_0_94443300_1357546156']['promote_price'] != ""): ?>
          <font class="shop_s"><?php echo $this->_var['goods_0_94443300_1357546156']['promote_price']; ?></font>
          <?php else: ?>
          <font class="shop_s"><?php echo $this->_var['goods_0_94443300_1357546156']['shop_price']; ?></font>
          <?php endif; ?>
        </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
 
 
</div>
<div class="blank"></div>
