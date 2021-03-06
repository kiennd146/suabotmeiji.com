﻿// load page with ajax history
var lasturl = ""; 
function checkURL(hash)
{
	if(!hash) hash = window.location.hash; 
	
	if(hash != lasturl) 
	{
		lasturl = hash;
		loadTab(hash);

	}
}

// load page with ajax
function loadTab(data)  
{
	data = data.replace('#', '');   
	var url_arr = data.split("&");
	
	jQuery.each(url_arr, function(index, value) { 
		var value_arr = value.split('=');
		
		switch(value_arr[0]){
			
			case "tab":
				var id = value_arr[1];
				$(".nav-manager").removeClass("selected");
				$("#" + id).addClass("selected");
				$(".tab-manager").hide();
				$("."+id).show();
				break;
			default:
				break;
		}
	});
}

function setTab(id)
{
	var hash_url = 'tab=' + id;
	document.location.hash = hash_url;
}

function initTab()
{
	var first = $(".nav-manager").first();
	
	var hash = window.location.hash;
	if(!hash)
		setTab($(first).attr('id'));
}

jQuery(document).ready(function($) {
	initTab();
	initShowNumRelated();
	checkURL();
	setInterval("checkURL()", 250);
	
	$("div.productTabs a").click(function() {
		var id = $(this).attr("id");
		
		setTab(id);
	});
});

function showNumRelated(id, flag)
{
	if(flag)
		$("#" + id).show();
	else
		$("#" + id).hide();
}

function initShowNumRelated()
{
	if($('#related_posts_on').attr('checked') == 'checked')
		showNumRelated('num_related_posts', true);
	else
		showNumRelated('num_related_posts', false);
		
	if($('#related_products_on').attr('checked') == 'checked')
		showNumRelated('num_related_products', true);
	else
		showNumRelated('num_related_products', false);
}

function plTableFilter(idSubmit)
{
	$("#" + idSubmit).click();
}