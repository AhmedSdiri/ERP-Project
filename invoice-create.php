<?php
include('header.php');
include('functions.php');

?>

		<h1>Nouveau Document</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice">
			<input type="hidden" name="action" value="create_invoice">
			<div class="row">
				<div class="col-xs-12">
					<textarea name="custom_email" id="custom_email" class="custom_email_textarea" placeholder="Entrer l'entête / description de l'email"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<h1>
						<img src="<?php echo COMPANY_LOGO ?>" class="img-responsive">
					</h1>
				</div>
				<div class="col-xs-7 text-right">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="invoice_type">Devis</h1>
						</div>
						<div class="col-xs-3">
							<select name="invoice_type" id="invoice_type" class="form-control">
								<option value="Devis" selected>Devis</option>
								<option value="Bon de commande">Bon de commande</option>
								<option value="Facture">Facture</option>
							</select>
						</div>
						<div class="col-xs-3">
							<select name="invoice_status" id="invoice_status" class="form-control">
								<option value="Commande/Devis" selected>Commande/Devis</option>
								<option value="Payé">Paye</option>
							</select>
						</div>
					</div>
					<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control required" name="invoice_date" placeholder="Date création" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <div class="col-xs-4">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control required" name="invoice_due_date" placeholder="Date de Livraison" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
					<div class="input-group col-xs-4 float-right">
						<span class="input-group-addon">#<?php echo INVOICE_PREFIX ?></span>
						<input type="text" name="invoice_id" id="invoice_id" class="form-control required" placeholder="Invoice Number" aria-describedby="sizing-addon1" value="<?php getInvoiceId(); ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Client</h4>
							<a href="#" class="float-right select-customer">Client existant</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_name" id="customer_name" placeholder="Nom et prénom" tabindex="1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_address_1" id="customer_address_1" placeholder="Addresse 1" tabindex="3">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_town" id="customer_town" placeholder="Ville" tabindex="5">		
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control copy-input required" name="customer_postcode" id="customer_postcode" placeholder="Code postal" tabindex="7">					
									</div>
								</div>
								<div class="col-xs-6">
									<div class="input-group float-right margin-bottom">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control copy-input required" name="customer_email" id="customer_email" placeholder="E-mail address" aria-describedby="sizing-addon1" tabindex="2">
									</div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="customer_address_2" id="customer_address_2" placeholder="Addresse 2" tabindex="4">
								    </div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input required" name="customer_county" id="customer_county" placeholder="Pays" tabindex="6">
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_phone" id="customer_phone" placeholder="Télephone" tabindex="8">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-right">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Défunt</h4>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_name_ship" id="customer_name_ship" placeholder="Nom et prénom" tabindex="9">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2_ship" id="customer_address_2_ship" placeholder="Addresse 2" tabindex="11">	
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control required" name="customer_county_ship" id="customer_county_ship" placeholder="Pays" tabindex="13">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom required" name="customer_address_1_ship" id="customer_address_1_ship" placeholder="Address 1" tabindex="10">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_town_ship" id="customer_town_ship" placeholder="Ville" tabindex="12">							
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_postcode_ship" id="customer_postcode_ship" placeholder="Code postal" tabindex="14">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / end client details section -->
			<table class="table table-bordered" id="invoice_table">
				<thead>
					<tr>
						<th width="500">
							<h4><a href="#" class="btn btn-success btn-xs add-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Produit</h4>
						</th>
						<th>
							<h4>Qty</h4>
						</th>
						<th>
							<h4>Prix</h4>
						</th>
						<th>
							<h4>Réduction</h4>
						</th>
						<th>
							<h4>TAX/TVA</h4>
						</th>
						<th>
							<h4>sous Total</h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="form-group form-group-sm  no-margin-bottom">
								<a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
								<input type="text" class="form-control form-group-sm item-input invoice_product" name="invoice_product[]" placeholder="Libellé / Description">
								<p class="item-select">ou <a href="#">selectionnez un produit </a></p>
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm no-margin-bottom">
								<input type="text" class="form-control invoice_product_qty calculate" name="invoice_product_qty[]" value="1">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm  no-margin-bottom">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" class="form-control calculate invoice_product_price required" name="invoice_product_price[]" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_discount[]" placeholder="ajouter %">
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_tav[]" placeholder="ajouter %">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" class="form-control calculate-sub" name="invoice_product_sub[]" id="invoice_product_sub" value="0.00" aria-describedby="sizing-addon1" disabled>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="invoice_totals" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control" name="invoice_notes" placeholder="Commentaires."></textarea>
					</div>
				</div>
				<div class="col-xs-6 no-padding-right">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Sous total:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-sub-total">0.00</span>
							<input type="hidden" name="invoice_subtotal" id="invoice_subtotal">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Réduction:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-discount">0.00</span>
							<input type="hidden" name="invoice_discount" id="invoice_discount">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong class="shipping">livraison:</strong>
						</div>
						<div class="col-xs-3">
							<div class="input-group input-group-sm">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" class="form-control calculate shipping" name="invoice_shipping" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</div>
					</div>
					<?php if (ENABLE_VAT == true) { ?>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>TAX/VAT:</strong><br><strong>Supprimer TAX/VAT</strong> <input type="checkbox" class="remove_vat">
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-vat" data-enable-vat="<?php echo ENABLE_VAT ?>" data-vat-rate="<?php echo VAT_RATE ?>" data-vat-method="<?php echo VAT_INCLUDED ?>">0.00</span>
							<input type="hidden" name="invoice_vat" id="invoice_vat">
						</div>
					</div>
					<?php } ?>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Total:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-total">0.00</span>
							<input type="hidden" name="invoice_total" id="invoice_total">
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_create_invoice" class="btn btn-success float-right" value="Valider " data-loading-text="Validation en cours...">
				</div>
			</div>
		</form>

		<div id="insert" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select an item</h4>
		      </div>
		      <div class="modal-body">
				<?php popProductsList(); ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="insert_customer" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select an existing customer</h4>
		      </div>
		      <div class="modal-body">
				<?php popCustomersList(); ?>
		      </div>
		      <div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php
	include('footer.php');
?>