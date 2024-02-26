{"1":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.lambda, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<article class=\"qld__news-article\" >\n    <div class=\"row\">\n        <div class=\"qld__news-article__main "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"display_right_column") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),"==","true",{"name":"ifCond","hash":{},"fn":container.program(2, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":4,"column":44},"end":{"line":4,"column":113}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"display_right_column") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),"==","false",{"name":"ifCond","hash":{},"fn":container.program(4, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":4,"column":113},"end":{"line":4,"column":184}}})) != null ? stack1 : "")
    + " col-xs-12\">\n            <div class=\"qld__news-article__header\">\n                <h1>"
    + container.escapeExpression(alias3(((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"current"))) && lookupProperty(stack1,"data"))) && lookupProperty(stack1,"name")), depth0))
    + "</h1>\n                "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"author") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(6, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":8,"column":16},"end":{"line":8,"column":109}}})) != null ? stack1 : "")
    + "\n                <p class=\"qld__news-article__published-date\"><strong>Published:</strong> "
    + ((stack1 = (lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"published") : stack1),"d F Y",{"name":"formatDate","hash":{},"fn":container.program(8, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":9,"column":89},"end":{"line":9,"column":153}}})) != null ? stack1 : "")
    + "</p>\n\n                <div class=\"qld__news-article__utility\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"social_share_buttons") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(10, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":12,"column":20},"end":{"line":57,"column":27}}})) != null ? stack1 : "")
    + "                    <div class=\"qld__tag qld__tag--large\">\n                        Read time will display here.\n                    </div>\n                </div>\n            </div>\n            <hr class=\"qld__horizontal-rule\" />\n            <div class=\"qld__news-article__body\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"hero_image") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(26, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":65,"column":16},"end":{"line":72,"column":23}}})) != null ? stack1 : "")
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"episode_id") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(29, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":73,"column":16},"end":{"line":75,"column":23}}})) != null ? stack1 : "")
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"summary") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(31, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":76,"column":16},"end":{"line":81,"column":23}}})) != null ? stack1 : "")
    + "                <div class=\"qld__news-article__content\">\n                    "
    + ((stack1 = alias3(((stack1 = (depth0 != null ? lookupProperty(depth0,"body") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"transcript") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(33, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":84,"column":20},"end":{"line":87,"column":27}}})) != null ? stack1 : "")
    + "                </div>\n            </div>\n            <hr class=\"qld__horizontal-rule\" />\n            <div class=\"qld__news-article__footer\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"article_tags") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(35, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":92,"column":16},"end":{"line":103,"column":23}}})) != null ? stack1 : "")
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"updated") : stack1),{"name":"if","hash":{},"fn":container.program(38, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":104,"column":16},"end":{"line":106,"column":23}}})) != null ? stack1 : "")
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"social_share_buttons") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(40, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":107,"column":16},"end":{"line":135,"column":23}}})) != null ? stack1 : "")
    + "            </div>\n        </div>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"display_right_column") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),"==","true",{"name":"ifCond","hash":{},"fn":container.program(54, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":138,"column":8},"end":{"line":199,"column":19}}})) != null ? stack1 : "")
    + "    </div>\n</article>\n";
},"2":function(container,depth0,helpers,partials,data) {
    return "col-md-8";
},"4":function(container,depth0,helpers,partials,data) {
    return "col-md-12";
},"6":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<p class=\"qld__news-article__published-by\">by "
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"author") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "</p>";
},"8":function(container,depth0,helpers,partials,data) {
    return "";
},"10":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <button class=\"qld__btn qld__btn--icon-trail qld__news-article__share-btn qld__open-modal\" data-modaltarget=\"qld__share-model\">Share<i class=\"far fa-share-alt\"></i></button>\n                    <div id=\"qld__share-model\" class=\"qld__modal qld__news-article__share-modal\" tabindex=\"-1\">\n                        <div class=\"qld__modal__underlay\"></div>\n                        <div class=\"qld__modal__body\">\n                            <div class=\"qld__modal__body__header\">\n                                <h2 class=\"qld__modal__body__heading qld__display-md\">Share this article</h2>\n                            </div>\n                            <div class=\"qld__modal__body__content\">\n                                <p>Share this article on your networks</p>\n                                <ul class=\"qld__news-article__share-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"objectFromSelect")||(depth0 && lookupProperty(depth0,"objectFromSelect"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"social_share_buttons") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"objectFromSelect","hash":{},"fn":container.program(11, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":23,"column":32},"end":{"line":44,"column":53}}})) != null ? stack1 : "")
    + "                                </ul>\n                                <p>Or copy link</p>\n                                <p class=\"qld__news-article__copy-link\">"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||alias2).call(alias1,((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":47,"column":80},"end":{"line":47,"column":110}}}),{"name":"with","hash":{},"fn":container.program(24, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":47,"column":72},"end":{"line":47,"column":269}}})) != null ? stack1 : "")
    + "<span class=\"qld__copied-to-clipboard\"></span></p>\n                            </div>\n                            <button class=\"qld__modal__close qld__btn\" data-action=\"close\">\n                                <span class=\"sr-only\">\n                                    Close modal\n                                </span>\n                                <i class=\"fal fa-times\"></i>\n                            </button>\n                        </div>\n                    </div>\n";
},"11":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Facebook",{"name":"ifCond","hash":{},"fn":container.program(12, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":24,"column":36},"end":{"line":28,"column":47}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Twitter",{"name":"ifCond","hash":{},"fn":container.program(15, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":29,"column":36},"end":{"line":33,"column":47}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Linkedin",{"name":"ifCond","hash":{},"fn":container.program(18, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":34,"column":36},"end":{"line":38,"column":47}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Email",{"name":"ifCond","hash":{},"fn":container.program(21, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":39,"column":36},"end":{"line":43,"column":47}}})) != null ? stack1 : "");
},"12":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":25,"column":48},"end":{"line":25,"column":81}}}),{"name":"with","hash":{},"fn":container.program(13, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":25,"column":40},"end":{"line":27,"column":49}}})) != null ? stack1 : "");
},"13":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <li><a href=\"https://www.facebook.com/sharer.php?u="
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":26,"column":95},"end":{"line":26,"column":108}}}) : helper)))
    + "\" target=\"_blank\" data-action=\"close\"><span class=\"sr-only\">Share via Facebook</span><i class=\"fab fa-facebook-f\"></i></a></li>\n";
},"15":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":30,"column":48},"end":{"line":30,"column":81}}}),{"name":"with","hash":{},"fn":container.program(16, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":30,"column":40},"end":{"line":32,"column":49}}})) != null ? stack1 : "");
},"16":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <li><a href=\"https://twitter.com/share?url="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":31,"column":87},"end":{"line":31,"column":100}}}) : helper)))
    + "&text="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":31,"column":106},"end":{"line":31,"column":120}}}) : helper)))
    + "\" target=\"_blank\" data-action=\"close\"><span class=\"sr-only\">Share via Twitter</span><i class=\"fab fa-twitter\"></i></a></li>\n";
},"18":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":35,"column":48},"end":{"line":35,"column":81}}}),{"name":"with","hash":{},"fn":container.program(19, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":35,"column":40},"end":{"line":37,"column":49}}})) != null ? stack1 : "");
},"19":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <li><a href=\"https://www.linkedin.com/shareArticle?url="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":36,"column":99},"end":{"line":36,"column":112}}}) : helper)))
    + "&title="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":36,"column":119},"end":{"line":36,"column":133}}}) : helper)))
    + "\" target=\"_blank\" data-action=\"close\"><span class=\"sr-only\">Share via Linkedin</span><i class=\"fab fa-linkedin-in\"></i></a></li>\n";
},"21":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":40,"column":48},"end":{"line":40,"column":81}}}),{"name":"with","hash":{},"fn":container.program(22, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":40,"column":40},"end":{"line":42,"column":49}}})) != null ? stack1 : "");
},"22":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                            <li><a href=\"mailto:?subject=Queensland Health News Article - "
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":41,"column":106},"end":{"line":41,"column":120}}}) : helper)))
    + "&body=View this page "
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":41,"column":141},"end":{"line":41,"column":154}}}) : helper)))
    + "\" target=\"_blank\" data-action=\"close\"><span class=\"sr-only\">Share via email</span><i class=\"far fa-envelope\"></i></a></li>\n";
},"24":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<i class=\"far fa-link\"></i><span tabindex=\"0\" aria-label=\"Press enter or space to copy link\" role=\"button\" aria-pressed=\"false\">"
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":47,"column":240},"end":{"line":47,"column":253}}}) : helper)))
    + "</span>";
},"26":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__news-article__hero\">\n                    <img class=\"qld__news-article__hero__image\" src=\"https://qhscb.squiz.cloud/?a="
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"hero_image") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\" alt=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"hero_caption") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\"/>\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"hero_caption") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"if","hash":{},"fn":container.program(27, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":68,"column":20},"end":{"line":70,"column":27}}})) != null ? stack1 : "")
    + "                </div>\n";
},"27":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <p class=\"qld__news-article__hero__caption\">"
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"hero_caption") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "</p>\n";
},"29":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"whooshkaa-widget-player\" data-episode-id=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"episode_id") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0))
    + "\" data-play-video-if-available=\"true\" data-theme=\"dark\" data-share-parent-page=\"true\" data-enable-volume=\"true\" data-height=\"200\" data-title=\""
    + alias2(alias1(((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"current"))) && lookupProperty(stack1,"data"))) && lookupProperty(stack1,"name")), depth0))
    + "\"></div>\n";
},"31":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__news-article__summary\">\n                    <h2 class=\"qld__display-md\">Summary</h2>\n                    "
    + ((stack1 = container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"summary") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n                </div>\n";
},"33":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <h3>Transcript</h3>\n                    "
    + ((stack1 = container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"transcript") : depth0)) != null ? lookupProperty(stack1,"value") : stack1), depth0)) != null ? stack1 : "")
    + "\n";
},"35":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__news-article__footer__tags\">\n                    <h2 class=\"qld__display-sm\">This page is tagged in the following topics</h2>\n                    <ul class=\"qld__tag-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"getTags")||(depth0 && lookupProperty(depth0,"getTags"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"article_tags") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"tags") : stack1),{"name":"getTags","hash":{},"fn":container.program(36, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":96,"column":24},"end":{"line":100,"column":36}}})) != null ? stack1 : "")
    + "                    </ul> \n                </div>\n";
},"36":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), alias3=container.hooks.helperMissing, alias4="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <li>\n                            <a class=\"qld__tag qld__tag--link qld__tag--large\" href=\""
    + alias1(container.lambda(((stack1 = ((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"site"))) && lookupProperty(stack1,"metadata"))) && lookupProperty(stack1,"podcastIndexUrl"))) && lookupProperty(stack1,"value")), depth0))
    + "?tag="
    + alias1(((helper = (helper = lookupProperty(helpers,"key") || (depth0 != null ? lookupProperty(depth0,"key") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"key","hash":{},"data":data,"loc":{"start":{"line":98,"column":135},"end":{"line":98,"column":142}}}) : helper)))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"value") || (depth0 != null ? lookupProperty(depth0,"value") : depth0)) != null ? helper : alias3),(typeof helper === alias4 ? helper.call(alias2,{"name":"value","hash":{},"data":data,"loc":{"start":{"line":98,"column":144},"end":{"line":98,"column":153}}}) : helper)))
    + "</a>\n                        </li>\n";
},"38":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <p class=\"qld__news-article__updated-date\"><strong>Last updated:</strong> "
    + ((stack1 = (lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"current") : depths[1])) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"updated") : stack1),"d F Y",{"name":"formatDate","hash":{},"fn":container.program(8, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":105,"column":94},"end":{"line":105,"column":156}}})) != null ? stack1 : "")
    + "</p>\n";
},"40":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__news-article__footer__share\">\n                    <h2 class=\"qld__display-md\">Share</h2>\n                    <ul class=\"qld__news-article__share-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"objectFromSelect")||(depth0 && lookupProperty(depth0,"objectFromSelect"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"social_share_buttons") : depth0)) != null ? lookupProperty(stack1,"value") : stack1),{"name":"objectFromSelect","hash":{},"fn":container.program(41, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":111,"column":24},"end":{"line":132,"column":45}}})) != null ? stack1 : "")
    + "                    </ul>\n                </div>\n";
},"41":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Facebook",{"name":"ifCond","hash":{},"fn":container.program(42, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":112,"column":28},"end":{"line":116,"column":39}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Twitter",{"name":"ifCond","hash":{},"fn":container.program(45, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":117,"column":28},"end":{"line":121,"column":39}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Linkedin",{"name":"ifCond","hash":{},"fn":container.program(48, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":122,"column":28},"end":{"line":126,"column":39}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"value") : depth0),"==","Email",{"name":"ifCond","hash":{},"fn":container.program(51, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":127,"column":28},"end":{"line":131,"column":39}}})) != null ? stack1 : "");
},"42":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":113,"column":40},"end":{"line":113,"column":73}}}),{"name":"with","hash":{},"fn":container.program(43, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":113,"column":32},"end":{"line":115,"column":41}}})) != null ? stack1 : "");
},"43":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <li><a href=\"https://www.facebook.com/sharer.php?u="
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":114,"column":87},"end":{"line":114,"column":100}}}) : helper)))
    + "\" target=\"_blank\"><span class=\"sr-only\">Share via Facebook</span><i class=\"fab fa-facebook-f\"></i></a></li>\n";
},"45":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":118,"column":40},"end":{"line":118,"column":73}}}),{"name":"with","hash":{},"fn":container.program(46, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":118,"column":32},"end":{"line":120,"column":41}}})) != null ? stack1 : "");
},"46":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <li><a href=\"https://twitter.com/share?url="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":119,"column":79},"end":{"line":119,"column":92}}}) : helper)))
    + "&text="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":119,"column":98},"end":{"line":119,"column":112}}}) : helper)))
    + "\" target=\"_blank\"><span class=\"sr-only\">Share via Twitter</span><i class=\"fab fa-twitter\"></i></a></li>\n";
},"48":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":123,"column":40},"end":{"line":123,"column":73}}}),{"name":"with","hash":{},"fn":container.program(49, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":123,"column":32},"end":{"line":125,"column":41}}})) != null ? stack1 : "");
},"49":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <li><a href=\"https://www.linkedin.com/shareArticle?url="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":124,"column":91},"end":{"line":124,"column":104}}}) : helper)))
    + "&title="
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":124,"column":111},"end":{"line":124,"column":125}}}) : helper)))
    + "\" target=\"_blank\"><span class=\"sr-only\">Share via Linkedin</span><i class=\"fab fa-linkedin-in\"></i></a></li>\n";
},"51":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"itemAt")||(depth0 && lookupProperty(depth0,"itemAt"))||container.hooks.helperMissing).call(alias1,((stack1 = (depths[2] != null ? lookupProperty(depths[2],"current") : depths[2])) != null ? lookupProperty(stack1,"lineage") : stack1),-1,{"name":"itemAt","hash":{},"data":data,"loc":{"start":{"line":128,"column":40},"end":{"line":128,"column":73}}}),{"name":"with","hash":{},"fn":container.program(52, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":128,"column":32},"end":{"line":130,"column":41}}})) != null ? stack1 : "");
},"52":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3="function", alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <li><a href=\"mailto:?subject=Queensland Health News Article - "
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_name") || (depth0 != null ? lookupProperty(depth0,"asset_name") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_name","hash":{},"data":data,"loc":{"start":{"line":129,"column":98},"end":{"line":129,"column":112}}}) : helper)))
    + "&body=View this page "
    + alias4(((helper = (helper = lookupProperty(helpers,"asset_url") || (depth0 != null ? lookupProperty(depth0,"asset_url") : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"asset_url","hash":{},"data":data,"loc":{"start":{"line":129,"column":133},"end":{"line":129,"column":146}}}) : helper)))
    + "\" target=\"_blank\"><span class=\"sr-only\">Share via email</span><i class=\"far fa-envelope\"></i></a></li>\n";
},"54":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "            <aside class=\"qld__news-article__aside col-md-3 col-md-offset-1 col-xs-12\">\n                <h3>Related content</h3>\n                <h4 class=\"qld__news-article__aside__sub-heading qld__display-sm\"><i class=\"far fa-newspaper\"></i>News</h4>\n                <ul class=\"qld__card-list\">\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">","0",{"name":"ifCond","hash":{},"fn":container.program(55, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":143,"column":16},"end":{"line":157,"column":27}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"<=","0",{"name":"ifCond","hash":{},"fn":container.program(58, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":158,"column":16},"end":{"line":160,"column":27}}})) != null ? stack1 : "")
    + "                </ul>\n"
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"additional_results") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">","0",{"name":"ifCond","hash":{},"fn":container.program(60, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":162,"column":16},"end":{"line":179,"column":27}}})) != null ? stack1 : "")
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = ((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"additional_results2") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">","0",{"name":"ifCond","hash":{},"fn":container.program(63, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":180,"column":16},"end":{"line":197,"column":27}}})) != null ? stack1 : "")
    + "            </aside>\n";
},"55":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"results") : stack1),{"name":"each","hash":{},"fn":container.program(56, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":144,"column":20},"end":{"line":156,"column":29}}})) != null ? stack1 : "");
},"56":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <li class=\"col-xs-12\">   \n                        <div class=\"qld__card qld__card__action\">\n                            <div class=\"qld__card__inner\">\n                                <div class=\"qld__card__content\">\n                                    <div class=\"qld__card__content-inner\">\n                                        <h4 class=\"qld__card__title\"><a class=\"qld__card--clickable__link\" href=\""
    + alias1(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"title","hash":{},"data":data,"loc":{"start":{"line":150,"column":140},"end":{"line":150,"column":149}}}) : helper)))
    + "</a></h4>\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                    </li>\n";
},"58":function(container,depth0,helpers,partials,data) {
    return "                    <p>No related articles</p>\n";
},"60":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <h4 class=\"qld__news-article__aside__sub-heading qld__display-sm\"><i class=\"far fa-newspaper\"></i>Feature</h4>\n                <ul class=\"qld__card-list\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"additional_results") : stack1),{"name":"each","hash":{},"fn":container.program(61, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":165,"column":20},"end":{"line":177,"column":29}}})) != null ? stack1 : "")
    + "                </ul>\n";
},"61":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <li class=\"col-xs-12\">\n                        <div class=\"qld__card qld__card__action\">\n                            <div class=\"qld__card__inner\">\n                                <div class=\"qld__card__content\">\n                                    <div class=\"qld__card__content-inner\">\n                                        <h4 class=\"qld__card__title\"><a class=\"qld__card--clickable__link\" href=\""
    + alias1(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias1(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"title","hash":{},"data":data,"loc":{"start":{"line":171,"column":140},"end":{"line":171,"column":149}}}) : helper)))
    + "</a></h4>\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                    </li>  \n";
},"63":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <h4 class=\"qld__news-article__aside__sub-heading qld__display-sm\"><i class=\"far fa-microphone\"></i>Podcasts</h4>\n                <ul class=\"qld__card-list\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depths[1] != null ? lookupProperty(depths[1],"component") : depths[1])) != null ? lookupProperty(stack1,"additional_results2") : stack1),{"name":"each","hash":{},"fn":container.program(61, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":183,"column":20},"end":{"line":195,"column":29}}})) != null ? stack1 : "")
    + "                </ul>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams,depths) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"component") : depth0)) != null ? lookupProperty(stack1,"data") : stack1)) != null ? lookupProperty(stack1,"metadata") : stack1),{"name":"with","hash":{},"fn":container.program(1, data, 0, blockParams, depths),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":202,"column":9}}})) != null ? stack1 : "");
},"useData":true,"useDepths":true}