/**
 * Created by taguchimunetaka on 2014/12/28.
 */

var TENSHIN = TENSHIN || {};

TENSHIN.TOP = {};

TENSHIN.TOP.TOP_CAROUSEL = {
	SLIDE_TIME : 1500,
	SLIDE_INTERVAL : 7000,

	init : function(){
		this.setParameters();
		this.prepare();
		this.adjustParameters();
		this.bindEvent();
	},
	setParameters : function(){
		this.$window = $(window);

		this.$kvWrap = $('#jsi-carousel-wrapper');
		this.$kvContainer = $('#jsi-carousel-container');

		this.$kvLists = this.$kvContainer.find('img');
		this.kvListSize = this.$kvLists.size();
		this.kvImageWidth = this.$kvLists.width();
		this.timer = [];

		this.$carouselPrev = $('#jsi-carousel-prev');
		this.$carouselNext = $('#jsi-carousel-next');
	},
	prepare : function(){
		var myself = this;

		$('#jsi-carousel-container').css('margin-left', '0');

		this.$kvContainer.children('li').each(function(){ //childrenじゃないとエラー
			$(this).clone().appendTo(myself.$kvContainer);
		});

		this.$kvContainer.width((this.kvImageWidth * this.kvListSize) * 2);

	},
	adjustParameters : function(){
		this.currentIndex = 1;
		this.$kvContainer.stop().css('left', this.getLeftPosition(this.currentIndex));
		this.setTimer();
	},
	getLeftPosition : function(index){
		return this.$window.width() / 2 - this.kvImageWidth * (index + 1 / 2);
	},
	bindEvent : function(){
		this.$window.on('resize', $.proxy(this.adjustParameters, this));
		this.$carouselPrev.on('click', $.proxy(this.pushPrev, this));
		this.$carouselNext.on('click', $.proxy(this.pushNext, this));
	},
	pushPrev : function(event){
		this.slideCarousel(event, 1, this.kvListSize + 1, -1);
	},
	pushNext : function(event){
		this.slideCarousel(event, this.kvListSize + 1, 1, 1);
	},
	slideCarousel : function(event, beforeIndex, afterIndex, offset){

		if(event){
			event.preventDefault();
		}
		if(this.$kvContainer.is(':animated')){
			return;
		}
		if(this.currentIndex == beforeIndex){
			this.currentIndex = afterIndex;
			this.$kvContainer.css('left', this.getLeftPosition(this.currentIndex));
		}

		this.clearTimer();
		this.currentIndex += offset;
		this.$kvContainer.animate({'left' : this.getLeftPosition(this.currentIndex)},this.SLIDE_TIME,'easeInOutExpo');
		this.setTimer();
	},
	setTimer : function(){
		this.timer.push(setInterval($.proxy(this.pushNext, this), this.SLIDE_INTERVAL));
	},
	clearTimer : function(){
		while(this.timer.length > 0){
			clearInterval(this.timer.pop());
		}
	}

};


$(function(){
	TENSHIN.TOP.TOP_CAROUSEL.init();
});