<?php

function getStringValue($paramName){
	if(isset($_POST[paramName])){
		return trim($_POST[paramName]);
	}else{
		return "";
	}
}

$dbInstance = new Database();

if(isset($_POST["profile"])){
	$filingStatus = getStringValue('filing_status');
	$taxBracket = getStringValue('tax_bracket');
	$state = getStringValue('state');
	$income = getStringValue('income');
}

if(isset($_POST["survey_prob"])){
	$getAllInfo = getStringValue('prob_get_all_info');
	$knowTaxToPutAside = getStringValue('prob_know_tax_to_put_aside');
	$trackExpenses = getStringValue('prob_track_expenses');
	$payingTaxOnTime = getStringValue('prob_paying_tax_on_time');
}

if(isset($_POST["survey_price"])){
	
}

if(isset($_POST["interested_buying"])){
	
}

?>