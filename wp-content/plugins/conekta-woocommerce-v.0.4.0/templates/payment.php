<?php
/*
 * Title   : Conekta Payment extension for WooCommerce
 * Author  : Cristina Randall
 * Url     : https://www.conekta.io/es/docs/plugins/woocommerce
 */
?>
<div id="conekta_pub_key" class="hidden" style="display:none;" data-publishablekey="<?php echo $this->publishable_key; ?>"> </div>
<div class="clear"></div>
<span style="width: 100%; float: left; color: red;" class='payment-errors required'></span>
<p class="form-row form-row-first">
  <label>Número de tarjeta de crédito <span class="required">*</span></label>
  <input class="input-text" type="text" size="19" maxlength="19" data-conekta="card[number]" />
</p>
<p class="form-row form-row-last">
<label> Nombre del tarjetahabiente <span class="required">*</span></label>
<input type="text" data-conekta="card[name]" class="input-text" />
</p>
<div class="clear"></div>
<p class="form-row form-row-first">
  <label>Mes de expiración <span class="required">*</span></label>
<select id="card_expiration" data-conekta="card[exp_month]" class="month" autocomplete="off">
         <option selected="selected" value=""> Mes</option>
         <?php foreach($this->lang_options["card_expiration"] as $month => $description): ?>
          <option value="<?php echo $month; ?>"><?php echo $description; ?></option>
         <?php endforeach; ?>
       </select>
</p>
<p class="form-row form-row-last">
  <label>Año de expiración <span class="required">*</span></label>
<select id="card_expiration_yr" data-conekta="card[exp_year]" class="year" autocomplete="off">
          <option selected="selected" value=""> Año</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
</select>
</p>
<div class="clear"></div>
<p class="form-row form-row-first">
    <label>CVC <span class="required">*</span></label>
    <input class="input-text" type="text" maxlength="4" data-conekta="card[cvc]" value=""  style="border-radius:6px"/>
</p>
<div class="clear"></div>

<?php if ($this->enablemeses): ?>

<p class="form-row form-row-first">
<label> Tipo de Pago <span class="required">*</span></label>
<select id="monthly_installments" name="monthly_installments" autocomplete="off">
<option selected="selected" value="1"> Pago único</option>
<?php foreach($this->lang_options["monthly_installments"] AS $months => $description): ?>
  <option value="<?php echo $months; ?>"><?php echo $description; ?></option>
<?php endforeach; ?>
</select>
</p>

<?php endif; ?>


<div class="clear"></div>

<script>
  var initConektaCheckout = function() {
    jQuery(function($) {
      var $form = $('form.checkout,form#order_review');

      var conektaErrorResponseHandler = function(response) {
        $form.find('.payment-errors').text(response.message_to_purchaser);
        $form.unblock();
      };
           
      var conektaSuccessResponseHandler = function(response) {
        $form.append($('<input type="hidden" name="conektaToken" />').val(response.id));
        $form.submit();
      };

      jQuery('body').on('click', '#place_order,form#order_review input:submit', function() {
        if (jQuery('.payment_methods input:checked').val() !== 'conektacard') {
          return true;
        }

        Conekta.setPublishableKey(jQuery('#conekta_pub_key').data('publishablekey'));
        Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
        return false;
      });

      jQuery('body').on('click', '#place_order,form.checkout input:submit', function(){
        if(jQuery('.payment_methods input:checked').val() !== 'conektacard') {
          return true;
        }
        jQuery('form.checkout').find('[name=conektaToken]').remove();
      });

      jQuery('form.checkout').bind('#place_order,checkout_place_order_ConektaCard', function(e){
        if(jQuery('input[name=payment_method]:checked').val() != 'conektacard') {
          return true;
        }

        $form.find('.payment-errors').html('');
        $form.block({message: null,overlayCSS: {background: "#fff url(" + woocommerce_params.ajax_loader_url + ") no-repeat center", backgroundSize: "16px 16px",opacity: .6}});

        if ($form.find('[name="conektaToken"]').length)
          return true;

        Conekta.setPublishableKey(jQuery('#conekta_pub_key').data('publishablekey'));
        Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
        return false;
      });
    });
  };

  if (typeof jQuery=='undefined') {
    var headTag = document.getElementsByTagName("head")[0];
    var jqTag = document.createElement('script');
    jqTag.type = 'text/javascript';
    jqTag.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js';
    jqTag.onload = initConektaCheckout;
    headTag.appendChild(jqTag);
  } else {
    initConektaCheckout()
  }
</script>
