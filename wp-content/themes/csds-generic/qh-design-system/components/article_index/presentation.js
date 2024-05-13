{"1":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <div>\n            <div class=\"row\">\n                <div class=\"qld__card-intro col-xs-12 qld__card-intro--sm\">\n                    <h1 class=\"capitalised\" data-action=\"tag-paramater\">"
    + container.escapeExpression((lookupProperty(helpers,"capitaliseFirst")||(depth0 && lookupProperty(depth0,"capitaliseFirst"))||container.hooks.helperMissing).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"current") : depth0)) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"name") : stack1),{"name":"capitaliseFirst","hash":{},"data":data,"loc":{"start":{"line":7,"column":72},"end":{"line":7,"column":109}}}))
    + "</h1>\n                </div>\n            </div>\n"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,(depth0 != null ? lookupProperty(depth0,"component") : depth0),{"name":"with","hash":{},"fn":container.program(2, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":10,"column":12},"end":{"line":142,"column":21}}})) != null ? stack1 : "")
    + "        </div>\n";
},"2":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "            <div class=\"row\">\n                <ul class=\"qld__card-list qld__card-list--matchheight\" data-action=\"slick-slider\" data-type=\"mobile-only\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"additional_results") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),"==",1,{"name":"ifCond","hash":{},"fn":container.program(3, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":13,"column":20},"end":{"line":74,"column":31}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"additional_results") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(21, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":75,"column":20},"end":{"line":136,"column":31}}})) != null ? stack1 : "")
    + "                </ul>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(24, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":138,"column":16},"end":{"line":140,"column":27}}})) != null ? stack1 : "")
    + "            </div>\n";
},"3":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"additional_results") : depth0),{"name":"each","hash":{},"fn":container.program(4, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":14,"column":24},"end":{"line":73,"column":33}}})) != null ? stack1 : "");
},"4":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <li class=\"col-xs-12\">\n                                <div class=\"qld__card qld__card__multi-action qld__card__multi-action--feature  "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(5, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":112},"end":{"line":16,"column":157}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(7, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":17,"column":36},"end":{"line":43,"column":43}}})) != null ? stack1 : "")
    + "                                    <div class=\"qld__card__inner\">\n                                        <div class=\"qld__card__content\">\n                                            <div class=\"qld__card__content-inner\">\n                                                "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":47,"column":48},"end":{"line":47,"column":141}}})) != null ? stack1 : "")
    + "\n                                                <h3 class=\"qld__card__title\">\n                                                <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card--clickable__link\" href=\""
    + alias2(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":49,"column":168},"end":{"line":49,"column":177}}}) : helper)))
    + "</a>   \n                                                </h3>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1),{"name":"if","hash":{},"fn":container.program(16, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":51,"column":48},"end":{"line":53,"column":55}}})) != null ? stack1 : "")
    + "                                            </div>\n                                        </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(18, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":56,"column":40},"end":{"line":69,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </div>\n                            </li>  \n";
},"5":function(container,depth0,helpers,partials,data) {
    return "qld__card--image";
},"7":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), alias4=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card__image-link\" href=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">\n                                            <div class=\"qld__responsive-media-img--bg\" style=\"background-image: url('"
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + "')\" alt=\"Image for "
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias4),(typeof helper === "function" ? helper.call(alias3,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":19,"column":154},"end":{"line":19,"column":163}}}) : helper)))
    + "\"></div>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"articleType") : stack1),"==","podcast",{"name":"ifCond","hash":{},"fn":container.program(8, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":20,"column":44},"end":{"line":33,"column":55}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"articleType") : stack1),"==","podcast-series",{"name":"ifCond","hash":{},"fn":container.program(11, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":34,"column":44},"end":{"line":41,"column":55}}})) != null ? stack1 : "")
    + "                                        </a>\n";
},"8":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <div class=\"qld__card__image-tag\">\n                                                <div class=\"qld__card__image-tag--title\">\n                                                    <i class=\"fa-light fa-podcast\"></i>\n                                                    <span class=\"qld__card__image-tag__text--bold\">Listen</span>\n                                                </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1),{"name":"if","hash":{},"fn":container.program(9, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":26,"column":48},"end":{"line":31,"column":55}}})) != null ? stack1 : "")
    + "                                            </div>\n";
},"9":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <div class=\"qld__card__image-tag--length\">\n                                                    <i class=\"far fa-clock\"></i>\n                                                    <span class=\"qld__card__image-tag__text--small\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1), depth0))
    + "</span>\n                                                </div>\n";
},"11":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <div class=\"qld__card__image-tag\">\n                                                <div class=\"qld__card__image-tag--title\">\n                                                    <i class=\"fa-regular fa-layer-group\"></i>\n                                                    <span class=\"qld__card__image-tag__text--bold\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"series") : stack1), depth0))
    + " Episodes</span>\n                                                </div>\n                                            </div>\n";
},"13":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<p class=\"qld__card__date\">"
    + ((stack1 = (lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"date") : depth0),"d.m.Y",{"name":"formatDate","hash":{},"fn":container.program(14, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":47,"column":87},"end":{"line":47,"column":130}}})) != null ? stack1 : "")
    + "</p>";
},"14":function(container,depth0,helpers,partials,data) {
    return "";
},"16":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <p id=\"card-22724\" class=\"qld__card__description\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1), depth0))
    + "</p>\n";
},"18":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <div class=\"qld__card__footer\">\n                                            <hr class=\"qld__horizontal-rule\">\n                                            <div class=\"qld__card__footer-inner\">\n                                                <ul class=\"qld__card__tags qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"component"))) && lookupProperty(stack1,"tags")),{"name":"getTags","hash":{},"fn":container.program(19, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":61,"column":48},"end":{"line":65,"column":60}}})) != null ? stack1 : "")
    + "                                                </ul>\n                                            </div>\n                                        </div>\n";
},"19":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <li>\n                                                    <a class=\"qld__tag qld__tag--link\" href=\"./?a="
    + alias1(container.lambda(((stack1 = ((stack1 = (depths[3] != null ? lookupProperty(depths[3],"current") : depths[3])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"assetid") : stack1), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":63,"column":136},"end":{"line":63,"column":143}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":63,"column":145},"end":{"line":63,"column":154}}}) : helper)))
    + "</a>\n                                                </li>\n";
},"21":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"additional_results") : depth0),{"name":"each","hash":{},"fn":container.program(22, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":76,"column":24},"end":{"line":135,"column":33}}})) != null ? stack1 : "");
},"22":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <li class=\"col-xs-12 col-md-6\">\n                                <div class=\"qld__card qld__card__multi-action "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(5, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":78,"column":78},"end":{"line":78,"column":123}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(7, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":79,"column":36},"end":{"line":105,"column":43}}})) != null ? stack1 : "")
    + "                                    <div class=\"qld__card__inner\">\n                                        <div class=\"qld__card__content\">\n                                            <div class=\"qld__card__content-inner\">\n                                                "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":109,"column":48},"end":{"line":109,"column":141}}})) != null ? stack1 : "")
    + "\n                                                <h3 class=\"qld__card__title\">\n                                                <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card--clickable__link\" href=\""
    + alias2(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":111,"column":168},"end":{"line":111,"column":177}}}) : helper)))
    + "</a>   \n                                                </h3>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1),{"name":"if","hash":{},"fn":container.program(16, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":113,"column":48},"end":{"line":115,"column":55}}})) != null ? stack1 : "")
    + "                                            </div>\n                                        </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(18, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":118,"column":40},"end":{"line":131,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </div>\n                            </li>\n";
},"24":function(container,depth0,helpers,partials,data) {
    return "                <div class=\"qld__slick-controls\"></div>\n";
},"26":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"articleType") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","podcast",{"name":"ifCond","hash":{},"fn":container.program(27, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":148,"column":0},"end":{"line":211,"column":11}}})) != null ? stack1 : "")
    + "<section class=\"qld__body qld__card--wrapper "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"articleType") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","podcast",{"name":"ifCond","hash":{},"fn":container.program(38, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":212,"column":45},"end":{"line":212,"column":189}}})) != null ? stack1 : "")
    + "\">\n    <div class=\"container-fluid\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">",0,{"name":"ifCond","hash":{},"fn":container.program(41, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":214,"column":8},"end":{"line":280,"column":19}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"<",1,{"name":"ifCond","hash":{},"fn":container.program(54, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":281,"column":8},"end":{"line":287,"column":19}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"pagination") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(56, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":288,"column":8},"end":{"line":336,"column":19}}})) != null ? stack1 : "")
    + "    </div>\n</section>\n";
},"27":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"additional_results2") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(28, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":149,"column":0},"end":{"line":210,"column":11}}})) != null ? stack1 : "");
},"28":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<section class=\"qld__body qld__card--wrapper\">\n    <div class=\"container-fluid\">\n        <div class=\"row\">\n            <div class=\"qld__card-intro col-xs-12 qld__card-intro--no-top-p\">\n                <h2>Podcasts</h2>\n            </div>\n        </div>\n        <div class=\"row\">\n            <ul class=\"qld__card-list qld__card-list--matchheight\" data-type=\"three\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"additional_results2") : depth0),{"name":"each","hash":{},"fn":container.program(29, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":159,"column":16},"end":{"line":205,"column":25}}})) != null ? stack1 : "")
    + "            </ul>\n        </div>\n    </div>\n</section>\n";
},"29":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <li class=\"col-xs-12 col-md-4\">\n\n                        <div class=\"qld__card qld__card__multi-action "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(5, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":162,"column":70},"end":{"line":162,"column":115}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(30, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":163,"column":28},"end":{"line":175,"column":35}}})) != null ? stack1 : "")
    + "                            <div class=\"qld__card__inner\">\n                                <div class=\"qld__card__content\">\n                                    <div class=\"qld__card__content-inner\">\n                                        "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":179,"column":40},"end":{"line":179,"column":133}}})) != null ? stack1 : "")
    + "\n                                        <h3 class=\"qld__card__title\">\n                                        <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card--clickable__link\" href=\""
    + alias2(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":181,"column":160},"end":{"line":181,"column":169}}}) : helper)))
    + "</a>   \n                                        </h3>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1),{"name":"if","hash":{},"fn":container.program(33, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":183,"column":40},"end":{"line":185,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(35, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":188,"column":32},"end":{"line":201,"column":39}}})) != null ? stack1 : "")
    + "                            </div>\n                        </div>\n                    </li>\n";
},"30":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card__image-link\" href=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">\n                                    <div class=\"qld__responsive-media-img--bg\" style=\"background-image: url('"
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + "')\" alt=\"Image for "
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias3,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":165,"column":146},"end":{"line":165,"column":155}}}) : helper)))
    + "\"></div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias3,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"series") : stack1),{"name":"if","hash":{},"fn":container.program(31, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":166,"column":36},"end":{"line":173,"column":43}}})) != null ? stack1 : "")
    + "                                </a>\n";
},"31":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <div class=\"qld__card__image-tag\">\n                                        <div class=\"qld__card__image-tag--title\">\n                                            <i class=\"fa-regular fa-layer-group\"></i>\n                                            <span class=\"qld__card__image-tag__text--bold\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"series") : stack1), depth0))
    + " Episodes</span>\n                                        </div>\n                                    </div>\n";
},"33":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <p id=\"card-22724\" class=\"qld__card__description\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1), depth0))
    + "</p>\n";
},"35":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <div class=\"qld__card__footer\">\n                                    <hr class=\"qld__horizontal-rule\">\n                                    <div class=\"qld__card__footer-inner\">\n                                        <ul class=\"qld__card__tags qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"getTags","hash":{},"fn":container.program(36, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":193,"column":40},"end":{"line":197,"column":52}}})) != null ? stack1 : "")
    + "                                        </ul>\n                                    </div>\n                                </div>\n";
},"36":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <li>\n                                            <a class=\"qld__tag qld__tag--link\" href=\"./?a="
    + alias1(container.lambda(((stack1 = ((stack1 = (depths[3] != null ? lookupProperty(depths[3],"current") : depths[3])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"assetid") : stack1), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":195,"column":128},"end":{"line":195,"column":135}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":195,"column":137},"end":{"line":195,"column":146}}}) : helper)))
    + "</a>\n                                        </li>\n";
},"38":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"additional_results2") : depth0)) != null ? lookupProperty(stack1,"length") : stack1),">",1,{"name":"ifCond","hash":{},"fn":container.program(39, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":212,"column":109},"end":{"line":212,"column":178}}})) != null ? stack1 : "");
},"39":function(container,depth0,helpers,partials,data) {
    return "qld__body--alt";
},"41":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <div class=\"row\">\n            <div class=\"qld__card-intro col-xs-12 qld__card-intro--no-top-p\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"data") : depth0)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"articleType") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"contains","podcast",{"name":"ifCond","hash":{},"fn":container.program(42, data, 0, blockParams, depths),"inverse":container.program(44, data, 0, blockParams, depths),"data":data,"loc":{"start":{"line":217,"column":16},"end":{"line":221,"column":27}}})) != null ? stack1 : "")
    + "            </div>\n        </div>\n        <div class=\"row\">\n            <ul class=\"qld__card-list qld__card-list--matchheight\" data-type=\"three\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1),{"name":"each","hash":{},"fn":container.program(46, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":226,"column":16},"end":{"line":277,"column":25}}})) != null ? stack1 : "")
    + "            </ul>\n        </div>\n";
},"42":function(container,depth0,helpers,partials,data) {
    return "                <h2>Latest episodes</h2>\n";
},"44":function(container,depth0,helpers,partials,data) {
    return "                <h2>Latest articles</h2>\n";
},"46":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <li class=\"col-xs-12 col-md-4\">\n                        <div class=\"qld__card qld__card__multi-action "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(5, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":228,"column":70},"end":{"line":228,"column":115}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(47, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":229,"column":28},"end":{"line":247,"column":35}}})) != null ? stack1 : "")
    + "                            <div class=\"qld__card__inner\">\n                                <div class=\"qld__card__content\">\n                                    <div class=\"qld__card__content-inner\">\n                                        "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":251,"column":40},"end":{"line":251,"column":133}}})) != null ? stack1 : "")
    + "\n                                        <h3 class=\"qld__card__title\">\n                                        <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card--clickable__link\" href=\""
    + alias2(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":253,"column":160},"end":{"line":253,"column":169}}}) : helper)))
    + "</a>   \n                                        </h3>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1),{"name":"if","hash":{},"fn":container.program(33, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":255,"column":40},"end":{"line":257,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(51, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":260,"column":32},"end":{"line":273,"column":39}}})) != null ? stack1 : "")
    + "                            </div>\n                        </div>\n                    </li>\n";
},"47":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), alias4=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <a aria-label=\"Brand\" aria-describedby=\"card-22724\" class=\"qld__card__image-link\" href=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">\n                                    <div class=\"qld__responsive-media-img--bg\" style=\"background-image: url('"
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + "')\" alt=\"Image for "
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias4),(typeof helper === "function" ? helper.call(alias3,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":231,"column":146},"end":{"line":231,"column":155}}}) : helper)))
    + "\"></div>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"articleType") : stack1),"==","podcast",{"name":"ifCond","hash":{},"fn":container.program(48, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":232,"column":37},"end":{"line":245,"column":47}}})) != null ? stack1 : "")
    + "                                </a>\n";
},"48":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <div class=\"qld__card__image-tag\">\n                                        <div class=\"qld__card__image-tag--title\">\n                                            <i class=\"fa-light fa-podcast\"></i>\n                                            <span class=\"qld__card__image-tag__text--bold\">Listen</span>\n                                        </div>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1),{"name":"if","hash":{},"fn":container.program(49, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":238,"column":40},"end":{"line":243,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n";
},"49":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <div class=\"qld__card__image-tag--length\">\n                                            <i class=\"far fa-clock\"></i>\n                                            <span class=\"qld__card__image-tag__text--small\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"episodeLength") : stack1), depth0))
    + "</span>\n                                        </div>\n";
},"51":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <div class=\"qld__card__footer\">\n                                    <hr class=\"qld__horizontal-rule\">\n                                    <div class=\"qld__card__footer-inner\">\n                                        <ul class=\"qld__card__tags qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"component"))) && lookupProperty(stack1,"tags")),{"name":"getTags","hash":{},"fn":container.program(52, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":265,"column":40},"end":{"line":269,"column":53}}})) != null ? stack1 : "")
    + "                                        </ul>\n                                    </div>\n                                </div>\n";
},"52":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <li>\n                                                <a class=\"qld__tag qld__tag--link\" href=\"./?a="
    + alias1(container.lambda(((stack1 = ((stack1 = (depths[3] != null ? lookupProperty(depths[3],"current") : depths[3])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"assetid") : stack1), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":267,"column":132},"end":{"line":267,"column":139}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":267,"column":141},"end":{"line":267,"column":150}}}) : helper)))
    + "</a>\n                                            </li>\n";
},"54":function(container,depth0,helpers,partials,data) {
    return "            <div class=\"row\">\n                <div class=\"qld__card-intro col-xs-12 qld__card-intro--no-top-p\">\n                    <h2>Sorry, no articles were found with that tag.</h2>\n                </div>\n            </div>\n";
},"56":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <div class=\"row\">\n            <div class=\"qld__card-list__footer centered col-xs-12\">\n                <nav class=\"text-center hidden-print qld__search-pagination\" aria-label=\"pagination\">\n                    <h2 class=\"sr-only\">Pagination</h2>\n                    <ul class=\"qld__search-pagination__list\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"pagination") : depth0),{"name":"each","hash":{},"fn":container.program(57, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":294,"column":24},"end":{"line":330,"column":33}}})) != null ? stack1 : "")
    + "                    </ul>\n                </nav>\n            </div>\n        </div>\n            \n";
},"57":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","last",{"name":"ifCond","hash":{},"fn":container.program(58, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":295,"column":28},"end":{"line":301,"column":39}}})) != null ? stack1 : "")
    + "\n                            <li class=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"linkType") || (depth0 != null ? lookupProperty(depth0,"linkType") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"linkType","hash":{},"data":data,"loc":{"start":{"line":303,"column":39},"end":{"line":303,"column":51}}}) : helper)))
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"isCurrent") : depth0),{"name":"if","hash":{},"fn":container.program(60, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":303,"column":51},"end":{"line":303,"column":82}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","prev",{"name":"ifCond","hash":{},"fn":container.program(62, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":304,"column":32},"end":{"line":309,"column":43}}})) != null ? stack1 : "")
    + "                                \n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"label") : depth0),{"name":"if","hash":{},"fn":container.program(64, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":311,"column":32},"end":{"line":313,"column":39}}})) != null ? stack1 : "")
    + "\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","next",{"name":"ifCond","hash":{},"fn":container.program(66, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":315,"column":32},"end":{"line":320,"column":43}}})) != null ? stack1 : "")
    + "                            </li>\n                        \n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"linkType") : depth0),"===","first",{"name":"ifCond","hash":{},"fn":container.program(58, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":323,"column":28},"end":{"line":329,"column":39}}})) != null ? stack1 : "");
},"58":function(container,depth0,helpers,partials,data) {
    return "                                <li class=\"ellipsis\">\n                                    <span>\n                                        <i class=\"fa fa-ellipsis-h\"></i>\n                                    </span>\n                                </li>\n";
},"60":function(container,depth0,helpers,partials,data) {
    return " active";
},"62":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <a class=\"qld__search-pagination_link\" href=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"url","hash":{},"data":data,"loc":{"start":{"line":305,"column":81},"end":{"line":305,"column":88}}}) : helper)))
    + "\" rel=\"prev\" aria-label=\"Previous page of results\">\n                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" role=\"img\"><path fill=\"currentColor\" d=\"M448 256C448 264.8 440.6 272 431.4 272H54.11l140.7 149.3c6.157 6.531 5.655 16.66-1.118 22.59C190.5 446.6 186.5 448 182.5 448c-4.505 0-9.009-1.75-12.28-5.25l-165.9-176c-5.752-6.094-5.752-15.41 0-21.5l165.9-176c6.19-6.562 16.69-7 23.45-1.094c6.773 5.938 7.275 16.06 1.118 22.59L54.11 240h377.3C440.6 240 448 247.2 448 256z\"/></svg>\n                                        <span>Back</span>\n                                    </a>\n";
},"64":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <a class=\"qld__search-pagination_link\" href=\""
    + alias4(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"url","hash":{},"data":data,"loc":{"start":{"line":312,"column":81},"end":{"line":312,"column":88}}}) : helper)))
    + "\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"label") || (depth0 != null ? lookupProperty(depth0,"label") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"label","hash":{},"data":data,"loc":{"start":{"line":312,"column":90},"end":{"line":312,"column":99}}}) : helper)))
    + "</a></li>\n";
},"66":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <a class=\"qld__search-pagination_link\" href=\""
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"url") || (depth0 != null ? lookupProperty(depth0,"url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"url","hash":{},"data":data,"loc":{"start":{"line":316,"column":81},"end":{"line":316,"column":88}}}) : helper)))
    + "\" rel=\"next\" aria-label=\"Next page of results\">\n                                        <span>Next</span>\n                                         <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" role=\"img\"><path fill=\"currentColor\" d=\"M443.7 266.8l-165.9 176C274.5 446.3 269.1 448 265.5 448c-3.986 0-7.988-1.375-11.16-4.156c-6.773-5.938-7.275-16.06-1.118-22.59L393.9 272H16.59c-9.171 0-16.59-7.155-16.59-15.1S7.421 240 16.59 240h377.3l-140.7-149.3c-6.157-6.531-5.655-16.66 1.118-22.59c6.789-5.906 17.27-5.469 23.45 1.094l165.9 176C449.4 251.3 449.4 260.7 443.7 266.8z\"/></svg>\n                                    </a>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<section class=\"qld__body qld__body--alt qld__card--wrapper\">\n    <div class=\"container-fluid\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||container.hooks.helperMissing).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"component") : depth0)) != null ? lookupProperty(stack1,"additional_results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">",0,{"name":"ifCond","hash":{},"fn":container.program(1, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":3,"column":8},"end":{"line":144,"column":19}}})) != null ? stack1 : "")
    + "    </div>\n</section>\n"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,(depth0 != null ? lookupProperty(depth0,"component") : depth0),{"name":"with","hash":{},"fn":container.program(26, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":147,"column":0},"end":{"line":339,"column":9}}})) != null ? stack1 : "");
},"useData":true,"useDepths":true}