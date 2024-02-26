{"1":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<div class=\"qld__video_player\" id=\""
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"id_field") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(2, data, 0),"inverse":container.program(4, data, 0),"data":data,"loc":{"start":{"line":2,"column":35},"end":{"line":2,"column":134}}})) != null ? stack1 : "")
    + "\">\n    <div class=\"container-fluid\">\n        <div class=\"row\">\n            <div class=\"qld__video_player__width "
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_width") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\">\n                <div class=\"qld__video_player__wrapper \n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"caption") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","",{"name":"ifCond","hash":{},"fn":container.program(6, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":7,"column":20},"end":{"line":14,"column":31}}})) != null ? stack1 : "")
    + "                    \">\n                    <div class=\"qld__video_player__video "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","www.youtube.com",{"name":"ifCond","hash":{},"fn":container.program(12, data, 0),"inverse":container.program(14, data, 0),"data":data,"loc":{"start":{"line":16,"column":57},"end":{"line":16,"column":219}}})) != null ? stack1 : "")
    + " qld__responsive-media-vid qld__responsive-media-vid--16x9\">\n                        <!-- if the thumb has been set -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"!==","",{"name":"ifCond","hash":{},"fn":container.program(16, data, 0),"inverse":container.program(19, data, 0),"data":data,"loc":{"start":{"line":18,"column":24},"end":{"line":47,"column":35}}})) != null ? stack1 : "")
    + "                        <!-- Vimeo -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","vimeo",{"name":"ifCond","hash":{},"fn":container.program(27, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":49,"column":24},"end":{"line":58,"column":35}}})) != null ? stack1 : "")
    + "                        <!-- Youtube -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","www.youtube.com",{"name":"ifCond","hash":{},"fn":container.program(30, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":60,"column":24},"end":{"line":66,"column":35}}})) != null ? stack1 : "")
    + "                    </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"caption") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(32, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":68,"column":20},"end":{"line":70,"column":27}}})) != null ? stack1 : "")
    + "\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_option") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","link",{"name":"ifCond","hash":{},"fn":container.program(34, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":72,"column":20},"end":{"line":80,"column":31}}})) != null ? stack1 : "")
    + "\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_option") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","accordion",{"name":"ifCond","hash":{},"fn":container.program(37, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":82,"column":20},"end":{"line":97,"column":31}}})) != null ? stack1 : "")
    + "                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
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

  return "video_player-"
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":2,"column":116},"end":{"line":2,"column":127}}}) : helper)));
},"6":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_option") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","link",{"name":"ifCond","hash":{},"fn":container.program(7, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":8,"column":24},"end":{"line":10,"column":35}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_option") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","accordion",{"name":"ifCond","hash":{},"fn":container.program(10, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":11,"column":24},"end":{"line":13,"column":35}}})) != null ? stack1 : "");
},"7":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_link") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","",{"name":"ifCond","hash":{},"fn":container.program(8, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":9,"column":28},"end":{"line":9,"column":98}}})) != null ? stack1 : "")
    + "\n";
},"8":function(container,depth0,helpers,partials,data) {
    return "no-border";
},"10":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","",{"name":"ifCond","hash":{},"fn":container.program(8, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":12,"column":28},"end":{"line":12,"column":93}}})) != null ? stack1 : "")
    + "\n";
},"12":function(container,depth0,helpers,partials,data) {
    return "not-ready";
},"14":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"!==","",{"name":"ifCond","hash":{},"fn":container.program(12, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":139},"end":{"line":16,"column":208}}})) != null ? stack1 : "");
},"16":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <a href=\"#\" class=\"qld__video_player__thumbnail "
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_colour") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\" style=\"background-image:url(./?a="
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + ");\" title=\"Play video\">\n                                <div class=\"qld__video_player__tag \">\n                                    <div class=\"qld__video_player__tag-watch\">\n                                        <i class=\"fal fa-play-circle \"></i> <span>Watch</span>\n                                    </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_runtime") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(17, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":24,"column":36},"end":{"line":28,"column":43}}})) != null ? stack1 : "")
    + "                                </div>\n                            </a>\n";
},"17":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <div class=\"qld__video_player__tag-runtime\">\n                                        <i class=\"fal fa-clock\"></i> "
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_runtime") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\n                                    </div>\n";
},"19":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <!-- else no thumb set and is youtube get the thumb from youtube -->\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","www.youtube.com",{"name":"ifCond","hash":{},"fn":container.program(20, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":33,"column":28},"end":{"line":46,"column":39}}})) != null ? stack1 : "");
},"20":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <a href=\"#\" class=\"qld__video_player__thumbnail "
    + alias1(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_colour") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\" style=\"background-image:url(https://img.youtube.com/vi/"
    + alias1((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias3).call(alias2,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias3).call(alias2,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":34,"column":179},"end":{"line":34,"column":215}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":34,"column":170},"end":{"line":34,"column":222}}}))
    + "/"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias3).call(alias2,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_width") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","col-xs-12",{"name":"ifCond","hash":{},"fn":container.program(21, data, 0),"inverse":container.program(23, data, 0),"data":data,"loc":{"start":{"line":34,"column":223},"end":{"line":34,"column":319}}})) != null ? stack1 : "")
    + ".jpg);\" title=\"Play video\">\n                                    <div class=\"qld__video_player__tag\">\n                                        <div class=\"qld__video_player__tag-watch\">\n                                            <i class=\"fal fa-play-circle \"></i> <span>Watch</span> \n                                        </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias2,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_runtime") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(25, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":39,"column":40},"end":{"line":43,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </a>\n";
},"21":function(container,depth0,helpers,partials,data) {
    return "maxresdefault";
},"23":function(container,depth0,helpers,partials,data) {
    return "sddefault";
},"25":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <div class=\"qld__video_player__tag-runtime\">\n                                            <i class=\"fal fa-clock\"></i> "
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_runtime") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\n                                        </div>\n";
},"27":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video_player__iframe qld__responsive-media-vid qld__responsive-media-vid--16x9\"\n                                data-source=\"https://player.vimeo.com/video/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"/",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":51,"column":85},"end":{"line":51,"column":121}}}),"3",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":51,"column":76},"end":{"line":51,"column":128}}}))
    + "\" data-type=\"vimeo\">\n                                <!-- Vimeo -->\n                                <iframe src=\""
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"overlay_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"===","",{"name":"ifCond","hash":{},"fn":container.program(28, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":53,"column":45},"end":{"line":54,"column":134}}})) != null ? stack1 : "")
    + "\"\n                                    width=\"100%\" height=\"100%\" frameborder=\"0\" title=\"Vimeo video\" allow=\"autoplay; fullscreen; picture-in-picture\"\n                                    allowfullscreen></iframe>\n                            </div>\n";
},"28":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return " \n                                        https://player.vimeo.com/video/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"/",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":54,"column":80},"end":{"line":54,"column":116}}}),"3",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":54,"column":71},"end":{"line":54,"column":123}}}));
},"30":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video_player__iframe qld__responsive-media-vid qld__responsive-media-vid--16x9\"\n                                data-source=\"https://www.youtube.com/embed/"
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":62,"column":84},"end":{"line":62,"column":120}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":62,"column":75},"end":{"line":62,"column":127}}}))
    + "\" data-video-id=\""
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":62,"column":153},"end":{"line":62,"column":189}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":62,"column":144},"end":{"line":62,"column":196}}}))
    + "\" data-type=\"youtube\">\n\n                                <div id=\"video-"
    + alias3(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":64,"column":47},"end":{"line":64,"column":58}}}) : helper)))
    + "\" class=\"qld__video_player__player\"></div>\n                            </div>\n";
},"32":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <div class=\"qld__video_player__caption\">"
    + ((stack1 = container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"caption") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "</div>\n";
},"34":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_link") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(35, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":73,"column":24},"end":{"line":79,"column":31}}})) != null ? stack1 : "");
},"35":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video_player__transcript\">\n                                <div class=\"qld__video_player__transcript-link\">\n                                    <i class=\"fal fa-arrow-right-long\"></i><a href=\"%globals_asset_assetid:"
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript_link") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "^as_asset:asset_url%\">View transcript</a>\n                                </div>\n                            </div>\n";
},"37":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(38, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":83,"column":24},"end":{"line":96,"column":31}}})) != null ? stack1 : "");
},"38":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video_player__transcript\">\n                                <section class=\"qld__accordion\">\n                                    <button class=\"qld__accordion__title js-qld__accordion qld__accordion--closed\" aria-controls=\"accordion-group-"
    + alias4(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":86,"column":146},"end":{"line":86,"column":157}}}) : helper)))
    + "\" aria-expanded=\"false\">\n                                        <i class=\"fal fa-file-lines\"></i>Show transcript\n                                    </button>\n                                    <div class=\"qld__accordion__body qld__accordion--closed\" id=\"accordion-group-"
    + alias4(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":89,"column":113},"end":{"line":89,"column":124}}}) : helper)))
    + "\" style=\"\">\n                                        <div class=\"qld__accordion__body-wrapper\">\n                                            "
    + ((stack1 = container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"transcript") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n                                        </div>\n                                    </div>\n                                </section>\n                            </div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"component") : depth0)) != null ? lookupProperty(stack1,"data") : stack1),{"name":"with","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":103,"column":9}}})) != null ? stack1 : "");
},"useData":true}