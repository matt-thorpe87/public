{"1":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), alias4=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<section class=\"qld__body\">\n    <div class=\"container-fluid\">\n        <div\n            class=\"qld__video qld__video--video-layout-"
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"layout_video") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + " qld__video--column-layout-"
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"layout_column") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + " qld__video--text-layout-"
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"layout_text") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\" id=\""
    + ((stack1 = lookupProperty(helpers,"if").call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"id_field") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(2, data, 0),"inverse":container.program(4, data, 0),"data":data,"loc":{"start":{"line":5,"column":206},"end":{"line":5,"column":298}}})) != null ? stack1 : "")
    + "\">\n\n            <div class=\"qld__video__vid-wrapper\">\n\n                <!-- if the thumb has been set -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"!==","",{"name":"ifCond","hash":{},"fn":container.program(6, data, 0),"inverse":container.program(8, data, 0),"data":data,"loc":{"start":{"line":10,"column":16},"end":{"line":34,"column":27}}})) != null ? stack1 : "")
    + "\n                <!-- Vimeo -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","vimeo",{"name":"ifCond","hash":{},"fn":container.program(11, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":37,"column":16},"end":{"line":49,"column":27}}})) != null ? stack1 : "")
    + "\n                <!-- Youtube -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","www.youtube.com",{"name":"ifCond","hash":{},"fn":container.program(16, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":52,"column":16},"end":{"line":60,"column":27}}})) != null ? stack1 : "")
    + "\n\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"caption") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(18, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":63,"column":16},"end":{"line":65,"column":23}}})) != null ? stack1 : "")
    + "            </div>\n\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"layout_video") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"===","two_col",{"name":"ifCond","hash":{},"fn":container.program(20, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":68,"column":12},"end":{"line":70,"column":27}}})) != null ? stack1 : "")
    + "\n                <h2 class=\"qld__video__header\">\n                    "
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"heading") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\n                </h2>\n                <div class=\"qld__video__body\">\n                    "
    + ((stack1 = alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"body") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n                </div>\n\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"layout_video") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"===","two_col",{"name":"ifCond","hash":{},"fn":container.program(22, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":79,"column":12},"end":{"line":81,"column":23}}})) != null ? stack1 : "")
    + "        </div>\n    </div>\n</section>\n";
},"2":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"id_field") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "");
},"4":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "video-"
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":5,"column":280},"end":{"line":5,"column":291}}}) : helper)));
},"6":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <div class=\"qld__video__thumbnail\" style=\"background-image:url(./?a="
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + ");\">\n                        <a href=\"#\" class=\"qld__video__thumbnail-playbtn\" title=\"play video\">\n                            <div class=\"qld__video__thumbnail-playbtn-bg\">\n                                <i class=\"fal fa-play-circle \"></i>\n                            </div>\n                        </a>\n                    </div>\n\n";
},"8":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <!-- else no thumb set and is youtube get the thumb from youtube -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","www.youtube.com",{"name":"ifCond","hash":{},"fn":container.program(9, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":21,"column":24},"end":{"line":32,"column":31}}})) != null ? stack1 : "")
    + "\n";
},"9":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n                        <div class=\"qld__video__thumbnail\"\n                            style=\"background-image:url(https://img.youtube.com/vi/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":24,"column":92},"end":{"line":24,"column":128}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":24,"column":83},"end":{"line":24,"column":135}}}))
    + "/0.jpg);\">\n                            <a href=\"#\" class=\"qld__video__thumbnail-playbtn\">\n                                <div class=\"qld__video__thumbnail-playbtn-bg\">\n                                    <i class=\"fal fa-play-circle \"></i>\n                                </div>\n                            </a>\n                        </div>\n\n";
},"11":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <div class=\"qld__video_vid "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"!==","",{"name":"ifCond","hash":{},"fn":container.program(12, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":38,"column":47},"end":{"line":38,"column":115}}})) != null ? stack1 : "")
    + "\"\n                        data-source=\"https://player.vimeo.com/video/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"/",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":39,"column":77},"end":{"line":39,"column":113}}}),"3",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":39,"column":68},"end":{"line":39,"column":120}}}))
    + "\" data-type=\"vimeo\">\n                        <!-- Vimeo \n                                https://vimeo.com/203800324\n                            https://player.vimeo.com/video/76979871-->\n                        <!-- if no thumb has been set, set the src -->\n                        <iframe src=\""
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"===","",{"name":"ifCond","hash":{},"fn":container.program(14, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":44,"column":37},"end":{"line":45,"column":126}}})) != null ? stack1 : "")
    + "\"\n                            width=\"100%\" height=\"100%\" frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\"\n                            allowfullscreen></iframe>\n                    </div>\n";
},"12":function(container,depth0,helpers,partials,data) {
    return "hidden";
},"14":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return " \n                                https://player.vimeo.com/video/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"/",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":45,"column":72},"end":{"line":45,"column":108}}}),"3",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":45,"column":63},"end":{"line":45,"column":115}}}));
},"16":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <!-- Youtube https://www.youtube.com/embed/0O2aH4XLbto -->\n\n                    <div class=\"qld__video_vid hidden\"\n                        data-source=\"https://www.youtube.com/embed/"
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":56,"column":76},"end":{"line":56,"column":112}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":56,"column":67},"end":{"line":56,"column":119}}}))
    + "\" data-video-id=\""
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":56,"column":145},"end":{"line":56,"column":181}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":56,"column":136},"end":{"line":56,"column":188}}}))
    + "\" data-type=\"youtube\">\n\n                        <div id=\"video-"
    + alias3(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":58,"column":39},"end":{"line":58,"column":50}}}) : helper)))
    + "\" class=\"qld__video_player\"></div>\n                    </div>\n";
},"18":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <div class=\"qld__video__caption\">"
    + ((stack1 = container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"caption") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "</div>\n";
},"20":function(container,depth0,helpers,partials,data) {
    return "            <div class=\"qld__video__text_wrapper\">\n";
},"22":function(container,depth0,helpers,partials,data) {
    return "            </div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"component") : depth0)) != null ? lookupProperty(stack1,"data") : stack1),{"name":"with","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":85,"column":9}}})) != null ? stack1 : "");
},"useData":true}