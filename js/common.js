/**
 * Created by taguchimunetaka on 2014/12/28.
 */

var TENSHIN = TENSHIN || {};

TENSHIN.COMMON = {};

TENSHIN.COMMON.UA_ADDCLASSIE = {
	init: function () {
		var APP_Version = window.navigator.appVersion.toLowerCase();
		var userAgent = window.navigator.userAgent.toLowerCase();

		if ((APP_Version.indexOf('msie 8.') != -1 || APP_Version.indexOf('msie 9.') != -1 || APP_Version.indexOf('msie 10.') != -1 || APP_Version.indexOf('msie 11.') != -1 || userAgent.indexOf('firefox') != -1)) {
			$('body').addClass('lte-ie9');
		}

		if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/) ) {
			$('body').addClass('lte-ie9');
		}
	}
};


TENSHIN.COMMON.PAGE_TOTOP = {

	IGNITION_POINT : 1300,
	SCROLL_SPEED : 1000,

	init : function(){
		this.setParameters();
		this.bindEvent();
	},
	setParameters : function(){
		this.$window = $(window);
		this.$htmlBody = $('html,body');
		this.$target = $('#jsiBtnPagetop');
	},
	bindEvent : function(){
		this.$window.on('scroll', $.proxy(this.fadeBtn, this));
		this.$target.on('click', $.proxy(this.scrollTop, this));
	},
	fadeBtn : function(){
		if(this.$window.scrollTop() > this.IGNITION_POINT){
			this.$target.css('position','fixed');
			this.$target.fadeIn();
		}else{
			this.$target.fadeOut();
		}
	},
	scrollTop : function(e){
		e.preventDefault();
		this.$htmlBody.animate({ scrollTop: 0 }, this.SCROLL_SPEED, 'swing');
	}
};


$(function(){
	TENSHIN.COMMON.PAGE_TOTOP.init();
	TENSHIN.COMMON.UA_ADDCLASSIE.init();
});