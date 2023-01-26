var currentWidth = window.innerWidth;

//タッチデバイス用（:active:hoverを機能させる）
document.addEventListener("touchstart", function () {
  passive: true;
});

// prettier-ignore
/*--------------------------------------------------------------------------*
 * lazysizes - v5.2.2
 *--------------------------------------------------------------------------*/
!function(e){var t=function(u,D,f){"use strict";var k,H;if(function(){var e;var t={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:true,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:true,ricTimeout:0,throttleDelay:125};H=u.lazySizesConfig||u.lazysizesConfig||{};for(e in t){if(!(e in H)){H[e]=t[e]}}}(),!D||!D.getElementsByClassName){return{init:function(){},cfg:H,noSupport:true}}var O=D.documentElement,a=u.HTMLPictureElement,P="addEventListener",$="getAttribute",q=u[P].bind(u),I=u.setTimeout,U=u.requestAnimationFrame||I,l=u.requestIdleCallback,j=/^picture$/i,r=["load","error","lazyincluded","_lazyloaded"],i={},G=Array.prototype.forEach,J=function(e,t){if(!i[t]){i[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")}return i[t].test(e[$]("class")||"")&&i[t]},K=function(e,t){if(!J(e,t)){e.setAttribute("class",(e[$]("class")||"").trim()+" "+t)}},Q=function(e,t){var i;if(i=J(e,t)){e.setAttribute("class",(e[$]("class")||"").replace(i," "))}},V=function(t,i,e){var a=e?P:"removeEventListener";if(e){V(t,i)}r.forEach(function(e){t[a](e,i)})},X=function(e,t,i,a,r){var n=D.createEvent("Event");if(!i){i={}}i.instance=k;n.initEvent(t,!a,!r);n.detail=i;e.dispatchEvent(n);return n},Y=function(e,t){var i;if(!a&&(i=u.picturefill||H.pf)){if(t&&t.src&&!e[$]("srcset")){e.setAttribute("srcset",t.src)}i({reevaluate:true,elements:[e]})}else if(t&&t.src){e.src=t.src}},Z=function(e,t){return(getComputedStyle(e,null)||{})[t]},s=function(e,t,i){i=i||e.offsetWidth;while(i<H.minSize&&t&&!e._lazysizesWidth){i=t.offsetWidth;t=t.parentNode}return i},ee=function(){var i,a;var t=[];var r=[];var n=t;var s=function(){var e=n;n=t.length?r:t;i=true;a=false;while(e.length){e.shift()()}i=false};var e=function(e,t){if(i&&!t){e.apply(this,arguments)}else{n.push(e);if(!a){a=true;(D.hidden?I:U)(s)}}};e._lsFlush=s;return e}(),te=function(i,e){return e?function(){ee(i)}:function(){var e=this;var t=arguments;ee(function(){i.apply(e,t)})}},ie=function(e){var i;var a=0;var r=H.throttleDelay;var n=H.ricTimeout;var t=function(){i=false;a=f.now();e()};var s=l&&n>49?function(){l(t,{timeout:n});if(n!==H.ricTimeout){n=H.ricTimeout}}:te(function(){I(t)},true);return function(e){var t;if(e=e===true){n=33}if(i){return}i=true;t=r-(f.now()-a);if(t<0){t=0}if(e||t<9){s()}else{I(s,t)}}},ae=function(e){var t,i;var a=99;var r=function(){t=null;e()};var n=function(){var e=f.now()-i;if(e<a){I(n,a-e)}else{(l||r)(r)}};return function(){i=f.now();if(!t){t=I(n,a)}}},e=function(){var v,m,c,h,e;var y,z,g,p,C,b,A;var n=/^img$/i;var d=/^iframe$/i;var E="onscroll"in u&&!/(gle|ing)bot/.test(navigator.userAgent);var _=0;var w=0;var N=0;var M=-1;var x=function(e){N--;if(!e||N<0||!e.target){N=0}};var W=function(e){if(A==null){A=Z(D.body,"visibility")=="hidden"}return A||!(Z(e.parentNode,"visibility")=="hidden"&&Z(e,"visibility")=="hidden")};var S=function(e,t){var i;var a=e;var r=W(e);g-=t;b+=t;p-=t;C+=t;while(r&&(a=a.offsetParent)&&a!=D.body&&a!=O){r=(Z(a,"opacity")||1)>0;if(r&&Z(a,"overflow")!="visible"){i=a.getBoundingClientRect();r=C>i.left&&p<i.right&&b>i.top-1&&g<i.bottom+1}}return r};var t=function(){var e,t,i,a,r,n,s,l,o,u,f,c;var d=k.elements;if((h=H.loadMode)&&N<8&&(e=d.length)){t=0;M++;for(;t<e;t++){if(!d[t]||d[t]._lazyRace){continue}if(!E||k.prematureUnveil&&k.prematureUnveil(d[t])){R(d[t]);continue}if(!(l=d[t][$]("data-expand"))||!(n=l*1)){n=w}if(!u){u=!H.expand||H.expand<1?O.clientHeight>500&&O.clientWidth>500?500:370:H.expand;k._defEx=u;f=u*H.expFactor;c=H.hFac;A=null;if(w<f&&N<1&&M>2&&h>2&&!D.hidden){w=f;M=0}else if(h>1&&M>1&&N<6){w=u}else{w=_}}if(o!==n){y=innerWidth+n*c;z=innerHeight+n;s=n*-1;o=n}i=d[t].getBoundingClientRect();if((b=i.bottom)>=s&&(g=i.top)<=z&&(C=i.right)>=s*c&&(p=i.left)<=y&&(b||C||p||g)&&(H.loadHidden||W(d[t]))&&(m&&N<3&&!l&&(h<3||M<4)||S(d[t],n))){R(d[t]);r=true;if(N>9){break}}else if(!r&&m&&!a&&N<4&&M<4&&h>2&&(v[0]||H.preloadAfterLoad)&&(v[0]||!l&&(b||C||p||g||d[t][$](H.sizesAttr)!="auto"))){a=v[0]||d[t]}}if(a&&!r){R(a)}}};var i=ie(t);var B=function(e){var t=e.target;if(t._lazyCache){delete t._lazyCache;return}x(e);K(t,H.loadedClass);Q(t,H.loadingClass);V(t,L);X(t,"lazyloaded")};var a=te(B);var L=function(e){a({target:e.target})};var T=function(t,i){try{t.contentWindow.location.replace(i)}catch(e){t.src=i}};var F=function(e){var t;var i=e[$](H.srcsetAttr);if(t=H.customMedia[e[$]("data-media")||e[$]("media")]){e.setAttribute("media",t)}if(i){e.setAttribute("srcset",i)}};var s=te(function(t,e,i,a,r){var n,s,l,o,u,f;if(!(u=X(t,"lazybeforeunveil",e)).defaultPrevented){if(a){if(i){K(t,H.autosizesClass)}else{t.setAttribute("sizes",a)}}s=t[$](H.srcsetAttr);n=t[$](H.srcAttr);if(r){l=t.parentNode;o=l&&j.test(l.nodeName||"")}f=e.firesLoad||"src"in t&&(s||n||o);u={target:t};K(t,H.loadingClass);if(f){clearTimeout(c);c=I(x,2500);V(t,L,true)}if(o){G.call(l.getElementsByTagName("source"),F)}if(s){t.setAttribute("srcset",s)}else if(n&&!o){if(d.test(t.nodeName)){T(t,n)}else{t.src=n}}if(r&&(s||o)){Y(t,{src:n})}}if(t._lazyRace){delete t._lazyRace}Q(t,H.lazyClass);ee(function(){var e=t.complete&&t.naturalWidth>1;if(!f||e){if(e){K(t,"ls-is-cached")}B(u);t._lazyCache=true;I(function(){if("_lazyCache"in t){delete t._lazyCache}},9)}if(t.loading=="lazy"){N--}},true)});var R=function(e){if(e._lazyRace){return}var t;var i=n.test(e.nodeName);var a=i&&(e[$](H.sizesAttr)||e[$]("sizes"));var r=a=="auto";if((r||!m)&&i&&(e[$]("src")||e.srcset)&&!e.complete&&!J(e,H.errorClass)&&J(e,H.lazyClass)){return}t=X(e,"lazyunveilread").detail;if(r){re.updateElem(e,true,e.offsetWidth)}e._lazyRace=true;N++;s(e,t,r,a,i)};var r=ae(function(){H.loadMode=3;i()});var l=function(){if(H.loadMode==3){H.loadMode=2}r()};var o=function(){if(m){return}if(f.now()-e<999){I(o,999);return}m=true;H.loadMode=3;i();q("scroll",l,true)};return{_:function(){e=f.now();k.elements=D.getElementsByClassName(H.lazyClass);v=D.getElementsByClassName(H.lazyClass+" "+H.preloadClass);q("scroll",i,true);q("resize",i,true);q("pageshow",function(e){if(e.persisted){var t=D.querySelectorAll("."+H.loadingClass);if(t.length&&t.forEach){U(function(){t.forEach(function(e){if(e.complete){R(e)}})})}}});if(u.MutationObserver){new MutationObserver(i).observe(O,{childList:true,subtree:true,attributes:true})}else{O[P]("DOMNodeInserted",i,true);O[P]("DOMAttrModified",i,true);setInterval(i,999)}q("hashchange",i,true);["focus","mouseover","click","load","transitionend","animationend"].forEach(function(e){D[P](e,i,true)});if(/d$|^c/.test(D.readyState)){o()}else{q("load",o);D[P]("DOMContentLoaded",i);I(o,2e4)}if(k.elements.length){t();ee._lsFlush()}else{i()}},checkElems:i,unveil:R,_aLSL:l}}(),re=function(){var i;var n=te(function(e,t,i,a){var r,n,s;e._lazysizesWidth=a;a+="px";e.setAttribute("sizes",a);if(j.test(t.nodeName||"")){r=t.getElementsByTagName("source");for(n=0,s=r.length;n<s;n++){r[n].setAttribute("sizes",a)}}if(!i.detail.dataAttr){Y(e,i.detail)}});var a=function(e,t,i){var a;var r=e.parentNode;if(r){i=s(e,r,i);a=X(e,"lazybeforesizes",{width:i,dataAttr:!!t});if(!a.defaultPrevented){i=a.detail.width;if(i&&i!==e._lazysizesWidth){n(e,r,a,i)}}}};var e=function(){var e;var t=i.length;if(t){e=0;for(;e<t;e++){a(i[e])}}};var t=ae(e);return{_:function(){i=D.getElementsByClassName(H.autosizesClass);q("resize",t)},checkElems:t,updateElem:a}}(),t=function(){if(!t.i&&D.getElementsByClassName){t.i=true;re._();e._()}};return I(function(){H.init&&t()}),k={cfg:H,autoSizer:re,loader:e,init:t,uP:Y,aC:K,rC:Q,hC:J,fire:X,gW:s,rAF:ee}}(e,e.document,Date);e.lazySizes=t,"object"==typeof module&&module.exports&&(module.exports=t)}("undefined"!=typeof window?window:{});
// prettier-ignore
!function(e,t){var a=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",a,!0)};t=t.bind(null,e,e.document),"object"==typeof module&&module.exports?t(require("lazysizes")):"function"==typeof define&&define.amd?define(["lazysizes"],t):e.lazySizes?a():e.addEventListener("lazyunveilread",a,!0)}(window,function(e,n,i){"use strict";var l,o,d={};function u(e,t){var a,r;d[e]||(a=n.createElement(t?"link":"script"),r=n.getElementsByTagName("script")[0],t?(a.rel="stylesheet",a.href=e):a.src=e,d[e]=!0,d[a.src||a.href]=!0,r.parentNode.insertBefore(a,r))}n.addEventListener&&(l=function(e,t){var a=n.createElement("img");a.onload=function(){a.onload=null,a.onerror=null,a=null,t()},a.onerror=a.onload,a.src=e,a&&a.complete&&a.onload&&a.onload()},addEventListener("lazybeforeunveil",function(e){var t,a,r;if(e.detail.instance==i&&!e.defaultPrevented){var n=e.target;if("none"==n.preload&&(n.preload=n.getAttribute("data-preload")||"auto"),null!=n.getAttribute("data-autoplay"))if(n.getAttribute("data-expand")&&!n.autoplay)try{n.play()}catch(e){}else requestAnimationFrame(function(){n.setAttribute("data-expand","-10"),i.aC(n,i.cfg.lazyClass)});(t=n.getAttribute("data-link"))&&u(t,!0),(t=n.getAttribute("data-script"))&&u(t),(t=n.getAttribute("data-require"))&&(i.cfg.requireJs?i.cfg.requireJs([t]):u(t)),(a=n.getAttribute("data-bg"))&&(e.detail.firesLoad=!0,l(a,function(){n.style.backgroundImage="url("+(o.test(a)?JSON.stringify(a):a)+")",e.detail.firesLoad=!1,i.fire(n,"_lazyloaded",{},!0,!0)})),(r=n.getAttribute("data-poster"))&&(e.detail.firesLoad=!0,l(r,function(){n.poster=r,e.detail.firesLoad=!1,i.fire(n,"_lazyloaded",{},!0,!0)}))}},!(o=/\(|\)|\s|'/)))});

// prettier-ignore
/*--------------------------------------------------------------------------*
 * jquery-match-height 0.7.2 by @liabru
 * http://brm.io/jquery-match-height/
 * License MIT
 *--------------------------------------------------------------------------*/
// prettier-ignore
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,n=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),i=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-n(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(i-a))<=o?r[r.length-1]=s.add(e):r.push(e),i=a}),r},i=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=i(e);if(o.remove){var n=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(n)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.2",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=n,r._parseOptions=i,r._apply=function(e,o){var s=i(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),u=h.parents().filter(":hidden");return u.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),u.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),i=0;if(s.target)i=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),n=e.css("display");"inline-block"!==n&&"flex"!==n&&"inline-flex"!==n&&(n="block");var a={
display:n};a[s.property]="",e.css(a),e.outerHeight(!1)>i&&(i=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=n(e.css("border-top-width"))+n(e.css("border-bottom-width")),o+=n(e.css("padding-top"))+n(e.css("padding-bottom"))),e.css(s.property,i-o+"px"))})}),u.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),n=o.attr("data-mh")||o.attr("data-match-height");n in e?e[n]=e[n].add(o):e[n]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(n,a){if(a&&"resize"===a.type){var i=t(window).width();if(i===e)return;e=i;
}n?o===-1&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi);var h=t.fn.on?"on":"bind";t(window)[h]("load",function(t){r._update(!1,t)}),t(window)[h]("resize orientationchange",function(t){r._update(!0,t)})});

/*--------------------------------------------------------------------------*
 * Viewport
 *--------------------------------------------------------------------------*/
var baseW = 1400; //画面サイズ
var spWidth = 750;
jQuery(function () {
  updateMetaViewport();
});
function updateMetaViewport() {
  var viewportContent;
  var w = window.outerWidth;
  var cw = document.documentElement.clientWidth;
  if (!w) {
    w = cw;
  }
  if (w > spWidth) {
    viewportContent = "width=" + baseW;
  } else {
    // viewportContent = "width=device-width,initial-scale=1.0,minimum-scale=1.0";
    /* 実験的にviewportを375pxに変更する */
    viewportContent = "width=375";
  }
  document.querySelector("meta[name='viewport']").setAttribute("content", viewportContent);
}

/*resize*/
window.addEventListener("resize", function () {
  if (currentWidth == window.innerWidth) {
    return;
  }
  currentWidth = window.innerWidth;
  updateMetaViewport();
});
window.addEventListener("orientationchange", function () {
  if (currentWidth == window.innerWidth) {
    return;
  }
  currentWidth = window.innerWidth;
  updateMetaViewport();
});



jQuery(function () {
  //現在地
  jQuery("header nav > ul > li > a").each(function () {
    var $href = jQuery(this).attr("href");
    if ($location.match($href)) {
      jQuery(this).addClass("active");
    }
  });

  //ページナビ
  if (jQuery('[id^="page_nav"]').length) {
    jQuery('[id^="page_nav"] li').each(function () {
      var $pageHref = jQuery(this).find("a").attr("href");
      if (
        ($location.match($pageHref) && $pageHref != "./") ||
        (!$location.match("php") && $pageHref == "./")
      ) {
        jQuery(this).find("a").addClass("active");
      }
    });
  }

  //デバイス判定（タッチが有効か否か）
  var isTouchDevice =
    "ontouchstart" in window || (window.DocumentTouch && document instanceof DocumentTouch);
  //デバイス判定によるイベントの決定
  var eventType = isTouchDevice ? "touchend" : "click";

  //ハンバーガー
  jQuery(".js-hamburger").on(eventType, function () {
    jQuery(".js-drawer").toggleClass("active").css("transition", "all .5s ease-in-out"); // 画面表示時にドロワーちらつきを防止のため、ここでcssの追加処理
    jQuery(this).toggleClass("active");
  });
  // jQuery('.js-drawer').on(eventType, function () {
  // 	jQuery('.js-hamburger').toggleClass('active');
  // 	jQuery(this).toggleClass('active');
  // });

  //SP下タブ
  if (jQuery(".l-footer__fixed").length) {
    var flag = false,
      spFixBtm = jQuery(".l-footer__fixed");

    jQuery(window).on("scroll", function () {
      if (jQuery(window).scrollTop() > (window.innerWidth / 100) * 50) {
        if (!flag) {
          flag = true;
          spFixBtm.css({ visibility: "visible" });
          spFixBtm.animate({ opacity: 1 }, { duration: 500, easing: "swing" });
        }
      }
    });
  }

  //スムーススクロール
  jQuery('a[href^="#"]').on("click", function () {
    var speed = 400;
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    jQuery("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  //pagetop アニメーション
  var pagetop = jQuery(".pagetop");
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > window.innerHeight / 2) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.on("click", function () {
    jQuery("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

//Animate.css用
// jQuery(window).on('load scroll', function () {
// 	var elem = jQuery('.animated');
// 	elem.each(function () {
// 		var isAnimate = jQuery(this).data('animate');
// 		var elemOffset = jQuery(this).offset().top;
// 		var elemHeight = jQuery(this).height();
// 		var scrollPos = jQuery(window).scrollTop();
// 		var wh = jQuery(window).height();

// 		var aniAnchor = wh / 6;
// 		var dataAnchor = jQuery(this).attr('data-animate-anchor');
// 		if (dataAnchor == 0) {
// 			var aniAnchor = 0;
// 		} else if (dataAnchor && $.isNumeric(dataAnchor)) {
// 			var aniAnchor = wh / dataAnchor;
// 		}

// 		if (dataAnchor == 'bottom') {
// 			if (elemOffset+elemHeight < wh + scrollPos) {
// 				if (isAnimate) {jQuery(this).addClass(isAnimate);}
// 				jQuery(this).addClass('move');
// 			}
// 		}else {
// 			if (scrollPos > elemOffset - wh + aniAnchor) {
// 				if (isAnimate) {jQuery(this).addClass(isAnimate);}
// 				jQuery(this).addClass('move');
// 			}
// 		}
// 	});
// });

jQuery(function () {
  /* matchHeight */
  // jQuery('.p-feature__img-card-body.js-matchHeight').matchHeight();
});

// スマホファーストビュー高調整
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

/* =====================================================
  gsap
===================================================== */
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element

      gsap.registerPlugin(ScrollTrigger);
      // const stagger = 0.05;
      const stagger = {
        from: "start",
        // amount: 1.5,
        each: 1,
      };
      let mm = gsap.matchMedia();
      // matchMedia 書き方
      //①
      // mm.add({
      // 	isMobile: "(max-width: 750px)",
      // 	idDesktop: "(min-width: 751px)",
      // }, (context) => {
      // 	let {isMobile, isDesktop} = context.conditions;

      // 	gsap.to(".box", {
      // 		rotation:isMobile? -360:360,
      // 		duration:2,
      // 	})
      // })

      //②
      // mm.add('(max-width: 750px)', () => {
      // 	gsap.to('.js-nyoki', {});
      // });

      /* ------------------------------------------------------
  fvタイトルアニメーション
---------------------------------------------------------*/
      gsap
        .timeline({
          scrollTrigger: {
            trigger: ".js-fv-title",
            start: "top 64%",
            toggleActions: "play none none none",
            // markers: true,
          },
          defaults: {
            duration: 0.8,
            ease: "power1.ease",
          },
        })
        .set(".p-index-fv__title-wrapper", { opacity: 1 })
        .fromTo(
          ".mask01",
          // 1,
          {
            clipPath: "inset(0% 100% 0% 0%)",
          },
          {
            clipPath: "inset(0% 0% 0% 0%)",
            delay: 0.2,
          }
        )
        .fromTo(
          ".mask02",
          // 1,
          {
            clipPath: "inset(0% 100% 0% 0%)",
          },
          {
            clipPath: "inset(0% 0% 0% 0%)",
          },
          "=-.3"
        )
        .fromTo(
          ".mask03",
          1.5,
          {
            autoAlpha: 0,
          },
          {
            autoAlpha: 1,
            ease: "none",
          },
          "=-.4"
        )
        .fromTo(
          ".mask03",
          0.5,
          {
            clipPath: "inset(0% 100% 0% 0%)",
          },
          {
            clipPath: "inset(0% 0% 0% 0%)",
            ease: "none",
          },
          "<"
        );

      /* ------------------------------------------------------
  にょき Bottom to Top
---------------------------------------------------------*/
      //wrapper要素にoverflow hiddenを設定
      gsap.set(".js-nyoki-wrapper", {
        overflow: "hidden",
        display: "flex",
        justifyContent: "center",
      });

      const nyokiAnim = gsap.timeline({
        scrollTrigger: {
          trigger: ".js-nyoki",
          start: "top 80%",
          duration: 0.5,
          // markers: true,
        },
      });
      // トリガー到達時にアニメーションする1つ目の要素
      nyokiAnim.from(
        ".js-nyoki", //アニメーションする要素
        { yPercent: 100 }
      );

      /* ------------------------------------------------------
  postエリアアニメーション
---------------------------------------------------------*/

      gsap.utils.toArray(".js-postAnim").forEach((el) => {
        const q = gsap.utils.selector(el);

        gsap
          .timeline({
            scrollTrigger: {
              trigger: el,
              start: "top 80%",
              toggleActions: "play none none none",
              duration: 1,
              ease: "power3.inout",
              // markers: true,
            },
          })
          .from(
            // にょき
            q(".p-index-post__en-heading"),
            {
              y: "100%",
            }
          )
          .from(
            // フェードイン
            q(".p-index-post__ja-heading"),
            {
              alpha: 0,
            }
          )
          .fromTo(
            q(".p-index-post__post-item"),
            1.2,
            {
              clipPath: "inset(0% 100% 0% 0%)",
            },
            {
              clipPath: "inset(0% 0% 0% 0%)",
              ease: "expo.out",
            }
          );
      });

      /* ------------------------------------------------------
  h2アニメーション (にょき + フェードイン)
---------------------------------------------------------*/

      gsap.utils.toArray(".js-titleAnim").forEach((el) => {
        const q = gsap.utils.selector(el);
        gsap
          .timeline({
            scrollTrigger: {
              trigger: el,
              start: "top 80%",
              toggleActions: "play none none none",
              duration: 0.5,
              ease: "power3.inout",
              stagger,
              // markers: true,
            },
          })
          .from(
            // にょき
            q(".js-move01"),
            {
              y: "100%",
            }
          )
          .from(
            // フェードイン
            q(".js-move02"),
            {
              alpha: 0,
            }
          );
      });

      /* ------------------------------------------------------
  連続フェードアニメーション
---------------------------------------------------------*/
      gsap
        .timeline({
          scrollTrigger: {
            trigger: ".js-fade-stagger",
            start: "top 50%",
            toggleActions: "play none none none",
            duration: 0.5,
            ease: "power3.inout",
            stagger,
            // markers: true,
          },
        })
        .fromTo(
          ".p-index-policy__grid-img",
          0.6,
          {
            autoAlpha: 0,
          },
          {
            autoAlpha: 1,
            stagger: {
              from: "start",
              amount: 1.2,
              // each: 0.4,
            },
          }
        );

      /* ------------------------------------------------------
  パララックス
---------------------------------------------------------*/
      gsap.utils.toArray(".js-parallax").forEach((wrap) => {
        let y = wrap.getAttribute("data-y") || -100;
        // mm.add('(max-width: 750px)', () => {
        // 	y = '-20vw';
        // });

        gsap.to(wrap, {
          y: y,
          ease: "none",
          scrollTrigger: {
            trigger: wrap,
            start: "top bottom",
            end: "bottom top",
            scrub: 0.3, // アニメーション時間
          },
        });
      });

      /* ------------------------------------------------------
  Entrance exams リスト アニメーション
---------------------------------------------------------*/
      gsap
        .timeline({
          scrollTrigger: {
            trigger: ".js-titleAnim--entrance",
            start: "top 80%",
            toggleActions: "play none none none",
            duration: 0.5,
            ease: "power3.inout",
            stagger,
            // markers: true,
          },
        })
        .from(
          // にょき
          ".js-titleAnim--entrance .js-move01",
          {
            y: "100%",
          }
        )
        .from(
          // フェードイン
          ".js-titleAnim--entrance .js-move02",
          {
            alpha: 0,
          }
        )
        .fromTo(
          ".js-titleAnim--entrance .p-index-entrance__item",
          0.6,
          {
            autoAlpha: 0,
          },
          {
            autoAlpha: 1,
            stagger: {
              from: "start",
              // amount: 1.5,
              each: 0.2,
            },
          },
          "=-.1"
        );

      /* ------------------------------------------------------
				clip-pathアニメーション
			---------------------------------------------------------*/
      gsap
        .timeline({
          scrollTrigger: {
            trigger: ".l-footer__buttons",
            start: "top 80%",
            toggleActions: "play none none none",
            // markers: true,
          },
          defaults: {
            duration: 0.5,
            ease: "expo.inOut",
          },
        })
        .fromTo(
          ".l-footer__buttons .js-move01",
          // 1,
          {
            clipPath: "inset(0% 100% 0% 0%)",
          },
          {
            clipPath: "inset(0% 0% 0% 0%)",
          }
        )
        .fromTo(
          ".l-footer__buttons .js-move02",
          // 1,
          {
            clipPath: "inset(0% 100% 0% 0%)",
          },
          {
            clipPath: "inset(0% 0% 0% 0%)",
          }
          // '=-.2'
        );

      console.log("window loaded");
    },
    false
  );
});


/* -------------------------------------------- スプライド */

const target = ".js-splide";
const options = {
  mediaQuery: "max",
  fixedWidth: "auto",
  fixedHeight: "auto",
  flickPower: 200,
  type: "loop",
  drag: "free",
  // drag: false,
  pagination: false,
  arrows: false,
  autoScroll: {
    speed: 1,
    autoStart: true,
    pauseOnHover: false,
    pauseOnFocus: false,
  },
  breakpoints: {
    750: {
      // fixedHeight: '160px',
      fixedWidth: "200px",
      autoScroll: {
        speed: 0.5,
      },
    },
  },
};

const mySplide = new Splide(target, options);
mySplide.mount(window.splide.Extensions);

/* -------------------------------------------- 高さ調整 */

// function equalHeight(elements) {
// 	const target = Array.from(document.querySelectorAll(elements));
// 	const heightList = [];
// 	target.forEach((element) => {
// 		const height = element.clientHeight;
// 		heightList.push(height);
// 	});
// 	const maxHeight = Math.max.apply(null, heightList);
// 	target.forEach((element) => {
// 		element.style.height = maxHeight + 'px';
// 	});
// }

// ターゲットクラスを指定
// equalHeight('.js-equal-height');
// equalHeight('.js-equal-height02');

// js版メディアクエリ
// if (window.matchMedia('(max-width: 700px)').matches) {
// 	// ウィンドウサイズ700px以下のときの処理
// } else {
// 	// それ以外の処理
// }
