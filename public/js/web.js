!function(e){var n={};function t(i){if(n[i])return n[i].exports;var a=n[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,t),a.l=!0,a.exports}t.m=e,t.c=n,t.d=function(e,n,i){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:i})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=0)}([function(e,n,t){t(1),t(2),t(3),e.exports=t(4)},function(e,n){function t(){$(".Fiter-Container").addClass("Hidden"),$("body, html").css("overflow","scroll")}function i(){$("#MainMenu").slideUp(100),$("html").css("overflow-y","scroll"),$(".MainMenuA").removeClass("wow slideInLeft")}function a(e){e.css("background","red");var n=e.offset();return window.scrollTo(n.left,n.top),!1}(new WOW).init(),$(window).on("load",function(){$("#MainLoader").fadeOut("slow")}),$(".Show-Mobile-Filter").click(function(){$(".Fiter-Container").hasClass("Hidden")?($(".Fiter-Container").removeClass("Hidden"),$("body, html").css("overflow","hidden")):t()}),$(".Close-Mobile-Filters").click(function(){t()}),(new WOW).init(),$(document).ready(function(){screen.width<765&&($(".Contact-Tab").hide(200),$(window).scroll(function(){$(window).scrollTop()>500?$(".Contact-Tab").show(200):$(".Contact-Tab").hide(200)}))}),$("#MainMenu").hide(),$("#ContactNavBtn").click(function(){i()}),$(".MainMenuBtn").click(function(){$(this).hasClass("is-active")?(i(),$(".OpenedItem").each(function(e,n){var t=$(this).data("height");$(this).animate({height:t})}),$(this).removeClass("is-active")):($("#MainMenu").slideDown(100),$("html").css("overflow-y","hidden"),$(this).addClass("is-active"))}),$("#DeportivosRecreativosBtn").click(function(){a($("#DeportivosRecreativos"))}),$(".HomeItem > .inner").each(function(){var e=$(this).height();$(this).data("height",e)}),$(document).ready(function(){$(".HomeItemBtn").click(function(){$(this).parent().addClass("OpenedItem");$(".inner .OpenedItem");$(".OpenedItem").each(function(e,n){var t=$(this).data("height");$(this).animate({height:t})});var e=$(this).parent().siblings(".Overlay"),n=$(this).parent().siblings(".Overlay").children(".Overlay-Text");$(".Overlay-Text").fadeOut(),$(".Overlay-Text").addClass("Hidden"),$.when($(".Overlay-Color").animate({left:"100%"},400)).done(function(){$(".Overlay").not(e).addClass("Hidden")});var t=$(this).parent().siblings(".Overlay").children(".Overlay-Text");$(this).parent().siblings(".Overlay").removeClass("Hidden"),$(this).parent().siblings(".Overlay").children(".Overlay-Color").animate({left:"0"},500,function(){t.removeClass("Hidden",{duration:1500}),$(".Overlay-Text").fadeIn("100")});var i=n.getHeightFromHidden(function(){return this.height()}),a=$(this).parent().height();"avoid"!=$(this).data("action")&&i>a&&($(this).parent().data("height",a),$(this).parent().animate({height:i}))}),$(".CloseOverlay").click(function(){$.when($(".Overlay-Text").fadeOut(150)).done(function(){$(".Overlay-Text").addClass("Hidden")}),$(".Overlay-Color").animate({left:"100%"},450,function(){$(".Overlay").addClass("Hidden")});var e=$(this).parent().parent().siblings(".inner");if("avoid"!=$(this).data("action")){var n=e.data("height")||"";e.animate({height:n})}})}),$.fn.getHeightFromHidden=function(e){var n,t=$(this).clone();return t.css({visibility:"hidden",display:"block"}).insertAfter(this),t.attr("style",t.attr("style").replace("block","block !important")),n=e.apply(t),t.remove(),n},$("#Empresas").hide(),$(".BtnEmpresas").click(function(){screen.width>"800"?$(".Home-Desktop, .MainMenuBtn").hide(500):$(".Home-Mobile, .MainMenuBtn").hide(500),$("html, body").animate({scrollTop:0},"0"),$("#Main-Big-Menu").fadeOut(0,function(){$("#Empresas").fadeIn(0)})}),$(".Close-Empresas").click(function(){screen.width>"800"?$.when($(".Home-Desktop, .MainMenuBtn").show(0)).then(function(e){a($("#PrupuestaParaEmpresas"))}):$(".Home-Mobile, .MainMenuBtn").show(200),$("#Empresas").fadeOut(0,function(){$("#Main-Big-Menu").fadeIn(0)})}),$(".goToTop").css("display","none"),$(window).scroll(function(){$(window).scrollTop()>800?$(".goToTop").fadeIn(500):$(".goToTop").fadeOut(500)}),$(".goToTop").click(function(){$("html, body").animate({scrollTop:0},"fast")})},function(e,n){},function(e,n){},function(e,n){}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgMWI1ZmNlZDVkZjRkMjQ3MTE5OTQiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy93ZWIvd2ViLmpzIl0sIm5hbWVzIjpbImluc3RhbGxlZE1vZHVsZXMiLCJfX3dlYnBhY2tfcmVxdWlyZV9fIiwibW9kdWxlSWQiLCJleHBvcnRzIiwibW9kdWxlIiwiaSIsImwiLCJtb2R1bGVzIiwiY2FsbCIsIm0iLCJjIiwiZCIsIm5hbWUiLCJnZXR0ZXIiLCJvIiwiT2JqZWN0IiwiZGVmaW5lUHJvcGVydHkiLCJjb25maWd1cmFibGUiLCJlbnVtZXJhYmxlIiwiZ2V0IiwibiIsIl9fZXNNb2R1bGUiLCJvYmplY3QiLCJwcm9wZXJ0eSIsInByb3RvdHlwZSIsImhhc093blByb3BlcnR5IiwicCIsInMiLCJjbG9zZUZpbHRlcnMiLCIkIiwiYWRkQ2xhc3MiLCJjc3MiLCJjbG9zZU1lbnUiLCJzbGlkZVVwIiwicmVtb3ZlQ2xhc3MiLCJnb1RvQW5jaG9yIiwiYW5jaG9yIiwibmV3X3Bvc2l0aW9uIiwib2Zmc2V0Iiwid2luZG93Iiwic2Nyb2xsVG8iLCJsZWZ0IiwidG9wIiwiV09XIiwiaW5pdCIsIm9uIiwiZmFkZU91dCIsImNsaWNrIiwiaGFzQ2xhc3MiLCJkb2N1bWVudCIsInJlYWR5Iiwic2NyZWVuIiwid2lkdGgiLCJoaWRlIiwic2Nyb2xsIiwic2Nyb2xsVG9wIiwic2hvdyIsInRoaXMiLCJlYWNoIiwib2JqIiwiaGVpZ2h0IiwiZGF0YSIsImFuaW1hdGUiLCJzbGlkZURvd24iLCJpbm5lckhlaWdodCIsInBhcmVudCIsInRoaXNPdmVybGF5Iiwic2libGluZ3MiLCJ0aGlzT3ZlcmxheVRleHQiLCJjaGlsZHJlbiIsIndoZW4iLCJkb25lIiwibm90IiwidGV4dCIsImR1cmF0aW9uIiwiZmFkZUluIiwib3ZlcmxheUhlaWdodCIsImdldEhlaWdodEZyb21IaWRkZW4iLCJwYXJlbnRIZWlnaHQiLCJvcmlnaW5hbEhlaWdodCIsImZuIiwicmVzdWx0IiwiZWxlbWVudCIsImNsb25lIiwidmlzaWJpbGl0eSIsImRpc3BsYXkiLCJpbnNlcnRBZnRlciIsImF0dHIiLCJyZXBsYWNlIiwiYXBwbHkiLCJyZW1vdmUiLCJ0aGVuIiwieCJdLCJtYXBwaW5ncyI6ImFBQ0EsSUFBQUEsS0FHQSxTQUFBQyxFQUFBQyxHQUdBLEdBQUFGLEVBQUFFLEdBQ0EsT0FBQUYsRUFBQUUsR0FBQUMsUUFHQSxJQUFBQyxFQUFBSixFQUFBRSxJQUNBRyxFQUFBSCxFQUNBSSxHQUFBLEVBQ0FILFlBVUEsT0FOQUksRUFBQUwsR0FBQU0sS0FBQUosRUFBQUQsUUFBQUMsSUFBQUQsUUFBQUYsR0FHQUcsRUFBQUUsR0FBQSxFQUdBRixFQUFBRCxRQUtBRixFQUFBUSxFQUFBRixFQUdBTixFQUFBUyxFQUFBVixFQUdBQyxFQUFBVSxFQUFBLFNBQUFSLEVBQUFTLEVBQUFDLEdBQ0FaLEVBQUFhLEVBQUFYLEVBQUFTLElBQ0FHLE9BQUFDLGVBQUFiLEVBQUFTLEdBQ0FLLGNBQUEsRUFDQUMsWUFBQSxFQUNBQyxJQUFBTixLQU1BWixFQUFBbUIsRUFBQSxTQUFBaEIsR0FDQSxJQUFBUyxFQUFBVCxLQUFBaUIsV0FDQSxXQUEyQixPQUFBakIsRUFBQSxTQUMzQixXQUFpQyxPQUFBQSxHQUVqQyxPQURBSCxFQUFBVSxFQUFBRSxFQUFBLElBQUFBLEdBQ0FBLEdBSUFaLEVBQUFhLEVBQUEsU0FBQVEsRUFBQUMsR0FBc0QsT0FBQVIsT0FBQVMsVUFBQUMsZUFBQWpCLEtBQUFjLEVBQUFDLElBR3REdEIsRUFBQXlCLEVBQUEsR0FHQXpCLElBQUEwQixFQUFBLGtFQy9CQSxTQUFTQyxJQUNSQyxFQUFFLG9CQUFvQkMsU0FBUyxVQUMvQkQsRUFBRSxjQUFjRSxJQUFJLFdBQVksVUFrRGpDLFNBQVNDLElBQ1JILEVBQUUsYUFBYUksUUFBUSxLQUN2QkosRUFBRSxRQUFRRSxJQUFJLGFBQWEsVUFDM0JGLEVBQUUsY0FBY0ssWUFBWSxtQkFtTDdCLFNBQVNDLEVBQVdDLEdBQ25CQSxFQUFPTCxJQUFJLGFBQWMsT0FDekIsSUFBSU0sRUFBZUQsRUFBT0UsU0FFMUIsT0FEQUMsT0FBT0MsU0FBU0gsRUFBYUksS0FBTUosRUFBYUssTUFDekMsR0F0UVIsSUFBSUMsS0FBTUMsT0FRVmYsRUFBRVUsUUFBUU0sR0FBRyxPQUFRLFdBQ2pCaEIsRUFBRSxlQUFlaUIsUUFBUSxVQW9CN0JqQixFQUFFLHVCQUF1QmtCLE1BQU0sV0FDM0JsQixFQUFFLG9CQUFvQm1CLFNBQVMsV0FWbENuQixFQUFFLG9CQUFvQkssWUFBWSxVQUNsQ0wsRUFBRSxjQUFjRSxJQUFJLFdBQVksV0FZL0JILE1BSUZDLEVBQUUseUJBQXlCa0IsTUFBTSxXQUNoQ25CLE9BSUQsSUFBSWUsS0FBTUMsT0FPVmYsRUFBRW9CLFVBQVVDLE1BQU0sV0FDYkMsT0FBT0MsTUFBUSxNQUNsQnZCLEVBQUUsZ0JBQWdCd0IsS0FBSyxLQUN2QnhCLEVBQUVVLFFBQVFlLE9BQU8sV0FDWnpCLEVBQUVVLFFBQVFnQixZQUFjLElBQzNCMUIsRUFBRSxnQkFBZ0IyQixLQUFLLEtBRXZCM0IsRUFBRSxnQkFBZ0J3QixLQUFLLFVBYTNCeEIsRUFBRSxhQUFhd0IsT0FhZnhCLEVBQUUsa0JBQWtCa0IsTUFBTSxXQUN6QmYsTUFHREgsRUFBRSxnQkFBZ0JrQixNQUFNLFdBQ25CbEIsRUFBRTRCLE1BQU1ULFNBQVMsY0FJcEJoQixJQUVBSCxFQUFFLGVBQWU2QixLQUFLLFNBQVNyRCxFQUFHc0QsR0FDakMsSUFBSUMsRUFBUy9CLEVBQUU0QixNQUFNSSxLQUFLLFVBQzFCaEMsRUFBRTRCLE1BQU1LLFNBQVNGLE9BQVFBLE1BRzFCL0IsRUFBRTRCLE1BQU12QixZQUFZLGVBMUJyQkwsRUFBRSxhQUFha0MsVUFBVSxLQUN6QmxDLEVBQUUsUUFBUUUsSUFBSSxhQUFhLFVBZ0IxQkYsRUFBRTRCLE1BQU0zQixTQUFTLGdCQWNuQkQsRUFBRSw2QkFBNkJrQixNQUFNLFdBRXBDWixFQURhTixFQUFFLDZCQVdoQkEsRUFBRSxzQkFBc0I2QixLQUFLLFdBQzVCLElBQUlNLEVBQWNuQyxFQUFFNEIsTUFBTUcsU0FDMUIvQixFQUFFNEIsTUFBTUksS0FBSyxTQUFVRyxLQUd4Qm5DLEVBQUVvQixVQUFVQyxNQUFNLFdBR2pCckIsRUFBRSxnQkFBZ0JrQixNQUFNLFdBRXZCbEIsRUFBRTRCLE1BQU1RLFNBQVNuQyxTQUFTLGNBQ1JELEVBQUUsc0JBRXBCQSxFQUFFLGVBQWU2QixLQUFLLFNBQVNyRCxFQUFHc0QsR0FDakMsSUFBSUMsRUFBUy9CLEVBQUU0QixNQUFNSSxLQUFLLFVBQzFCaEMsRUFBRTRCLE1BQU1LLFNBQVNGLE9BQVFBLE1BRzFCLElBQUlNLEVBQWNyQyxFQUFFNEIsTUFBTVEsU0FBU0UsU0FBUyxZQUN4Q0MsRUFBa0J2QyxFQUFFNEIsTUFBTVEsU0FBU0UsU0FBUyxZQUFZRSxTQUFTLGlCQUVyRXhDLEVBQUUsaUJBQWlCaUIsVUFDbkJqQixFQUFFLGlCQUFpQkMsU0FBUyxVQUM1QkQsRUFBRXlDLEtBQUt6QyxFQUFFLGtCQUFrQmlDLFNBQVNyQixLQUFLLFFBQVMsTUFBTThCLEtBQUssV0FDNUQxQyxFQUFFLFlBQVkyQyxJQUFJTixHQUFhcEMsU0FBUyxZQUt6QyxJQUFJMkMsRUFBTzVDLEVBQUU0QixNQUFNUSxTQUFTRSxTQUFTLFlBQVlFLFNBQVMsaUJBRTFEeEMsRUFBRTRCLE1BQU1RLFNBQVNFLFNBQVMsWUFBWWpDLFlBQVksVUFDbERMLEVBQUU0QixNQUFNUSxTQUFTRSxTQUFTLFlBQVlFLFNBQVMsa0JBQzdDUCxTQUFTckIsS0FBSyxLQUNmLElBQUssV0FDSmdDLEVBQUt2QyxZQUFZLFVBQVd3QyxTQUFVLE9BQ3RDN0MsRUFBRSxpQkFBaUI4QyxPQUFPLFNBSTVCLElBQUlDLEVBQWlCUixFQUFnQlMsb0JBQW9CLFdBQVksT0FBT3BCLEtBQUtHLFdBQzdFa0IsRUFBZWpELEVBQUU0QixNQUFNUSxTQUFTTCxTQUNQLFNBQTFCL0IsRUFBRTRCLE1BQU1JLEtBQUssV0FHYmUsRUFBZ0JFLElBQ2xCakQsRUFBRTRCLE1BQU1RLFNBQVNKLEtBQUssU0FBVWlCLEdBQ2hDakQsRUFBRTRCLE1BQU1RLFNBQVNILFNBQVNGLE9BQVFnQixPQU1wQy9DLEVBQUUsaUJBQWlCa0IsTUFBTSxXQUV4QmxCLEVBQUV5QyxLQUFLekMsRUFBRSxpQkFBaUJpQixRQUFRLE1BQU15QixLQUFLLFdBQzVDMUMsRUFBRSxpQkFBaUJDLFNBQVMsWUFHN0JELEVBQUUsa0JBQWtCaUMsU0FBU3JCLEtBQUssUUFBUyxJQUMzQyxXQUNDWixFQUFFLFlBQVlDLFNBQVMsWUFHeEIsSUFBSW1DLEVBQVNwQyxFQUFFNEIsTUFBTVEsU0FBU0EsU0FBU0UsU0FBUyxVQUNoRCxHQUE2QixTQUExQnRDLEVBQUU0QixNQUFNSSxLQUFLLFVBQWhCLENBSUEsSUFBSWtCLEVBQWlCZCxFQUFPSixLQUFLLFdBQWEsR0FDOUNJLEVBQU9ILFNBQVNGLE9BQVFtQixTQU0xQmxELEVBQUVtRCxHQUFHSCxvQkFBc0IsU0FBU0csR0FDbkMsSUFBK0JDLEVBQTNCQyxFQUFVckQsRUFBRTRCLE1BQU0wQixRQU90QixPQUxBRCxFQUFRbkQsS0FBS3FELFdBQVksU0FBVUMsUUFBUyxVQUFVQyxZQUFZN0IsTUFFbEV5QixFQUFRSyxLQUFLLFFBQVNMLEVBQVFLLEtBQUssU0FBU0MsUUFBUSxRQUFTLHFCQUM3RFAsRUFBU0QsRUFBR1MsTUFBTVAsR0FDbEJBLEVBQVFRLFNBQ0RULEdBSVJwRCxFQUFFLGFBQWF3QixPQUNmeEIsRUFBRSxnQkFBZ0JrQixNQUFNLFdBRXBCSSxPQUFPQyxNQUFRLE1BQ2pCdkIsRUFBRSwrQkFBK0J3QixLQUFLLEtBRXRDeEIsRUFBRSw4QkFBOEJ3QixLQUFLLEtBRXRDeEIsRUFBRSxjQUFjaUMsU0FBVVAsVUFBVyxHQUFLLEtBRTFDMUIsRUFBRSxrQkFBa0JpQixRQUFRLEVBQUcsV0FDOUJqQixFQUFFLGFBQWE4QyxPQUFPLE9BS3hCOUMsRUFBRSxtQkFBbUJrQixNQUFNLFdBQ3ZCSSxPQUFPQyxNQUFRLE1BR2xCdkIsRUFBRXlDLEtBQU16QyxFQUFFLCtCQUErQjJCLEtBQUssSUFBS21DLEtBQUssU0FBVUMsR0FFakV6RCxFQURhTixFQUFFLDZCQUtmQSxFQUFFLDhCQUE4QjJCLEtBQUssS0FFdEMzQixFQUFFLGFBQWFpQixRQUFRLEVBQUcsV0FDekJqQixFQUFFLGtCQUFrQjhDLE9BQU8sT0FVN0I5QyxFQUFFLFlBQVlFLElBQUksVUFBVSxRQUU1QkYsRUFBRVUsUUFBUWUsT0FBTyxXQUNaekIsRUFBRVUsUUFBUWdCLFlBQWMsSUFDM0IxQixFQUFFLFlBQVk4QyxPQUFPLEtBR3JCOUMsRUFBRSxZQUFZaUIsUUFBUSxPQUl4QmpCLEVBQUUsWUFBWWtCLE1BQU0sV0FDbkJsQixFQUFFLGNBQWNpQyxTQUFVUCxVQUFXLEdBQUsiLCJmaWxlIjoiL2pzL3dlYi5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwge1xuIFx0XHRcdFx0Y29uZmlndXJhYmxlOiBmYWxzZSxcbiBcdFx0XHRcdGVudW1lcmFibGU6IHRydWUsXG4gXHRcdFx0XHRnZXQ6IGdldHRlclxuIFx0XHRcdH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIlwiO1xuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHdlYnBhY2svYm9vdHN0cmFwIDFiNWZjZWQ1ZGY0ZDI0NzExOTk0IiwiLypcclxufC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbnwgV0VCIEpTXHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4qL1xyXG5cclxubmV3IFdPVygpLmluaXQoKTtcclxuXHJcbi8qXHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG58IExvYWRlclxyXG58LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuKi9cclxuXHJcbiQod2luZG93KS5vbignbG9hZCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnI01haW5Mb2FkZXInKS5mYWRlT3V0KCdzbG93Jyk7XHJcblx0Ly8gJCgnYm9keScpLmNzcyh7J292ZXJmbG93JzondmlzaWJsZSd9KTtcclxufSlcclxuXHJcbi8qXHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG58IEdhbGxlcnkgYW5kIEJsb2cgRmlsdGVyc1xyXG58LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuKi9cclxuXHJcbmZ1bmN0aW9uIG9wZW5GaWx0ZXJzKCl7XHJcblx0JCgnLkZpdGVyLUNvbnRhaW5lcicpLnJlbW92ZUNsYXNzKCdIaWRkZW4nKTtcclxuXHQkKCdib2R5LCBodG1sJykuY3NzKCdvdmVyZmxvdycsICdoaWRkZW4nKTtcclxufSBcclxuXHJcbmZ1bmN0aW9uIGNsb3NlRmlsdGVycygpe1xyXG5cdCQoJy5GaXRlci1Db250YWluZXInKS5hZGRDbGFzcygnSGlkZGVuJyk7XHJcblx0JCgnYm9keSwgaHRtbCcpLmNzcygnb3ZlcmZsb3cnLCAnc2Nyb2xsJyk7XHJcbn1cclxuXHJcbiQoJy5TaG93LU1vYmlsZS1GaWx0ZXInKS5jbGljayhmdW5jdGlvbigpe1xyXG5cdGlmKCQoJy5GaXRlci1Db250YWluZXInKS5oYXNDbGFzcygnSGlkZGVuJykpe1xyXG5cdFx0b3BlbkZpbHRlcnMoKTtcclxuXHR9IGVsc2Uge1xyXG5cdFx0Y2xvc2VGaWx0ZXJzKCk7XHJcblx0fVxyXG59KTtcclxuXHJcbiQoJy5DbG9zZS1Nb2JpbGUtRmlsdGVycycpLmNsaWNrKGZ1bmN0aW9uKCl7XHJcblx0Y2xvc2VGaWx0ZXJzKCk7XHJcbn0pO1xyXG5cclxuXHJcbm5ldyBXT1coKS5pbml0KCk7XHJcblxyXG4vKlxyXG58LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxufCBDb250YWN0IFRhYiAoV2hhdHNBcHApXHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4qL1xyXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG5cdGlmIChzY3JlZW4ud2lkdGggPCA3NjUpe1xyXG5cdFx0JCgnLkNvbnRhY3QtVGFiJykuaGlkZSgyMDApO1xyXG5cdFx0JCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpe1xyXG5cdFx0XHRpZiAoJCh3aW5kb3cpLnNjcm9sbFRvcCgpID4gNTAwKXtcclxuXHRcdFx0XHQkKCcuQ29udGFjdC1UYWInKS5zaG93KDIwMCk7XHJcblx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0JCgnLkNvbnRhY3QtVGFiJykuaGlkZSgyMDApO1xyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHR9XHJcbn0pO1xyXG5cclxuLypcclxufC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbnwgSGFtYnVyZ3VlciBNZW51XHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4qL1xyXG5cclxuLy8gSGlkZSBNZW51XHJcbiQoJyNNYWluTWVudScpLmhpZGUoKTtcclxuXHJcbmZ1bmN0aW9uIG9wZW5NZW51KCl7XHJcblx0JCgnI01haW5NZW51Jykuc2xpZGVEb3duKDEwMCk7XHJcblx0JCgnaHRtbCcpLmNzcygnb3ZlcmZsb3cteScsJ2hpZGRlbicpO1xyXG59XHJcblxyXG5mdW5jdGlvbiBjbG9zZU1lbnUoKXtcclxuXHQkKCcjTWFpbk1lbnUnKS5zbGlkZVVwKDEwMCk7XHJcblx0JCgnaHRtbCcpLmNzcygnb3ZlcmZsb3cteScsJ3Njcm9sbCcpO1xyXG5cdCQoJy5NYWluTWVudUEnKS5yZW1vdmVDbGFzcygnd293IHNsaWRlSW5MZWZ0Jyk7XHJcbn1cclxuXHJcbiQoJyNDb250YWN0TmF2QnRuJykuY2xpY2soZnVuY3Rpb24oKXtcclxuXHRjbG9zZU1lbnUoKTtcclxufSk7XHJcblxyXG4kKCcuTWFpbk1lbnVCdG4nKS5jbGljayhmdW5jdGlvbigpe1xyXG5cdGlmKCEkKHRoaXMpLmhhc0NsYXNzKCdpcy1hY3RpdmUnKSl7XHJcblx0XHRvcGVuTWVudSgpO1xyXG5cdFx0JCh0aGlzKS5hZGRDbGFzcygnaXMtYWN0aXZlJyk7XHJcblx0fSBlbHNlIHtcclxuXHRcdGNsb3NlTWVudSgpO1xyXG5cclxuXHRcdCQoJy5PcGVuZWRJdGVtJykuZWFjaChmdW5jdGlvbihpLCBvYmopIHtcclxuXHRcdFx0dmFyIGhlaWdodCA9ICQodGhpcykuZGF0YSgnaGVpZ2h0Jyk7XHJcblx0XHRcdCQodGhpcykuYW5pbWF0ZSh7aGVpZ2h0OiBoZWlnaHR9KTsgXHJcblx0XHR9KTtcclxuXHJcblx0XHQkKHRoaXMpLnJlbW92ZUNsYXNzKCdpcy1hY3RpdmUnKTtcclxuXHR9XHJcbn0pO1xyXG5cclxuXHJcbiQoJyNEZXBvcnRpdm9zUmVjcmVhdGl2b3NCdG4nKS5jbGljayhmdW5jdGlvbigpe1xyXG5cdHZhciBhbmNob3IgPSAkKCcjRGVwb3J0aXZvc1JlY3JlYXRpdm9zJyk7XHJcblx0Z29Ub0FuY2hvcihhbmNob3IpO1xyXG59KTtcclxuXHJcblxyXG4vKlxyXG58LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxufCBIb21lIEJpZyBNZW51XHJcbnwtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4qL1xyXG5cclxuJCgnLkhvbWVJdGVtID4gLmlubmVyJykuZWFjaChmdW5jdGlvbigpeyBcclxuXHR2YXIgaW5uZXJIZWlnaHQgPSAkKHRoaXMpLmhlaWdodCgpO1xyXG5cdCQodGhpcykuZGF0YSgnaGVpZ2h0JywgaW5uZXJIZWlnaHQpO1xyXG59KTtcclxuXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcblx0XHQgICBcclxuXHQvLyBTaG93IE92ZXJsYXlcclxuXHQkKCcuSG9tZUl0ZW1CdG4nKS5jbGljayhmdW5jdGlvbigpe1xyXG5cdFx0Ly8gUmVzZXQgb3BlbiBvdmVybGF5XHJcblx0XHQkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCdPcGVuZWRJdGVtJyk7XHJcblx0XHR2YXIgb3BlbmVkSXRlbXMgPSAkKCcuaW5uZXIgLk9wZW5lZEl0ZW0nKTtcclxuXHJcblx0XHQkKCcuT3BlbmVkSXRlbScpLmVhY2goZnVuY3Rpb24oaSwgb2JqKSB7XHJcblx0XHRcdHZhciBoZWlnaHQgPSAkKHRoaXMpLmRhdGEoJ2hlaWdodCcpO1xyXG5cdFx0XHQkKHRoaXMpLmFuaW1hdGUoe2hlaWdodDogaGVpZ2h0fSk7IFxyXG5cdFx0fSk7XHJcblxyXG5cdFx0dmFyIHRoaXNPdmVybGF5ID0gJCh0aGlzKS5wYXJlbnQoKS5zaWJsaW5ncygnLk92ZXJsYXknKTtcclxuXHRcdHZhciB0aGlzT3ZlcmxheVRleHQgPSAkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCcuT3ZlcmxheScpLmNoaWxkcmVuKCcuT3ZlcmxheS1UZXh0Jyk7XHJcblx0XHQvLyBDbG9zaW5nIG90aGVyIG92ZXJsYXlzXHJcblx0XHQkKCcuT3ZlcmxheS1UZXh0JykuZmFkZU91dCgpO1xyXG5cdFx0JCgnLk92ZXJsYXktVGV4dCcpLmFkZENsYXNzKCdIaWRkZW4nKTtcclxuXHRcdCQud2hlbigkKCcuT3ZlcmxheS1Db2xvcicpLmFuaW1hdGUoe2xlZnQ6JzEwMCUnfSwgNDAwKSkuZG9uZShmdW5jdGlvbigpIHtcclxuXHRcdFx0JCgnLk92ZXJsYXknKS5ub3QodGhpc092ZXJsYXkpLmFkZENsYXNzKCdIaWRkZW4nKTtcclxuXHRcdH0pOyAgICAgICAgXHJcblx0XHRcclxuXHJcblx0XHQvLyBTaG93IE92ZXJsYXlcclxuXHRcdHZhciB0ZXh0ID0gJCh0aGlzKS5wYXJlbnQoKS5zaWJsaW5ncygnLk92ZXJsYXknKS5jaGlsZHJlbignLk92ZXJsYXktVGV4dCcpO1xyXG5cdFx0XHJcblx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCcuT3ZlcmxheScpLnJlbW92ZUNsYXNzKCdIaWRkZW4nKTtcclxuXHRcdCQodGhpcykucGFyZW50KCkuc2libGluZ3MoJy5PdmVybGF5JykuY2hpbGRyZW4oJy5PdmVybGF5LUNvbG9yJylcclxuXHRcdFx0LmFuaW1hdGUoe2xlZnQ6JzAnfSxcclxuXHRcdFx0NTAwLCBmdW5jdGlvbigpIHtcclxuXHRcdFx0XHR0ZXh0LnJlbW92ZUNsYXNzKCdIaWRkZW4nLCB7ZHVyYXRpb246IDE1MDB9KTtcclxuXHRcdFx0XHQkKCcuT3ZlcmxheS1UZXh0JykuZmFkZUluKCcxMDAnKVxyXG5cdFx0XHR9KTtcclxuXHJcblx0XHQvLyBUaGlzIC5PdmVybGF5LVRleHRcclxuXHRcdHZhciBvdmVybGF5SGVpZ2h0ID0gIHRoaXNPdmVybGF5VGV4dC5nZXRIZWlnaHRGcm9tSGlkZGVuKGZ1bmN0aW9uKCl7IHJldHVybiB0aGlzLmhlaWdodCgpfSk7XHJcblx0XHR2YXIgcGFyZW50SGVpZ2h0ID0gJCh0aGlzKS5wYXJlbnQoKS5oZWlnaHQoKTtcclxuXHRcdGlmKCQodGhpcykuZGF0YSgnYWN0aW9uJykgPT0gJ2F2b2lkJyl7XHJcblx0XHRcdHJldHVybjtcclxuXHRcdH0gXHJcblx0XHRpZihvdmVybGF5SGVpZ2h0ID4gcGFyZW50SGVpZ2h0KXtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5kYXRhKCdoZWlnaHQnLCBwYXJlbnRIZWlnaHQpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLmFuaW1hdGUoe2hlaWdodDogb3ZlcmxheUhlaWdodH0pOyBcclxuXHRcdH1cclxuXHR9KTtcclxuXHJcblxyXG5cdC8vIENsb3NlIE92ZXJsYXlzIHdpdGggWCBidXR0b25cclxuXHQkKCcuQ2xvc2VPdmVybGF5JykuY2xpY2soZnVuY3Rpb24oKXtcclxuXHJcblx0XHQkLndoZW4oJCgnLk92ZXJsYXktVGV4dCcpLmZhZGVPdXQoMTUwKSkuZG9uZShmdW5jdGlvbigpIHtcclxuXHRcdFx0JCgnLk92ZXJsYXktVGV4dCcpLmFkZENsYXNzKCdIaWRkZW4nKVxyXG5cdFx0fSk7XHJcblx0XHRcclxuXHRcdCQoJy5PdmVybGF5LUNvbG9yJykuYW5pbWF0ZSh7bGVmdDonMTAwJSd9LCA0NTAsIFxyXG5cdFx0ZnVuY3Rpb24oKXtcclxuXHRcdFx0JCgnLk92ZXJsYXknKS5hZGRDbGFzcygnSGlkZGVuJyk7XHJcblx0XHR9KTtcclxuXHJcblx0XHRsZXQgcGFyZW50ID0gJCh0aGlzKS5wYXJlbnQoKS5wYXJlbnQoKS5zaWJsaW5ncygnLmlubmVyJyk7XHJcblx0XHRpZigkKHRoaXMpLmRhdGEoJ2FjdGlvbicpID09ICdhdm9pZCcpe1xyXG5cdFx0XHRyZXR1cm47XHJcblx0XHR9IFxyXG5cclxuXHRcdGxldCBvcmlnaW5hbEhlaWdodCA9IHBhcmVudC5kYXRhKCdoZWlnaHQnKSB8fCAnJztcclxuXHRcdHBhcmVudC5hbmltYXRlKHtoZWlnaHQ6IG9yaWdpbmFsSGVpZ2h0fSk7ICAgICAgICAgICBcclxuXHR9KTtcclxufSk7XHJcblxyXG5cclxuLy8gT2J0YWluIHJlYWwgaGVpZ2h0IG9mIGEgaGlkZGVuIGVsZW1tZW50XHJcbiQuZm4uZ2V0SGVpZ2h0RnJvbUhpZGRlbiA9IGZ1bmN0aW9uKGZuKSB7XHJcblx0dmFyIGVsZW1lbnQgPSAkKHRoaXMpLmNsb25lKCksIHJlc3VsdDtcclxuXHQvLyBtYWtlIHRoZSBlbGVtZW50IHRha2Ugc3BhY2UgaW4gdGhlIHBhZ2UgYnV0IGludmlzaWJsZVxyXG5cdGVsZW1lbnQuY3NzKHt2aXNpYmlsaXR5OiAnaGlkZGVuJywgZGlzcGxheTogJ2Jsb2NrJ30pLmluc2VydEFmdGVyKHRoaXMpO1xyXG5cdC8vIHRvIG92ZXJyaWRlIGFueSBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQgeW91IG1heSBoYXZlIGJlZW4gdXNpbmdcclxuXHRlbGVtZW50LmF0dHIoJ3N0eWxlJywgZWxlbWVudC5hdHRyKCdzdHlsZScpLnJlcGxhY2UoJ2Jsb2NrJywgJ2Jsb2NrICFpbXBvcnRhbnQnKSk7XHJcblx0cmVzdWx0ID0gZm4uYXBwbHkoZWxlbWVudCk7XHJcblx0ZWxlbWVudC5yZW1vdmUoKTtcclxuXHRyZXR1cm4gcmVzdWx0O1xyXG59O1xyXG5cclxuLy8gU2hvdyBhbmQgSGlkZSBFbXByZXNhcyBTZWN0aW9uXHJcbiQoJyNFbXByZXNhcycpLmhpZGUoKTtcclxuJCgnLkJ0bkVtcHJlc2FzJykuY2xpY2soZnVuY3Rpb24oKXtcclxuXHRcclxuXHRpZihzY3JlZW4ud2lkdGggPiAnODAwJyl7XHJcblx0XHQkKCcuSG9tZS1EZXNrdG9wLCAuTWFpbk1lbnVCdG4nKS5oaWRlKDUwMCk7XHJcblx0fSBlbHNlIHtcclxuXHRcdCQoJy5Ib21lLU1vYmlsZSwgLk1haW5NZW51QnRuJykuaGlkZSg1MDApO1xyXG5cdH1cclxuXHQkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7IHNjcm9sbFRvcDogMCB9LCAnMCcpO1xyXG5cclxuXHQkKCcjTWFpbi1CaWctTWVudScpLmZhZGVPdXQoMCwgZnVuY3Rpb24gKCkge1xyXG5cdFx0JCgnI0VtcHJlc2FzJykuZmFkZUluKDApO1xyXG5cdH0pO1xyXG59KTtcclxuXHJcblxyXG4kKCcuQ2xvc2UtRW1wcmVzYXMnKS5jbGljayhmdW5jdGlvbigpe1xyXG5cdGlmKHNjcmVlbi53aWR0aCA+ICc4MDAnKXtcclxuXHRcdFxyXG5cdC8vIFNob3cgbWVudSBhbmQgZ28gdG8gYW5jaG9yXHJcblx0JC53aGVuKCAkKCcuSG9tZS1EZXNrdG9wLCAuTWFpbk1lbnVCdG4nKS5zaG93KDApICkudGhlbihmdW5jdGlvbiggeCApIHtcclxuXHRcdHZhciBhbmNob3IgPSAkKCcjUHJ1cHVlc3RhUGFyYUVtcHJlc2FzJyk7XHJcblx0XHRnb1RvQW5jaG9yKGFuY2hvcik7XHJcblx0fSk7XHJcblxyXG5cdH0gZWxzZSB7XHJcblx0XHQkKCcuSG9tZS1Nb2JpbGUsIC5NYWluTWVudUJ0bicpLnNob3coMjAwKTtcclxuXHR9XHJcblx0JCgnI0VtcHJlc2FzJykuZmFkZU91dCgwLCBmdW5jdGlvbiAoKSB7XHJcblx0XHQkKCcjTWFpbi1CaWctTWVudScpLmZhZGVJbigwKTtcclxuXHR9KTtcclxuXHJcbn0pO1xyXG5cclxuLy8gRm9yIFRlc3RcclxuLy8kKCcjRW1wcmVzYXMnKS5zaG93KCk7XHJcbi8vJCgnI01haW4tQmlnLU1lbnUnKS5oaWRlKCk7XHJcblxyXG4vLyBHbyBUbyBUb3AgQXJyb3dcclxuJCgnLmdvVG9Ub3AnKS5jc3MoJ2Rpc3BsYXknLCdub25lJyk7XHJcblxyXG4kKHdpbmRvdykuc2Nyb2xsKGZ1bmN0aW9uKCkge1xyXG5cdGlmICgkKHdpbmRvdykuc2Nyb2xsVG9wKCkgPiA4MDApIHtcclxuXHRcdCQoJy5nb1RvVG9wJykuZmFkZUluKDUwMCk7XHJcblx0fVxyXG5cdGVsc2Uge1xyXG5cdFx0JCgnLmdvVG9Ub3AnKS5mYWRlT3V0KDUwMCk7XHJcblx0fVxyXG59KTtcclxuXHJcbiQoJy5nb1RvVG9wJykuY2xpY2soZnVuY3Rpb24oKXtcclxuXHQkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7IHNjcm9sbFRvcDogMCB9LCAnZmFzdCcpO1xyXG59KTtcclxuXHJcblxyXG5mdW5jdGlvbiBnb1RvQW5jaG9yKGFuY2hvcikge1xyXG5cdGFuY2hvci5jc3MoJ2JhY2tncm91bmQnLCAncmVkJyk7XHJcblx0dmFyIG5ld19wb3NpdGlvbiA9IGFuY2hvci5vZmZzZXQoKTtcclxuXHR3aW5kb3cuc2Nyb2xsVG8obmV3X3Bvc2l0aW9uLmxlZnQsIG5ld19wb3NpdGlvbi50b3ApO1xyXG5cdHJldHVybiBmYWxzZTtcclxufVxyXG5cclxuXHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvanMvd2ViL3dlYi5qcyJdLCJzb3VyY2VSb290IjoiIn0=