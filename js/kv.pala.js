var LCS = LCS || {};

LCS.COMMON = {};

LCS.COMMON.PARARAX_KV = {
	init : function(){
		this.setParameters();
		this.bindEvent();
	},
	setParameters : function(){
		this.$window = $(window);

		this.$kvDesc = $('.jsc-palarax-text');
		this.$kvLogoBlack = $('.jsc-kv-logo-black');
		this.$kvLogoWhite = $('.jsc-kv-logo-white');

		this.descFirstPos = this.$kvDesc.position();
		this.logoBlackFirstPos = this.$kvLogoBlack.position();
		this.logoWhiteFirstPos = this.$kvLogoWhite.position();
	},
	bindEvent : function(){
		var _self = this;
		this.$window.on('scroll', function(){
			var y =  $(this).scrollTop();
//			_self.$kvDesc.css("top", _self.descFirstPos.top - y * 1.5);
			_self.$kvLogoBlack.css("top", _self.logoBlackFirstPos.top - y * 1.5);
			_self.$kvLogoWhite.css("top", _self.logoWhiteFirstPos.top - y * 1.5);
		});
	}
};

$(function(){
	LCS.COMMON.PARARAX_KV.init();
});