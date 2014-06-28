<?php

function addUSACountryCode($number) {
	return '+1' . strval($number);
}

function removeUSACountryCode($number) {
	return intval( str_replace('+1', '', $number));
}

function friendlyUSAFormat($number) {
	$num_only = str_replace('+1', '', $number);
	$areacode = substr($num_only, 0, 3);
	$first3 = substr($num_only, 3, 3);
	$last4 = substr($num_only, 6, 4);

	return "(".$areacode.") ".$first3."-".$last4;
}

function preparePhoneNumberForDB($number) {
	$removeChars = array(' ', '(', ')', '-');
	return "+1".str_replace($removeChars, '', $number);
}