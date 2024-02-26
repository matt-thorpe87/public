{"1":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<section class=\"qld__body "
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"body_background") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + " qld__card--wrapper\" id=\""
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"id_field") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(2, data, 0, blockParams, depths),"inverse":container.program(4, data, 0, blockParams, depths),"data":data,"loc":{"start":{"line":2,"column":85},"end":{"line":2,"column":181}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"pageType") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","landing",{"name":"ifCond","hash":{},"fn":container.program(6, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":3,"column":4},"end":{"line":5,"column":15}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">",0,{"name":"ifCond","hash":{},"fn":container.program(8, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":6,"column":8},"end":{"line":82,"column":19}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"results") : depth0)) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"<",1,{"name":"ifCond","hash":{},"fn":container.program(40, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":83,"column":8},"end":{"line":89,"column":19}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = ((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"metadata") : stack1)) != null ? lookupProperty(stack1,"pageType") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),"==","landing",{"name":"ifCond","hash":{},"fn":container.program(42, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":90,"column":4},"end":{"line":92,"column":15}}})) != null ? stack1 : "")
    + "</section>\n";
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

  return "news-feed-"
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"assetid") || (depth0 != null ? lookupProperty(depth0,"assetid") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"assetid","hash":{},"data":data,"loc":{"start":{"line":2,"column":163},"end":{"line":2,"column":174}}}) : helper)));
},"6":function(container,depth0,helpers,partials,data) {
    return "    <div class=\"container-fluid\">\n";
},"8":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, alias3=depth0 != null ? depth0 : (container.nullContext || {}), alias4=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "        <div class=\"row\">\n            <div class=\"qld__card-intro col-xs-12\">\n                <h2>"
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"heading") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "</h2>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias3,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"intro_text") : stack1)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(9, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":10,"column":16},"end":{"line":12,"column":23}}})) != null ? stack1 : "")
    + "            </div>\n        </div>\n        <div class=\"row\">\n            <ul class=\"qld__card-list qld__card-list--matchheight\" data-action=\"slick-slider\" data-type=\""
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,(lookupProperty(helpers,"arrayLength")||(depth0 && lookupProperty(depth0,"arrayLength"))||alias4).call(alias3,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"arrayLength","hash":{},"data":data,"loc":{"start":{"line":16,"column":115},"end":{"line":16,"column":149}}}),"==","1",{"name":"ifCond","hash":{},"fn":container.program(11, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":105},"end":{"line":16,"column":174}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,(lookupProperty(helpers,"arrayLength")||(depth0 && lookupProperty(depth0,"arrayLength"))||alias4).call(alias3,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"arrayLength","hash":{},"data":data,"loc":{"start":{"line":16,"column":184},"end":{"line":16,"column":218}}}),"==","2",{"name":"ifCond","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":174},"end":{"line":16,"column":243}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,(lookupProperty(helpers,"arrayLength")||(depth0 && lookupProperty(depth0,"arrayLength"))||alias4).call(alias3,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"arrayLength","hash":{},"data":data,"loc":{"start":{"line":16,"column":253},"end":{"line":16,"column":287}}}),"==","3",{"name":"ifCond","hash":{},"fn":container.program(15, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":243},"end":{"line":16,"column":314}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias3,(lookupProperty(helpers,"arrayLength")||(depth0 && lookupProperty(depth0,"arrayLength"))||alias4).call(alias3,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"arrayLength","hash":{},"data":data,"loc":{"start":{"line":16,"column":324},"end":{"line":16,"column":358}}}),"=>","4",{"name":"ifCond","hash":{},"fn":container.program(17, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":16,"column":314},"end":{"line":16,"column":384}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias3,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"each","hash":{},"fn":container.program(19, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":17,"column":16},"end":{"line":75,"column":25}}})) != null ? stack1 : "")
    + "            </ul>\n            <div class=\"qld__card-list__footer   col-xs-12\">\n                <div class=\"qld__slick-controls\"></div>\n                <a class=\"qld__cta-link qld__cta-link--view-all\" href=\"./?a="
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"all_items_link") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\">"
    + alias2(alias1(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"all_items_label") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "</a>\n            </div>\n        </div>\n";
},"9":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    "
    + ((stack1 = container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"metadata") : depth0)) != null ? lookupProperty(stack1,"intro_text") : stack1)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n";
},"11":function(container,depth0,helpers,partials,data) {
    return "one";
},"13":function(container,depth0,helpers,partials,data) {
    return "two";
},"15":function(container,depth0,helpers,partials,data) {
    return "three";
},"17":function(container,depth0,helpers,partials,data) {
    return "four";
},"19":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <li class=\"col-xs-12 \n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"==","1",{"name":"ifCond","hash":{},"fn":container.program(20, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":19,"column":20},"end":{"line":21,"column":31}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"==","2",{"name":"ifCond","hash":{},"fn":container.program(20, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":22,"column":20},"end":{"line":24,"column":31}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"==","3",{"name":"ifCond","hash":{},"fn":container.program(22, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":25,"column":20},"end":{"line":27,"column":31}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[2] != null ? lookupProperty(depths[2],"component") : depths[2])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"=>","4",{"name":"ifCond","hash":{},"fn":container.program(22, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":28,"column":20},"end":{"line":30,"column":31}}})) != null ? stack1 : "")
    + "                \">\n                        <div class=\"qld__card qld__card__multi-action "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(24, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":32,"column":70},"end":{"line":32,"column":115}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1),{"name":"if","hash":{},"fn":container.program(26, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":33,"column":28},"end":{"line":37,"column":35}}})) != null ? stack1 : "")
    + "                            <div class=\"qld__card__inner\">\n                                <div class=\"qld__card__content\">\n                                    <div class=\"qld__card__content-inner\">\n                                        "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"date") : depth0),{"name":"if","hash":{},"fn":container.program(28, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":41,"column":40},"end":{"line":41,"column":133}}})) != null ? stack1 : "")
    + "\n                                        <h3 class=\"qld__card__title\"><a class=\"qld__card--clickable__link\" href=\""
    + alias3(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias3(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":42,"column":140},"end":{"line":42,"column":149}}}) : helper)))
    + "</a></h3>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1),{"name":"if","hash":{},"fn":container.program(31, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":43,"column":40},"end":{"line":45,"column":47}}})) != null ? stack1 : "")
    + "                                    </div>\n                                </div>\n                                \n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"if","hash":{},"fn":container.program(33, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":49,"column":32},"end":{"line":71,"column":39}}})) != null ? stack1 : "")
    + "                            </div>\n                        </div>\n                    </li>\n";
},"20":function(container,depth0,helpers,partials,data) {
    return "                        col-md-6 col-lg-4\n";
},"22":function(container,depth0,helpers,partials,data) {
    return "                        col-md-4 col-lg-4\n";
},"24":function(container,depth0,helpers,partials,data) {
    return "qld__card--image";
},"26":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <a href=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\" class=\"qld__card__image-link\">\n                                <div class=\"qld__responsive-media-img--bg\" style=\"background-image: url('"
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + "')\" alt=\"Image for "
    + alias2(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"title","hash":{},"data":data,"loc":{"start":{"line":35,"column":142},"end":{"line":35,"column":151}}}) : helper)))
    + "\"></div>\n                            </a>\n";
},"28":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<p class=\"qld__card__date\">"
    + ((stack1 = (lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"date") : depth0),"d.m.Y",{"name":"formatDate","hash":{},"fn":container.program(29, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":41,"column":79},"end":{"line":41,"column":122}}})) != null ? stack1 : "")
    + "</p>";
},"29":function(container,depth0,helpers,partials,data) {
    return "";
},"31":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        <div class=\"qld__card__description\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1), depth0))
    + "</div>\n";
},"33":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <div class=\"qld__card__footer\">\n                                    <hr class=\"qld__horizontal-rule\">\n                                    <div class=\"qld__card__footer-inner\">\n                                        <ul class=\"qld__card__tags qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"articleType") : stack1),"==","news",{"name":"ifCond","hash":{},"fn":container.program(34, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":54,"column":44},"end":{"line":60,"column":55}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"articleType") : stack1),"==","feature-article",{"name":"ifCond","hash":{},"fn":container.program(37, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":61,"column":44},"end":{"line":67,"column":55}}})) != null ? stack1 : "")
    + "                                        </ul>\n                                    </div>\n                                </div>\n";
},"34":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"component"))) && lookupProperty(stack1,"tags")),{"name":"getTags","hash":{},"fn":container.program(35, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":55,"column":48},"end":{"line":59,"column":60}}})) != null ? stack1 : "");
},"35":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <li>\n                                                    <a href=\""
    + alias1(container.lambda(((stack1 = ((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"site"))) && lookupProperty(stack1,"metadata"))) && lookupProperty(stack1,"newsIndexUrl"))) && lookupProperty(stack1,"value")), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":57,"column":108},"end":{"line":57,"column":115}}}) : helper)))
    + "\" class=\"qld__tag qld__tag--link\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":57,"column":149},"end":{"line":57,"column":158}}}) : helper)))
    + "</a>\n                                                </li>\n";
},"37":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"tags") : stack1),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"component"))) && lookupProperty(stack1,"tags")),{"name":"getTags","hash":{},"fn":container.program(38, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":62,"column":48},"end":{"line":66,"column":60}}})) != null ? stack1 : "");
},"38":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                <li>\n                                                    <a href=\""
    + alias1(container.lambda(((stack1 = ((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"site"))) && lookupProperty(stack1,"metadata"))) && lookupProperty(stack1,"featureArticleIndexUrl"))) && lookupProperty(stack1,"value")), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":64,"column":118},"end":{"line":64,"column":125}}}) : helper)))
    + "\" class=\"qld__tag qld__tag--link\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":64,"column":159},"end":{"line":64,"column":168}}}) : helper)))
    + "</a>\n                                                </li>\n";
},"40":function(container,depth0,helpers,partials,data) {
    return "        <div class=\"row\">\n            <div class=\"qld__card-intro col-xs-12 qld__card-intro--no-top-p\">\n                <h2>Sorry, no articles were found with that tag.</h2>\n            </div>\n        </div>\n";
},"42":function(container,depth0,helpers,partials,data) {
    return "    </div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"component") : depth0)) != null ? lookupProperty(stack1,"data") : stack1),{"name":"with","hash":{},"fn":container.program(1, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":94,"column":9}}})) != null ? stack1 : "");
},"useData":true,"useDepths":true}