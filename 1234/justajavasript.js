function addUnitPrice(){
	var productTag = document.getElementById('product')
	var productValue = productTag.value
	var unitPrice = document.getElementById('unit_price')

	if(productValue != ''){
		unitPrice.value = productValue
		document.getElementById('quantity').disabled = false
	}
	else{
		unitPrice.value = '0'
		document.getElementById('quantity').disabled = true
	}
}
function updateQuantity(){
	quantityValue = document.getElementById('quantity').value
	unitPrice = document.getElementById('unit_price').value
	document.getElementById('total_price').value = quantityValue * unitPrice
}
function selectCreditCard(){
	var creditcard = document.getElementById('credit_card').value
	if(creditcard != ''){
		document.getElementById('ccn_1').disabled = false
		document.getElementById('ccn_2').disabled = false
		document.getElementById('ccn_3').disabled = false
		document.getElementById('ccn_4').disabled = false
	}else {
		document.getElementById('ccn_1').disabled = true
		document.getElementById('ccn_2').disabled = true
		document.getElementById('ccn_3').disabled = true
		document.getElementById('ccn_4').disabled = true
	}
}