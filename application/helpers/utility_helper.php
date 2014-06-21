<?php
function asset_url($passedUrl) {
	return base_url().'assets/'.$passedUrl;
}

function image_url($passedUrl) {
	return base_url().'assets/images/'.$passedUrl;
}

function css_url($passedUrl) {
	return base_url().'assets/css/'.$passedUrl;
}

function font_url($passedUrl) {
	return base_url().'assets/fonts/'.$passedUrl;
}

function js_url($passedUrl) {
	return base_url().'assets/js/'.$passedUrl;
}