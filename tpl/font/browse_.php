<div class="selectItems">
  <? foreach ($d['items'] as $v) { ?>
  <div class="item" data-name="<?= $v['name'] ?>">
    <?= $v['name'] ?>
    <div class="font" style="font-family: <?= $v['name'] ?>">АаБбВв«» AaCcDd—</div>
  </div>
  <? } ?>
  <div class="clear"></div>
  <script>
  </script>
</div>