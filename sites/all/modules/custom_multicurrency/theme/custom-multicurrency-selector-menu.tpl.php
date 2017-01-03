<?php
/**
 * @file
 * Currency selector menu.
 *
 * Available variables:
 * $enabled_currencies
 * $user_currency
 */

$cur_label = t("Валюта:");
?>

<div class="currency_select_menu dropdown">
  <span class="label"><?php echo $cur_label; ?></span>
  <?php foreach($enabled_currencies as $currency) : ?>
      <?php if(($currency['code'] == $user_currency)): ?>
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php print $currency['code']; ?>
        <span class="caret"></span></button>
      <?php endif; ?>
  <?php endforeach;?>
  <ul class="dropdown-menu">
    <?php foreach($enabled_currencies as $currency) : ?>
      <?php if(($currency['code'] != $user_currency)): ?>
      <li class="<?php print $currency['code']; ?>">
        <a href="<?php print url('commerce_currency_select/' . $currency['code'], array('query' => drupal_get_destination())); ?>"><?php print $currency['code']; ?></a>
      </li>
      <?php endif; ?>
    <?php endforeach;?>
  </ul>
</div>