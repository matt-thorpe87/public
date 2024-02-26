{"1":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"location") : stack1), depth0));
},"3":function(container,depth0,helpers,partials,data) {
    return "";
},"5":function(container,depth0,helpers,partials,data) {
    return "qld__top_services__header--right";
},"7":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1)) != null ? lookupProperty(stack1,"top_services") : stack1),{"name":"if","hash":{},"fn":container.program(8, data, 0),"inverse":container.program(10, data, 0),"data":data,"loc":{"start":{"line":67,"column":20},"end":{"line":71,"column":27}}})) != null ? stack1 : "")
    + "                    <p>\n                        Not the location you're looking for? <a class=\"qld__top_services__change-location qld__open-modal\" data-modaltarget=\"modal--set-location\" href=\"#\">Change location</a>\n                    </p>\n";
},"8":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <h2>Top health services in <span class=\"qld__top_services__location\">"
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1)) != null ? lookupProperty(stack1,"name") : stack1), depth0))
    + "</span></h2>\n";
},"10":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <h2>Services for <span class=\"qld__top_services__location\">"
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1)) != null ? lookupProperty(stack1,"name") : stack1), depth0))
    + "</span></h2>\n";
},"12":function(container,depth0,helpers,partials,data) {
    return "                    <p>\n                    <a class=\"qld__top_services__set-location qld__open-modal\" data-modaltarget=\"modal--set-location\" href=\"#\"><i class=\"far fa-map-marker-alt\"></i>Select location</a>\n                    </p>\n";
},"14":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<input type=\"hidden\" name=\"origin\" id=\"query-origin\" value=\""
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"latitude") : stack1), depth0))
    + ","
    + alias2(alias1(((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"longitude") : stack1), depth0))
    + "\">";
},"16":function(container,depth0,helpers,partials,data) {
    return "<input type=\"hidden\" name=\"sort\" id=\"query-sort\" value=\"prox\">";
},"18":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n            <div class=\"qld__top_services__cards\">\n                <div class=\"row\">\n                    <ul class=\"qld__card-list qld__card-list--matchheight qld__top_services__cards__list\">\n                        \n"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"dsMapFromID")||(depth0 && lookupProperty(depth0,"dsMapFromID"))||container.hooks.helperMissing).call(alias1,(depth0 != null ? lookupProperty(depth0,"datastore") : depth0),"hhs_top_services","name",{"name":"dsMapFromID","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":108,"column":32},"end":{"line":108,"column":81}}}),{"name":"with","hash":{},"fn":container.program(19, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":108,"column":24},"end":{"line":126,"column":33}}})) != null ? stack1 : "")
    + "                         <li class=\"col-xs-12 qld__card-list__footer\">\n                            <a href=\""
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"links") : depth0)) != null ? lookupProperty(stack1,"servicesAtoZ") : stack1), depth0))
    + "\" class=\"qld__cta-link qld__cta-link--view-all\">See all services</a>\n                        </li>\n                    </ul>\n                </div>\n            </div>\n\n";
},"19":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"dsMapFromID")||(depth0 && lookupProperty(depth0,"dsMapFromID"))||container.hooks.helperMissing).call(alias1,((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore")),"hhs_top_services","web_path",{"name":"dsMapFromID","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":109,"column":36},"end":{"line":109,"column":95}}}),{"name":"with","hash":{},"fn":container.program(20, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":109,"column":28},"end":{"line":125,"column":37}}})) != null ? stack1 : "");
},"20":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            \n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore"))) && lookupProperty(stack1,"hhs"))) && lookupProperty(stack1,"top_services")),{"name":"each","hash":{},"fn":container.program(21, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":111,"column":32},"end":{"line":123,"column":41}}})) != null ? stack1 : "")
    + "\n";
},"21":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                    <li class=\"col-xs-12 col-lg-4 col-md-12\">\n                                         <div class=\"qld__card qld__card__action\">\n                                            <div class=\"qld__card__inner\">\n                                                <div class=\"qld__card__content\">\n                                                    <div class=\"qld__card__content-inner\">\n                                                        <h3 class=\"qld__card__title\"><a class=\"qld__card--clickable__link\" href=\""
    + alias1(container.lambda(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"links"))) && lookupProperty(stack1,"home")), depth0))
    + "/"
    + alias1(lookupProperty(helpers,"lookup").call(alias2,blockParams[1][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":117,"column":150},"end":{"line":117,"column":180}}}))
    + "\">"
    + alias1(lookupProperty(helpers,"lookup").call(alias2,blockParams[2][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":117,"column":182},"end":{"line":117,"column":216}}}))
    + "</a></h3>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </li>\n";
},"23":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <div class=\"qld__top_services__cards\">\n                    <div class=\"row\">\n                        <ul class=\"qld__card-list qld__card-list--matchheight qld__top_services__cards__list\">\n                            <li class=\"col-xs-12 qld__card-list__footer\">\n                                <a href=\""
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"links") : depth0)) != null ? lookupProperty(stack1,"servicesAtoZ") : stack1), depth0))
    + "\" class=\"qld__cta-link qld__cta-link--view-all\">See all services</a>\n                            </li>\n                        </ul>\n                    </div>\n                </div>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "<section class=\"qld__body qld__body--alt\">\n    <div class=\"container-fluid\">\n        <div class=\"qld__top_services\">\n\n            <!--@@ Location Modal @@-->\n            <div id=\"modal--allow-geolocate\" class=\"qld__modal qld__set-location-permissions qld__modal--small\" tabindex=\"-1\">\n                <div class=\"qld__modal__underlay\">\n                </div>\n                <div class=\"qld__modal__body text-center\">\n                    <div class=\"qld__modal__body__header\">\n                        <h3 class=\"qld__modal__body__heading\">We'll use your location to give you relevant local content.</h3>\n                    </div>\n                    <div class=\"qld__modal__body__controls\">\n                        <ul class=\"qld__link-list\">\n                            <li><button class=\"qld__btn qld__cta-btn qld__modal__deny\" data-action=\"deny-location\">\n                            Block\n                        </button></li>\n                            <li><button class=\"qld__btn qld__modal__accept\" data-action=\"allow-location\">\n                            Allow\n                        </button></li>\n                        </ul>\n                        \n                        \n                    </div>\n                </div>\n            </div>\n\n            <div id=\"modal--set-location\" class=\"qld__modal qld__update-location\" tabindex=\"-1\">\n                <div class=\"qld__modal__underlay\">\n                </div>\n                <div class=\"qld__modal__body\">\n                    <div class=\"qld__modal__body__header\">\n                        <h3 class=\"qld__modal__body__heading\">Set or change your location</h3>\n                        <button class=\"qld__modal__close qld__btn\" data-action=\"close\">\n                            <span class=\"sr-only\">\n                                Close modal\n                            </span>\n                            <i class=\"fal fa-times\"></i>\n                        </button>\n                    </div>\n                    <div class=\"qld__modal__body__content\">\n                        <form class=\"qld__search qld__service-finder\">\n                            <label for=\"query-inner\" class=\"qld__search__label\">Search for location</label>\n                            <div class=\"qld__search__inner\">\n                                <input required=\"required\" id=\"query-text\" name=\"query-text\" type=\"text\"\n                                    accesskey=\"q\" placeholder=\"Enter town or postcode\" autocomplete=\"off\" class=\"qld__update-location-input qld__text-input\" title=\"location input\" value=\""
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"location") : stack1),{"name":"if","hash":{},"fn":container.program(1, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":46,"column":187},"end":{"line":46,"column":248}}})) != null ? stack1 : "")
    + "\">\n                                <div class=\"qld__search__btn\">\n                                    <button class=\"qld__btn qld__btn--search qld__update-location-btn\" type=\"submit\" data-action=\"set-location\">\n                                        <i class=\"fas fa-location\"></i>\n                                        <span class=\"qld__btn__text\">Set location</span>\n                                    </button>\n                                </div>\n                            </div>\n                        </form>\n                    </div>\n                    <div class=\"qld__modal__body__controls\">\n                        <button class=\"qld__use-current-location-btn\" data-action=\"set-current-location\">\n                            <span>Use current location</span>\n                        </button>\n                    </div>\n                </div>\n            </div>\n\n            <!--@@ Top Services Header @@-->\n            <div class=\"qld__top_services__header "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1),{"name":"if","hash":{},"fn":container.program(3, data, 0, blockParams),"inverse":container.program(5, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":65,"column":50},"end":{"line":65,"column":118}}})) != null ? stack1 : "")
    + "\">\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1),{"name":"if","hash":{},"fn":container.program(7, data, 0, blockParams),"inverse":container.program(12, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":66,"column":16},"end":{"line":79,"column":23}}})) != null ? stack1 : "")
    + "            </div>\n\n            <!--@@ Top Services Search @@-->\n            <div class=\"qld__top_services__search\">\n                <form class=\"qld__search qld__search--responsive qld__service-finder\" action=\""
    + container.escapeExpression(container.lambda(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"links"))) && lookupProperty(stack1,"servicesSearch")), depth0))
    + "\" method=\"GET\">\n                    "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"location") : stack1),"||",((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"isGeolocated") : stack1),{"name":"ifCond","hash":{},"fn":container.program(14, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":85,"column":20},"end":{"line":85,"column":209}}})) != null ? stack1 : "")
    + "\n                    "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"location") : stack1),"||",((stack1 = (depth0 != null ? lookupProperty(depth0,"userLocation") : depth0)) != null ? lookupProperty(stack1,"isGeolocated") : stack1),{"name":"ifCond","hash":{},"fn":container.program(16, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":86,"column":20},"end":{"line":86,"column":157}}})) != null ? stack1 : "")
    + "\n                    <label for=\"query-inner\" class=\"qld__search__label\">Search query</label>\n                    <div class=\"qld__search__inner\">\n                        <input required=\"\" name=\"query\" id=\"query\" title=\"Search query\" type=\"text\" accesskey=\"q\" value=\"\" placeholder=\"Search by services, hospital or location\" class=\"qld__text-input query\" autocomplete=\"off\">\n                        <div class=\"qld__search__btn\">\n                            <button class=\"qld__btn qld__btn--search\" id=\"query-submit\" type=\"submit\" autocomplete=\"off\">\n                                <span class=\"qld__btn__icon\"></span>\n                                <span class=\"qld__btn__text\">Search</span>\n                            </button>\n                        </div>\n                    </div>\n                </form>\n                <div id=\"search-results-instant\"></div>\n            </div>\n\n            <!--@@ Top Services Cards @@-->\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs") : stack1)) != null ? lookupProperty(stack1,"top_services") : stack1),{"name":"if","hash":{},"fn":container.program(18, data, 0, blockParams),"inverse":container.program(23, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":102,"column":12},"end":{"line":144,"column":19}}})) != null ? stack1 : "")
    + "\n        </div>\n    </div>\n</section>";
},"useData":true,"useBlockParams":true}