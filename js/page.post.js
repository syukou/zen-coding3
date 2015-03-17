/**
 * Created by taguchimunetaka on 2014/12/28.
 */

var TENSHIN = TENSHIN || {};

TENSHIN.POST = {};

TENSHIN.POST.FIXSIDE = {

    SCROLL_IGNITION_POINT : 1200,

    init : function(){
        this.setParameters();
        this.prepare();
        this.bindEvent();
    },
    setParameters : function(){
        this.$window = $(window);
        this.$fixSide = $('.jsc-fix-side');
        this.showFlag = false;
        this.$body = $('body');
    },
    prepare : function(){
        var _self = this;
        this.$window.on('load',function(){
            _self.$fixSide.css('top','-541px')
        })
    },
    bindEvent : function(){
        this.$window.on('scroll', $.proxy(this.showHeader, this));
    },
    showHeader : function(){
        if(this.$window.scrollTop() > this.SCROLL_IGNITION_POINT){
            if(this.showFlag == false){
                this.showFlag = true;
                this.$fixSide.stop().animate({'top':'0'},300);
                if(0 < $(".top-ua").size()){
                    this.$fixSide.stop().animate({'top':'300'},300);
                }
            }
        }else{
            if(this.showFlag == true){
                this.showFlag = false;
                this.$fixSide.stop().animate({'top':'-541px'},300);
            }
        }
    }
};


$(window).on('load',function(){
    TENSHIN.POST.FIXSIDE.init();
});