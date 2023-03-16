var Lobibox=Lobibox||{};!function(){Lobibox.counter=0,Lobibox.prompt=function(o,t){return new i(o,t)},Lobibox.confirm=function(o){return new t(o)},Lobibox.progress=function(o){return new e(o)},Lobibox.error={},Lobibox.success={},Lobibox.warning={},Lobibox.info={},Lobibox.alert=function(o,t){if(-1<["success","error","warning","info"].indexOf(o))return new s(o,t)},Lobibox.window=function(o){return new a("window",o)};var n={$type:null,$el:null,$options:null,debug:function(){this.$options.debug&&window.console.debug.apply(window.console,arguments)},_processInput:function(o){if($.isArray(o.buttons)){for(var t={},i=0;i<o.buttons.length;i++)t[o.buttons[i]]=Lobibox.base.OPTIONS.buttons[o.buttons[i]];o.buttons=t}for(var i in o.customBtnClass=o.customBtnClass?o.customBtnClass:Lobibox.base.DEFAULTS.customBtnClass,o.buttons)if(o.buttons.hasOwnProperty(i)){var n=o.buttons[i];(n=$.extend({},Lobibox.base.OPTIONS.buttons[i],n)).class||(n.class=o.customBtnClass),o.buttons[i]=n}return void 0===(o=$.extend({},Lobibox.base.DEFAULTS,o)).showClass&&(o.showClass=Lobibox.base.OPTIONS.showClass),void 0===o.hideClass&&(o.hideClass=Lobibox.base.OPTIONS.hideClass),void 0===o.baseClass&&(o.baseClass=Lobibox.base.OPTIONS.baseClass),void 0===o.delayToRemove&&(o.delayToRemove=Lobibox.base.OPTIONS.delayToRemove),o.iconClass||(o.iconClass=Lobibox.base.OPTIONS.icons[o.iconSource][this.$type]),o},_init:function(){var t=this;t._createMarkup(),t.setTitle(t.$options.title),t.$options.draggable&&!t._isMobileScreen()&&(t.$el.addClass("draggable"),t._enableDrag()),t.$options.closeButton&&t._addCloseButton(),t.$options.closeOnEsc&&$(document).on("keyup.lobibox",function(o){27===o.which&&t.destroy()}),t.$options.baseClass&&t.$el.addClass(t.$options.baseClass),t.$options.showClass&&(t.$el.removeClass(t.$options.hideClass),t.$el.addClass(t.$options.showClass)),t.$el.data("lobibox",t)},_calculatePosition:function(o){var t,i=this;return t="top"===o?30:"bottom"===o?$(window).outerHeight()-i.$el.outerHeight()-30:($(window).outerHeight()-i.$el.outerHeight())/2,{left:($(window).outerWidth()-i.$el.outerWidth())/2,top:t}},_createButton:function(i,o){var n=this,t=$("<button></button>").addClass(o.class).attr("data-type",i).html(o.text);return n.$options.callback&&"function"==typeof n.$options.callback&&t.on("click.lobibox",function(o){var t=$(this);n._onButtonClick(n.$options.buttons[i],i),n.$options.callback(n,t.data("type"),o)}),t.click(function(){n._onButtonClick(n.$options.buttons[i],i)}),t},_onButtonClick:function(o,t){var i=this;("ok"===t&&"prompt"===i.$type&&i.isValid()||"prompt"!==i.$type||"ok"!==t)&&o&&o.closeOnClick&&i.destroy()},_generateButtons:function(){var o=this,t=[];for(var i in o.$options.buttons)if(o.$options.buttons.hasOwnProperty(i)){var n=o.$options.buttons[i],s=o._createButton(i,n);t.push(s)}return t},_createMarkup:function(){var o=this,t=$('<div class="lobibox"></div>');t.attr("data-is-modal",o.$options.modal);var i=$('<div class="lobibox-header"></div>').append('<span class="lobibox-title"></span>'),n=$('<div class="lobibox-body"></div>');if(t.append(i),t.append(n),o.$options.buttons&&!$.isEmptyObject(o.$options.buttons)){var s=$('<div class="lobibox-footer"></div>');s.append(o._generateButtons()),t.append(s),-1<Lobibox.base.OPTIONS.buttonsAlign.indexOf(o.$options.buttonsAlign)&&s.addClass("text-"+o.$options.buttonsAlign)}o.$el=t.addClass(Lobibox.base.OPTIONS.modalClasses[o.$type])},_setSize:function(){var o=this;o.setWidth(o.$options.width),"auto"===o.$options.height?o.setHeight(o.$el.outerHeight()):o.setHeight(o.$options.height)},_calculateBodyHeight:function(o){var t=this.$el.find(".lobibox-header").outerHeight(),i=this.$el.find(".lobibox-footer").outerHeight();return o-(t||0)-(i||0)},_addBackdrop:function(){0===$(".lobibox-backdrop").length&&$("body").append('<div class="lobibox-backdrop"></div>')},_triggerEvent:function(o){var t=this;t.$options[o]&&"function"==typeof t.$options[o]&&t.$options[o](t)},_calculateWidth:function(o){return(o=Math.min(Math.max(o,this.$options.width),$(window).outerWidth()))===$(window).outerWidth()&&(o-=2*this.$options.horizontalOffset),o},_calculateHeight:function(o){var t=this;return console.log(t.$options.height),(o=Math.min(Math.max(o,t.$options.height),$(window).outerHeight()))===$(window).outerHeight()&&(o-=2*t.$options.verticalOffset),o},_addCloseButton:function(){var o=this,t=$('<span class="btn-close">&times;</span>');o.$el.find(".lobibox-header").append(t),t.on("mousedown",function(o){o.stopPropagation()}),t.on("click.lobibox",function(){o.destroy()})},_position:function(){this._setSize();var o=this._calculatePosition();this.setPosition(o.left,o.top)},_isMobileScreen:function(){return $(window).outerWidth()<768},_enableDrag:function(){var n=this.$el;n.find(".lobibox-header").on("mousedown.lobibox",function(o){n.attr("offset-left",o.offsetX),n.attr("offset-top",o.offsetY),n.attr("allow-drag","true")}),$(document).on("mouseup.lobibox",function(){n.attr("allow-drag","false")}),$(document).on("mousemove.lobibox",function(o){if("true"===n.attr("allow-drag")){var t=o.clientX-parseInt(n.attr("offset-left"),10)-parseInt(n.css("border-left-width"),10),i=o.clientY-parseInt(n.attr("offset-top"),10)-parseInt(n.css("border-top-width"),10);n.css({left:t,top:i})}})},_setContent:function(o){return this.$el.find(".lobibox-body").html(o),this},_beforeShow:function(){this._triggerEvent("onShow")},_afterShow:function(){var o=this;Lobibox.counter++,o.$el.attr("data-nth",Lobibox.counter),o.$options.draggable||$(window).on("resize.lobibox-"+o.$el.attr("data-nth"),function(){o.refreshWidth(),o.refreshHeight(),o.$el.css("left","50%").css("margin-left","-"+o.$el.width()/2+"px"),o.$el.css("top","50%").css("margin-top","-"+o.$el.height()/2+"px")}),o._triggerEvent("shown")},_beforeClose:function(){this._triggerEvent("beforeClose")},_afterClose:function(){this.$options.draggable||$(window).off("resize.lobibox-"+this.$el.attr("data-nth")),this._triggerEvent("closed")},hide:function(){var o=this;function t(){o.$el.addClass("lobibox-hidden"),0===$(".lobibox[data-is-modal=true]:not(.lobibox-hidden)").length&&($(".lobibox-backdrop").remove(),$("body").removeClass(Lobibox.base.OPTIONS.bodyClass))}return o.$options.hideClass?(o.$el.removeClass(o.$options.showClass),o.$el.addClass(o.$options.hideClass),setTimeout(function(){t()},o.$options.delayToRemove)):t(),this},destroy:function(){var o=this;function t(){o.$el.remove(),0===$(".lobibox[data-is-modal=true]").length&&($(".lobibox-backdrop").remove(),$("body").removeClass(Lobibox.base.OPTIONS.bodyClass)),o._afterClose()}return o._beforeClose(),o.$options.hideClass?(o.$el.removeClass(o.$options.showClass).addClass(o.$options.hideClass),setTimeout(function(){t()},o.$options.delayToRemove)):t(),this},setWidth:function(o){return this.$el.css("width",this._calculateWidth(o)),this},refreshWidth:function(){this.setWidth(this.$el.width())},refreshHeight:function(){this.setHeight(this.$el.height())},setHeight:function(o){var t=this;return t.$el.css("height",t._calculateHeight(o)).find(".lobibox-body").css("height",t._calculateBodyHeight(t.$el.innerHeight())),t},setSize:function(o,t){return this.setWidth(o),this.setHeight(t),this},setPosition:function(o,t){var i;return"number"==typeof o&&"number"==typeof t?i={left:o,top:t}:"string"==typeof o&&(i=this._calculatePosition(o)),this.$el.css(i),this},setTitle:function(o){return this.$el.find(".lobibox-title").html(o)},getTitle:function(){return this.$el.find(".lobibox-title").html()},show:function(){var o=this,t=$("body");o._beforeShow(),o.$el.removeClass("lobibox-hidden"),t.append(o.$el),o.$options.buttons&&o.$el.find(".lobibox-footer").children()[0].focus();return o.$options.modal&&(t.addClass(Lobibox.base.OPTIONS.bodyClass),o._addBackdrop()),!1!==o.$options.delay&&setTimeout(function(){o.destroy()},o.$options.delay),o._afterShow(),o}};function i(o,t){this.$input=null,this.$type="prompt",this.$promptType=o,t=$.extend({},Lobibox.prompt.DEFAULT_OPTIONS,t),this.$options=this._processInput(t),this._init(),this.debug(this)}function t(o){this.$type="confirm",this.$options=this._processInput(o),this._init(),this.debug(this)}function s(o,t){this.$type=o,this.$options=this._processInput(t),this._init(),this.debug(this)}function e(o){this.$type="progress",this.$progressBarElement=null,this.$options=this._processInput(o),this.$progress=0,this._init(),this.debug(this)}function a(o,t){this.$type=o,this.$options=this._processInput(t),this._init(),this.debug(this)}Lobibox.base={},Lobibox.base.OPTIONS={bodyClass:"lobibox-open",modalClasses:{error:"lobibox-error",success:"lobibox-success",info:"lobibox-info",warning:"lobibox-warning",confirm:"lobibox-confirm",progress:"lobibox-progress",prompt:"lobibox-prompt",default:"lobibox-default",window:"lobibox-window"},buttonsAlign:["left","center","right"],buttons:{ok:{class:"lobibox-btn lobibox-btn-default",text:"OK",closeOnClick:!0},cancel:{class:"lobibox-btn lobibox-btn-cancel",text:"Cancel",closeOnClick:!0},yes:{class:"lobibox-btn lobibox-btn-yes",text:"Yes",closeOnClick:!0},no:{class:"lobibox-btn lobibox-btn-no",text:"No",closeOnClick:!0}},icons:{bootstrap:{confirm:"glyphicon glyphicon-question-sign",success:"glyphicon glyphicon-ok-sign",error:"glyphicon glyphicon-remove-sign",warning:"glyphicon glyphicon-exclamation-sign",info:"glyphicon glyphicon-info-sign"},fontAwesome:{confirm:"fa fa-question-circle",success:"fa fa-check-circle",error:"fa fa-times-circle",warning:"fa fa-exclamation-circle",info:"fa fa-info-circle"}}},Lobibox.base.DEFAULTS={horizontalOffset:5,verticalOffset:5,width:600,height:"auto",closeButton:!0,draggable:!1,customBtnClass:"lobibox-btn lobibox-btn-default",modal:!0,debug:!1,buttonsAlign:"center",closeOnEsc:!0,delayToRemove:200,delay:!1,baseClass:"animated-super-fast",showClass:"zoomIn",hideClass:"zoomOut",iconSource:"bootstrap",onShow:null,shown:null,beforeClose:null,closed:null},i.prototype=$.extend({},n,{constructor:i,_processInput:function(o){var t=n._processInput.call(this,o);return t.buttons={ok:Lobibox.base.OPTIONS.buttons.ok,cancel:Lobibox.base.OPTIONS.buttons.cancel},o=$.extend({},t,i.DEFAULT_OPTIONS,o)},_init:function(){n._init.call(this),this.show()},_afterShow:function(){this._setContent(this._createInput())._position(),this.$input.focus(),n._afterShow.call(this)},_createInput:function(){var o,t=this;return t.$options.multiline?t.$input=$("<textarea></textarea>").attr("rows",t.$options.lines):t.$input=$('<input type="'+t.$promptType+'"/>'),t.$input.addClass("lobibox-input").attr(t.$options.attrs),t.$options.value&&t.setValue(t.$options.value),t.$options.label&&(o=$("<label>"+t.$options.label+"</label>")),$("<div></div>").append(o,t.$input)},setValue:function(o){return this.$input.val(o),this},getValue:function(){return this.$input.val()},isValid:function(){var o=this,t=o.$el.find(".lobibox-input-error-message");return o.$options.required&&!o.getValue()?(o.$input.addClass("invalid"),0===t.length&&(o.$el.find(".lobibox-body").append('<p class="lobibox-input-error-message">'+o.$options.errorMessage+"</p>"),o._position(),o.$input.focus()),!1):(o.$input.removeClass("invalid"),t.remove(),o._position(),o.$input.focus(),!0)}}),i.DEFAULT_OPTIONS={width:400,attrs:{},value:"",multiline:!1,lines:3,type:"text",label:"",required:!0,errorMessage:"The field is required"},t.prototype=$.extend({},n,{constructor:t,_processInput:function(o){var t=n._processInput.call(this,o);return t.buttons={yes:Lobibox.base.OPTIONS.buttons.yes,no:Lobibox.base.OPTIONS.buttons.no},o=$.extend({},t,Lobibox.confirm.DEFAULTS,o)},_init:function(){n._init.call(this),this.show()},_afterShow:function(){var o=this,t=$("<div></div>");o.$options.iconClass&&t.append($('<div class="lobibox-icon-wrapper"></div>').append('<i class="lobibox-icon '+o.$options.iconClass+'"></i>')),t.append('<div class="lobibox-body-text-wrapper"><span class="lobibox-body-text">'+o.$options.msg+"</span></div>"),o._setContent(t.html()),o._position(),n._afterShow.call(o)}}),Lobibox.confirm.DEFAULTS={title:"Question",width:500},s.prototype=$.extend({},n,{constructor:s,_processInput:function(o){var t=n._processInput.call(this,o);return t.buttons={ok:Lobibox.base.OPTIONS.buttons.ok},o=$.extend({},t,Lobibox.alert.OPTIONS[this.$type],Lobibox.alert.DEFAULTS,o)},_init:function(){n._init.call(this),this.show()},_afterShow:function(){var o=this,t=$("<div></div>");o.$options.iconClass&&t.append($('<div class="lobibox-icon-wrapper"></div>').append('<i class="lobibox-icon '+o.$options.iconClass+'"></i>')),t.append('<div class="lobibox-body-text-wrapper"><span class="lobibox-body-text">'+o.$options.msg+"</span></div>"),o._setContent(t.html()),o._position(),n._afterShow.call(o)}}),Lobibox.alert.OPTIONS={warning:{title:"Warning"},info:{title:"Information"},success:{title:"Success"},error:{title:"Error"}},Lobibox.alert.DEFAULTS={},e.prototype=$.extend({},n,{constructor:e,_processInput:function(o){var t=n._processInput.call(this,o);return o=$.extend({},t,Lobibox.progress.DEFAULTS,o)},_init:function(){n._init.call(this),this.show()},_afterShow:function(){var o,t=this;t.$options.progressTpl?t.$progressBarElement=$(t.$options.progressTpl):t.$progressBarElement=t._createProgressbar(),t.$options.label&&(o=$("<label>"+t.$options.label+"</label>"));var i=$("<div></div>").append(o,t.$progressBarElement);t._setContent(i),t._position(),n._afterShow.call(t)},_createProgressbar:function(){var o=$('<div class="lobibox-progress-bar-wrapper lobibox-progress-outer"></div>').append('<div class="lobibox-progress-bar lobibox-progress-element"></div>');return this.$options.showProgressLabel&&o.append('<span class="lobibox-progress-text" data-role="progress-text"></span>'),o},setProgress:function(o){var t=this;if(100!==t.$progress)return o=Math.min(100,Math.max(0,o)),t.$progress=o,t._triggerEvent("progressUpdated"),100===t.$progress&&t._triggerEvent("progressCompleted"),t.$el.find(".lobibox-progress-element").css("width",o.toFixed(1)+"%"),t.$el.find('[data-role="progress-text"]').html(o.toFixed(1)+"%"),t},getProgress:function(){return this.$progress}}),Lobibox.progress.DEFAULTS={width:500,showProgressLabel:!0,label:"",progressTpl:!1,progressUpdated:null,progressCompleted:null},a.prototype=$.extend({},n,{constructor:a,_processInput:function(o){var t=n._processInput.call(this,o);return o.content&&"function"==typeof o.content&&(o.content=o.content()),o.content instanceof jQuery&&(o.content=o.content.clone()),o=$.extend({},t,Lobibox.window.DEFAULTS,o)},_init:function(){var o=this;n._init.call(o),o.setContent(o.$options.content),o.$options.url&&o.$options.autoload?(o.$options.showAfterLoad||o.show(),o.load(function(){o.$options.showAfterLoad&&o.show()})):o.show()},_afterShow:function(){this._position(),n._afterShow.call(this)},setParams:function(o){return this.$options.params=o,this},getParams:function(){return this.$options.params},setLoadMethod:function(o){return this.$options.loadMethod=o,this},getLoadMethod:function(){return this.$options.loadMethod},setContent:function(o){return this.$options.content=o,this.$el.find(".lobibox-body").html("").append(o),this},getContent:function(){return this.$options.content},setUrl:function(o){return this.$options.url=o,this},getUrl:function(){return this.$options.url},load:function(t){var i=this;return i.$options.url&&$.ajax(i.$options.url,{method:i.$options.loadMethod,data:i.$options.params}).done(function(o){i.setContent(o),t&&"function"==typeof t&&t(o)}),i}}),Lobibox.window.DEFAULTS={width:480,height:600,content:"",url:"",draggable:!0,autoload:!0,loadMethod:"GET",showAfterLoad:!0,params:{}}}(),Math.randomString=function(o){for(var t="",i="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",n=0;n<o;n++)t+=i.charAt(Math.floor(Math.random()*i.length));return t};Lobibox=Lobibox||{};!function(){function n(o,t){this.$type=null,this.$options=null,this.$el=null;var i,b=this,d=function(o){o.closest(".lb-notify-tabs").find(">li").removeClass("active"),o.addClass("active");var t=$(o.find(">a").attr("href"));t.closest(".lb-notify-wrapper").find(">.lb-tab-pane").removeClass("active"),t.addClass("active")},u=function(o){var t=$("<li></li>",{class:Lobibox.notify.OPTIONS[b.$type].class});return $("<a></a>",{href:"#"+o}).append('<i class="tab-control-icon '+b.$options.icon+'"></i>').appendTo(t),t},h=function(){return $("<div></div>",{class:"lb-tab-pane",id:Math.randomString(10)})},f=function(o){b.$options.closable&&$('<span class="lobibox-close">&times;</span>').click(function(o){o.preventDefault(),o.stopPropagation(),b.remove()}).appendTo(o)},g=function(o){b.$options.closeOnClick&&o.click(function(){b.remove()})},x=function(o){if(b.$options.delay){if(b.$options.delayIndicator){var t=$('<div class="lobibox-delay-indicator"><div></div></div>');o.append(t)}var i=0,n=1e3/30,s=(new Date).getTime(),e=setInterval(function(){b.$options.continueDelayOnInactiveTab?i=(new Date).getTime()-s:i+=n;var o=100*i/b.$options.delay;100<=o&&(o=100,b.remove(),e=clearInterval(e)),b.$options.delayIndicator&&t.find("div").css("width",o+"%")},n);b.$options.pauseDelayOnHover&&o.on("mouseenter.lobibox",function(){n=0}).on("mouseleave.lobibox",function(){n=1e3/30})}},v=function(o){return o=Math.min($(window).outerWidth(),o)};this.remove=function(){b.$el.removeClass(b.$options.showClass).addClass(b.$options.hideClass);var a=b.$el.parent(),o=a.closest(".lobibox-notify-wrapper-large"),t="#"+a.attr("id"),l=o.find('>.lb-notify-tabs>li:has(a[href="'+t+'"])');return l.addClass(Lobibox.notify.OPTIONS.class).addClass(b.$options.hideClass),setTimeout(function(){if("normal"===b.$options.size||"mini"===b.$options.size)b.$el.remove();else if("large"===b.$options.size){var o=(0===(i=(t=l).prev()).length&&(i=t.next()),0===i.length?null:i);o&&d(o),l.remove(),a.remove()}var t,i,n=Lobibox.notify.list,s=n.indexOf(b);n.splice(s,1);var e=n[s];e&&e.$options.showAfterPrevious&&e._init()},500),b},b._init=function(){var o,t,i,n,s,e,a,l,r,c=(e=Lobibox.notify.OPTIONS,a=$("<div></div>",{class:"lobibox-notify "+e[b.$type].class+" "+e.class+" "+b.$options.showClass}),i=$('<div class="lobibox-notify-icon-wrapper"></div>').appendTo(a),o=$('<div class="lobibox-notify-icon"></div>').appendTo(i),t=$("<div></div>").appendTo(o),b.$options.img?t.append('<img src="'+b.$options.img+'"/>'):b.$options.icon?t.append('<div class="icon-el"><i class="'+b.$options.icon+'"></i></div>'):a.addClass("without-icon"),s=$('<div class="lobibox-notify-msg">'+b.$options.msg+"</div>"),!1!==b.$options.messageHeight&&s.css("max-height",b.$options.messageHeight),n=$("<div></div>",{class:"lobibox-notify-body"}).append(s).appendTo(a),b.$options.title&&n.prepend('<div class="lobibox-notify-title">'+b.$options.title+"<div>"),f(a),"normal"!==b.$options.size&&"mini"!==b.$options.size||(g(a),x(a)),b.$options.width&&a.css("width",v(b.$options.width)),a);if("mini"===b.$options.size&&c.addClass("notify-mini"),"string"==typeof b.$options.position){var p=(r=("large"===b.$options.size?".lobibox-notify-wrapper-large":".lobibox-notify-wrapper")+"."+b.$options.position.replace(/\s/gi,"."),0===(l=$(r)).length&&(l=$("<div></div>").addClass(r.replace(/\./g," ").trim()).appendTo($("body")),"large"===b.$options.size&&l.append($('<ul class="lb-notify-tabs"></ul>')).append($('<div class="lb-notify-wrapper"></div>'))),l);!function(o,t){if("normal"===b.$options.size)t.hasClass("bottom")?t.prepend(o):t.append(o);else if("mini"===b.$options.size)t.hasClass("bottom")?t.prepend(o):t.append(o);else if("large"===b.$options.size){var i=h().append(o),n=u(i.attr("id"));t.find(".lb-notify-wrapper").append(i),t.find(".lb-notify-tabs").append(n),d(n),n.find(">a").click(function(){d(n)})}}(c,p),p.hasClass("center")&&p.css("margin-left","-"+p.width()/2+"px")}else $("body").append(c),c.css({position:"fixed",left:b.$options.position.left,top:b.$options.position.top});b.$el=c,b.$options.sound&&new Audio(b.$options.sound).play();b.$options.rounded&&b.$el.addClass("rounded"),b.$el.on("click.lobibox",function(o){b.$options.onClickUrl&&(window.location.href=b.$options.onClickUrl),b.$options.onClick&&"function"==typeof b.$options.onClick&&b.$options.onClick.call(b,o)}),b.$el.data("lobibox",b)},this.$type=o,this.$options=("mini"!==(i=t).size&&"large"!==i.size||(i=$.extend({},Lobibox.notify.OPTIONS[i.size],i)),"mini"!==(i=$.extend({},Lobibox.notify.OPTIONS[b.$type],Lobibox.notify.DEFAULTS,i)).size&&!0===i.title?i.title=Lobibox.notify.OPTIONS[b.$type].title:"mini"===i.size&&!0===i.title&&(i.title=!1),!0===i.icon&&(i.icon=Lobibox.notify.OPTIONS.icons[i.iconSource][b.$type]),!0===i.sound&&(i.sound=Lobibox.notify.OPTIONS[b.$type].sound),i.sound&&(i.sound=i.soundPath+i.sound+i.soundExt),i),b.$options.showAfterPrevious&&0!==Lobibox.notify.list.length||this._init()}Lobibox.notify=function(o,t){if(-1<["default","info","warning","error","success"].indexOf(o)){var i=new n(o,t);return Lobibox.notify.list.push(i),i}},Lobibox.notify.list=[],Lobibox.notify.closeAll=function(){var o=Lobibox.notify.list;for(var t in o)o[t].remove()},Lobibox.notify.DEFAULTS={title:!0,size:"normal",soundPath:"sounds/",soundExt:".ogg",showClass:"fadeInDown",hideClass:"zoomOut",icon:!0,msg:"",img:null,closable:!0,hideCloseButton:!1,delay:5e3,delayIndicator:!0,closeOnClick:!0,width:400,sound:!0,position:"bottom right",iconSource:"bootstrap",rounded:!1,messageHeight:60,pauseDelayOnHover:!0,onClickUrl:null,showAfterPrevious:!1,continueDelayOnInactiveTab:!0,onClick:null},Lobibox.notify.OPTIONS={class:"animated-fast",large:{width:500,messageHeight:96},mini:{class:"notify-mini",messageHeight:32},default:{class:"lobibox-notify-default",title:"Default",sound:!1},success:{class:"lobibox-notify-success",title:"Success",sound:"sound2"},error:{class:"lobibox-notify-error",title:"Error",sound:"sound4"},warning:{class:"lobibox-notify-warning",title:"Warning",sound:"sound5"},info:{class:"lobibox-notify-info",title:"Information",sound:"sound6"},icons:{bootstrap:{success:"glyphicon glyphicon-ok-sign",error:"glyphicon glyphicon-remove-sign",warning:"glyphicon glyphicon-exclamation-sign",info:"glyphicon glyphicon-info-sign"},fontAwesome:{success:"fa fa-check-circle",error:"fa fa-times-circle",warning:"fa fa-exclamation-circle",info:"fa fa-info-circle"}}}}();
if ($('.lobibox-notify-wrapper').length > 0) {
    $('.lobibox-notify-wrapper').delay(3000).fadeOut(1000);
}