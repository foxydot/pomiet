function strripos(e,t,n){e=(e+"").toLowerCase();t=(t+"").toLowerCase();var r=-1;if(n){r=(e+"").slice(n).lastIndexOf(t);r!==-1&&(r+=n)}else r=(e+"").lastIndexOf(t);return r>=0?r:!1}jQuery(document).ready(function(e){e("ul li:first-child").addClass("first-child");e("ul li:last-child").addClass("last-child");e("ul li:nth-child(even)").addClass("even");e("ul li:nth-child(odd)").addClass("odd");e("table tr:first-child").addClass("first-child");e("table tr:last-child").addClass("last-child");e("table tr:nth-child(even)").addClass("even");e("table tr:nth-child(odd)").addClass("odd");e("tr td:first-child").addClass("first-child");e("tr td:last-child").addClass("last-child");e("tr td:nth-child(even)").addClass("even");e("tr td:nth-child(odd)").addClass("odd");e("div:first-child").addClass("first-child");e("div:last-child").addClass("last-child");e("div:nth-child(even)").addClass("even");e("div:nth-child(odd)").addClass("odd");e("section:first-child").addClass("first-child");e("section:last-child").addClass("last-child");e("section:nth-child(even)").addClass("even");e("section:nth-child(odd)").addClass("odd");var t=e("#footer-widgets div.widget").length;e("#footer-widgets").addClass("cols-"+t);e(".entry-content ul").not(".entry-content .gform_wrapper ul").addClass("fa-ul").find("li").prepend('<i class="fa-li fa fa-caret-right"></i>');e(".sidebar .widget_advanced_menu .menu li li a").prepend('<i class="fa fa-caret-right"></i>');var n=Array("raptorinc.org","www.raptorinc.org","raptor.msdlab2.com","127.0.0.1");e("a").attr("target",function(){var t=e(this).attr("href"),r=e(this).attr("target");if(t=="#"||strripos(t,"http",0)===!1)return"_self";var i=0;while(n[i]){if(strripos(t,n[i],0))return r;i++}return"_blank"})});