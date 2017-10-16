<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Workshops</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <div class="page">
        <div class="section">
             <div class="content top-content">
                <?php perch_shop_cart();?>
                 
                 
                 
                 <div class="wrapper cols2-nav-right">	
	<div class="primary-content">

<perch:if id="product_count" match="gt" value="0">
	<h1>Your cart (<perch:shop id="item_count" />)</h1>
	<perch:form id="cart" app="perch_shop">
		
		<perch:input type="submit" value="Update" hidden="true" aria-hidden="true" />
		
		<table class="cart">
			<tr>
				<th></th>
				<th>Code</th>
				<th>Item</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
			<perch:cartitems>
				<tr>
					<td><perch:cartitem id="image" type="image" width="80" height="80" density="1.6" crop="true" output="tag" /></td>
					<td><perch:cartitem id="sku" /></td>
					<td>
						<b><perch:cartitem id="title" /></b>
						<p><i><perch:cartitem id="variant_desc" /></i></p>
						<div class="desc">
							<perch:cartitem id="description" type="textarea" markdown="true" />
						</div>
						<button type="submit" class="remove_cart" name="del:<perch:cartitem id="identifier" />" value="1">
                        	Remove from cart
                        </button>
					</td>
					<td><perch:input id="qty:<perch:cartitem id="identifier" />" value="<perch:cartitem id="quantity" />" type="number" min="0" /></td>
					<td class="money"><perch:cartitem id="price_without_tax" /></td>
					<td class="money"><perch:cartitem id="total_without_tax_formatted" /></td>
				</tr>
			</perch:cartitems>

			<perch:if id="total_discounts" match="gt" value="0.00">
				<tr class="total">
					<th colspan="5">
						Discount (<perch:shop id="discount_code" />)
					</th>
					<td class="money">
						<perch:shop id="total_discounts_formatted" />
					</td>
				</tr>
				<tr class="total">
					<th colspan="5">
						Total
					</th>
					<td class="money">
						<perch:shop id="total_items_discounted_formatted" />
					</td>
				</tr>
			<perch:else />
				<tr class="total">
					<th colspan="5">
						Total
					</th>
					<td class="money">
						<perch:shop id="total_items_formatted" />
					</td>
				</tr>
			</perch:if>
			<tr class="total">
				<th colspan="5">
					Tax
				</th>
				<td class="money">
					<perch:shop id="total_tax_formatted" />
				</td>
			</tr>
			<tr class="total">
				<th colspan="5">
					Grand total
				</th>
				<td class="money">
					<perch:shop id="grand_total_formatted" />
				</td>
			</tr>
		</table>

		<div class="discount">
			<perch:label for="discount">
				Discount code
				<perch:input type="text" id="discount_code" />
			</perch:label>
		</div>

		<perch:input type="submit" value="Update" />

	</perch:form>

	<p>
		<a href="checkout">Checkout now</a>
	</p>

<perch:else />
<h1>Your cart</h1>

<p>Your cart is empty.</p>
</perch:if>





</div>
</div>
        
            </div>
        </div>
        
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>






<style>
.cart {
	width: 100%;
	border-collapse: collapse;
}

.cart th {
	font-weight: 600;
}

.cart td,
.cart th {
	border: 1px solid #efefef;
	vertical-align: top;
	padding: 3px;
}

.cart .total,
.cart .money {
	text-align: right;
}

.discount {
	max-width: 300px;
}

.desc {
	font-size: small;
}

b {
	font-weight: 600;
	color: rgba(0, 0, 0, 0.6);
}

i {
	font-style: italic;
	font-size: small;
	color: rgba(0, 0, 0, 0.6);
}

.remove_cart {
	background: none;
	border: 0;
	padding: 0;
	margin: 0;
	text-decoration: underline;
}

input[type=number] {
	width: 35px;
}
</style>
         