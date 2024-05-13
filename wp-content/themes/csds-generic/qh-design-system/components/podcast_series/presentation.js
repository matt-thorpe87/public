{"1":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "    <article class=\"qld__podcast-series\" id=\""
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"id_field") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(2, data, 0, blockParams, depths),"inverse":container.program(4, data, 0, blockParams, depths),"data":data,"loc":{"start":{"line":2,"column":45},"end":{"line":2,"column":146}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(6, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":3,"column":8},"end":{"line":40,"column":15}}})) != null ? stack1 : "")
    + "        <section class=\"qld__body\">\n            <div class=\"container-fluid\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"abstract") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(12, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":43,"column":16},"end":{"line":47,"column":23}}})) != null ? stack1 : "")
    + "                "
    + ((stack1 = container.lambda(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"body") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"article_tags") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(14, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":49,"column":16},"end":{"line":61,"column":23}}})) != null ? stack1 : "")
    + "            </div>\n        </section>\n        <section class=\"qld__body qld__body--alt\">\n            <div class=\"container-fluid\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">",0,{"name":"ifCond","hash":{},"fn":container.program(17, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":66,"column":16},"end":{"line":161,"column":27}}})) != null ? stack1 : "")
    + "            </div>\n        </section>\n    </article>\n";
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

  return "podcast-series-"
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":2,"column":128},"end":{"line":2,"column":139}}}) : helper)));
},"6":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <section class=\"qld__body qld__body--alt-dark\">\n            <div class=\"container-fluid\">\n                <div class=\"qld__video qld__video--no-padding qld__video--video-layout-one_col\">\n                    <div class=\"qld__video__vid-wrapper no-margin\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"!==","",{"name":"ifCond","hash":{},"fn":container.program(7, data, 0),"inverse":container.program(10, data, 0),"data":data,"loc":{"start":{"line":8,"column":24},"end":{"line":31,"column":35}}})) != null ? stack1 : "")
    + "                        <div class=\"qld__video_vid hidden\"\n                        data-source=\"https://www.youtube.com/embed/"
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":33,"column":76},"end":{"line":33,"column":117}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":33,"column":67},"end":{"line":33,"column":124}}}))
    + "\" data-video-id=\""
    + alias3((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":33,"column":150},"end":{"line":33,"column":191}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":33,"column":141},"end":{"line":33,"column":198}}}))
    + "\" data-type=\"youtube\">\n                            <div id=\"video-"
    + alias3(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":34,"column":43},"end":{"line":34,"column":54}}}) : helper)))
    + "\" class=\"qld__video_player\"></div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </section>\n";
},"7":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video__thumbnail\" style=\"background-image:url(./?a="
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"thumbnail_image") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + ");\">\n                                <a href=\"#\" class=\"qld__video__thumbnail-playbtn\" title=\"play video\">\n                                    <div class=\"qld__video__thumbnail-playbtn-tag\">\n                                        <i class=\"fal fa-play-circle \"></i> <span>Watch</span> \n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_length") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(8, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":13,"column":40},"end":{"line":15,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </a>\n                            </div>\n";
},"8":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <i class=\"fal fa-clock\"></i> "
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_length") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\n";
},"10":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <div class=\"qld__video__thumbnail\"\n                                style=\"background-image:url(https://img.youtube.com/vi/"
    + container.escapeExpression((lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,(lookupProperty(helpers,"split")||(depth0 && lookupProperty(depth0,"split"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_url") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"=",{"name":"split","hash":{},"data":data,"loc":{"start":{"line":21,"column":96},"end":{"line":21,"column":137}}}),"1",{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":21,"column":87},"end":{"line":21,"column":144}}}))
    + "/0.jpg);\">\n                                <a href=\"#\" class=\"qld__video__thumbnail-playbtn\">\n                                    <div class=\"qld__video__thumbnail-playbtn-tag\">\n                                        <i class=\"fal fa-play-circle \"></i> <span>Watch</span> \n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"video_length") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(8, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":25,"column":40},"end":{"line":27,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </a>\n                            </div>\n";
},"12":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__abstract\">\n                    "
    + ((stack1 = container.lambda(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"abstract") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n                </div>\n";
},"14":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <hr>\n                    <div class=\"qld__news_article__footer__tags\">\n                        <h2 class=\"qld__display-sm\">This page is tagged in the following topics</h2>\n                        <ul class=\"qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"article_tags") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"getTags","hash":{},"fn":container.program(15, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":54,"column":28},"end":{"line":58,"column":40}}})) != null ? stack1 : "")
    + "                        </ul> \n                    </div>\n";
},"15":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <li>\n                                <a class=\"qld__tag qld__tag--link qld__tag--large\" href=\""
    + alias1(container.lambda(((stack1 = ((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"site"))) && lookupProperty(stack1,"metadata"))) && lookupProperty(stack1,"podcastIndexUrl"))) && lookupProperty(stack1,"value")), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":56,"column":139},"end":{"line":56,"column":146}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":56,"column":148},"end":{"line":56,"column":157}}}) : helper)))
    + "</a>\n                            </li>\n";
},"17":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <div class=\"row\">\n                        <div class=\"qld__card-intro col-xs-12 qld__card-intro--sm\">\n                            <h2>Episodes</h2>\n                        </div>\n                    </div>\n                    <div class=\"row\">\n                        <ul class=\"qld__card-list qld__card-list--matchheight\" data-type=\"four\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1),{"name":"each","hash":{},"fn":container.program(18, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":74,"column":28},"end":{"line":118,"column":37}}})) != null ? stack1 : "")
    + "                        </ul>\n                    </div>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"pagination") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(30, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":121,"column":20},"end":{"line":160,"column":31}}})) != null ? stack1 : "");
},"18":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <li class=\"col-xs-12 col-md-3\">\n                                    <div class=\"qld__card qld__card__multi-action "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(19, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":76,"column":82},"end":{"line":76,"column":127}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(21, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":77,"column":40},"end":{"line":93,"column":47}}})) != null ? stack1 : "")
    + "                                        <div class=\"qld__card__inner\">\n                                            <div class=\"qld__card__content\">\n                                                <div class=\"qld__card__content-inner\">\n                                                    "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(24, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":97,"column":52},"end":{"line":97,"column":145}}})) != null ? stack1 : "")
    + "\n                                                    <h3 class=\"qld__card__title\"><a class=\"qld__card--clickable__link\" href=\""
    + alias2(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":98,"column":152},"end":{"line":98,"column":161}}}) : helper)))
    + "</a></h3>\n                                                </div>\n                                            </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(27, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":101,"column":44},"end":{"line":114,"column":51}}})) != null ? stack1 : "")
    + "                                        </div>\n                                    </div>\n                                </li>\n";
},"19":function(container,depth0,helpers,partials,data) {
    return "qld__card--image";
},"21":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <a href=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\" class=\"qld__card__image-link\">\n                                            <div class=\"qld__responsive-media-img--bg\" style=\"background-image: url('"
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + "')\" alt=\"Image for "
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias3,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":79,"column":154},"end":{"line":79,"column":163}}}) : helper)))
    + "\"></div>\n                                            <div class=\"qld__card__image-tag\">\n                                                <div class=\"qld__card__image-tag--title\">\n                                                    <i class=\"qld__card__image-tag--icon fa-light fa-podcast\"></i>\n                                                    <span class=\"qld__card__image-tag__text--bold\">Listen</span>\n                                                </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias3,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1),{"name":"if","hash":{},"fn":container.program(22, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":85,"column":48},"end":{"line":90,"column":55}}})) != null ? stack1 : "")
    + "                                            </div>\n                                        </a>\n";
},"22":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <div class=\"qld__card__image-tag--length\">\n                                                    <i class=\"qld__card__image-tag--icon far fa-clock\"></i>\n                                                    <span class=\"qld__card__image-tag__text--small\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1), depth0))
    + "</span>\n                                                </div>\n";
},"24":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<p class=\"qld__card__date\">"
    + ((stack1 = (lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"date") : depth0),"d.m.Y",{"name":"formatDate","hash":{},"fn":container.program(25, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":97,"column":91},"end":{"line":97,"column":134}}})) != null ? stack1 : "")
    + "</p>";
},"25":function(container,depth0,helpers,partials,data) {
    return "";
},"27":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <div class=\"qld__card__footer\">\n                                                <hr class=\"qld__horizontal-rule\">\n                                                <div class=\"qld__card__footer-inner\">\n                                                    <ul class=\"qld__card__tags qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"getTags","hash":{},"fn":container.program(28, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":106,"column":52},"end":{"line":110,"column":64}}})) != null ? stack1 : "")
    + "                                                    </ul>\n                                                </div>\n                                            </div>\n";
},"28":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                        <li>\n                                                            <a class=\"qld__tag qld__tag--link\" href=\"./?a="
    + alias1(container.lambda(((stack1 = ((stack1 = (depths[3] != null ? lookupProperty(depths[3],"current") : depths[3])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"assetid") : stack1), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":108,"column":144},"end":{"line":108,"column":151}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":108,"column":153},"end":{"line":108,"column":162}}}) : helper)))
    + "</a>\n                                                        </li>\n";
},"30":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <nav class=\"text-center hidden-print qld__search-pagination qld__search-pagination--outline\" aria-label=\"pagination\">\n                            <h2 class=\"sr-only\">Pagination</h2>\n                            <ul class=\"qld__search-pagination__list\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"pagination") : depth0),{"name":"each","hash":{},"fn":container.program(31, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":125,"column":32},"end":{"line":157,"column":41}}})) != null ? stack1 : "")
    + "                            </ul>\n                        </nav>\n";
},"31":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","last",{"name":"ifCond","hash":{},"fn":container.program(32, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":126,"column":36},"end":{"line":132,"column":47}}})) != null ? stack1 : "")
    + "                                    <li class=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"linkType") || (depth0 != null ? lookupProperty(depth0,"linkType") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"linkType","hash":{},"data":data,"loc":{"start":{"line":133,"column":47},"end":{"line":133,"column":59}}}) : helper)))
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"isCurrent") : depth0),{"name":"if","hash":{},"fn":container.program(34, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":133,"column":59},"end":{"line":133,"column":90}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","prev",{"name":"ifCond","hash":{},"fn":container.program(36, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":134,"column":40},"end":{"line":138,"column":51}}})) != null ? stack1 : "")
    + "                                        \n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"label") : depth0),{"name":"if","hash":{},"fn":container.program(38, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":140,"column":40},"end":{"line":142,"column":47}}})) != null ? stack1 : "")
    + "\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","next",{"name":"ifCond","hash":{},"fn":container.program(40, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":144,"column":40},"end":{"line":148,"column":51}}})) != null ? stack1 : "")
    + "                                    </li>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","first",{"name":"ifCond","hash":{},"fn":container.program(32, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":150,"column":36},"end":{"line":156,"column":47}}})) != null ? stack1 : "");
},"32":function(container,depth0,helpers,partials,data) {
    return "                                        <li class=\"ellipsis\">\n                                            <span>\n                                                <i class=\"fa fa-ellipsis-h\"></i>\n                                            </span>\n                                        </li>\n";
},"34":function(container,depth0,helpers,partials,data) {
    return " active";
},"36":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <a class=\"qld__search-pagination_link\" href=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"url","hash":{},"data":data,"loc":{"start":{"line":135,"column":89},"end":{"line":135,"column":96}}}) : helper)))
    + "\" rel=\"prev\" aria-label=\"Previous page of results\">\n                                                <i class=\"far fa-arrow-left\"></i>\n                                            </a>\n";
},"38":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <a class=\"qld__search-pagination_link\" href=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"url","hash":{},"data":data,"loc":{"start":{"line":141,"column":89},"end":{"line":141,"column":96}}}) : helper)))
    + "\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"label") || (depth0 != null ? lookupProperty(depth0,"label") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"label","hash":{},"data":data,"loc":{"start":{"line":141,"column":98},"end":{"line":141,"column":107}}}) : helper)))
    + "</a></li>\n";
},"40":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <a class=\"qld__search-pagination_link\" href=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"url","hash":{},"data":data,"loc":{"start":{"line":145,"column":89},"end":{"line":145,"column":96}}}) : helper)))
    + "\" rel=\"next\" aria-label=\"Next page of results\">\n                                                <i class=\"far fa-arrow-right\"></i>\n                                            </a>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"component") : depth0),{"name":"with","hash":{},"fn":container.program(1, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":165,"column":9}}})) != null ? stack1 : "");
},"useData":true,"useDepths":true}