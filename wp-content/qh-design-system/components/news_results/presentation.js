{"1":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "    <ul class=\"qld__news-results\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"results") : depth0),{"name":"each","hash":{},"fn":container.program(2, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":3,"column":8},"end":{"line":40,"column":17}}})) != null ? stack1 : "")
    + "    </ul>\n";
},"2":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.hooks.helperMissing, alias3=container.lambda, alias4=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "            <li class=\"qld__news-results__item "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias2).call(alias1,(depth0 != null ? lookupProperty(depth0,"rank") : depth0),"===",1,{"name":"ifCond","hash":{},"fn":container.program(3, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":4,"column":47},"end":{"line":4,"column":115}}})) != null ? stack1 : "")
    + "\">\n                <div\n                    class=\"qld__news-results__image\"\n                    style=\"background-image: url("
    + alias4(alias3(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"image") : stack1), depth0))
    + ")\"\n                ></div>\n                <div class=\"qld__news-results__details\">\n                    <span class=\"qld__news-results__date\">"
    + alias4((lookupProperty(helpers,"formatDate")||(depth0 && lookupProperty(depth0,"formatDate"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"datePublished") : stack1),"j F Y",{"name":"formatDate","hash":{},"data":data,"loc":{"start":{"line":10,"column":58},"end":{"line":13,"column":26}}}))
    + "</span>\n                    <h2 class=\"qld__news-results__title\">\n                        <a href=\""
    + alias4(alias3(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"canonicalURL") : stack1), depth0))
    + "\">"
    + alias4(((helper = (helper = lookupProperty(helpers,"title") || (depth0 != null ? lookupProperty(depth0,"title") : depth0)) != null ? helper : alias2),(typeof helper === "function" ? helper.call(alias1,{"name":"title","hash":{},"data":data,"loc":{"start":{"line":15,"column":60},"end":{"line":15,"column":69}}}) : helper)))
    + "</a>\n                    </h2>\n                    <div\n                        class=\"qld__news-results__summary qld__abstract\"\n                    >\n                        "
    + ((stack1 = alias3(((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"c") : stack1), depth0)) != null ? stack1 : "")
    + "\n                    </div>\n"
    + ((stack1 = (lookupProperty(helpers,"ifAny")||(depth0 && lookupProperty(depth0,"ifAny"))||alias2).call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"topic") : stack1),((stack1 = (depth0 != null ? lookupProperty(depth0,"metaData") : depth0)) != null ? lookupProperty(stack1,"location") : stack1),{"name":"ifAny","hash":{},"fn":container.program(5, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":22,"column":20},"end":{"line":37,"column":30}}})) != null ? stack1 : "")
    + "                </div>\n            </li>\n";
},"3":function(container,depth0,helpers,partials,data) {
    return "qld__news-results__item--featured";
},"5":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <div class=\"qld__news-results__tags\">\n                            <ul class=\"qld__tag-list\">\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"listMetadata") : depth0)) != null ? lookupProperty(stack1,"topic") : stack1),{"name":"each","hash":{},"fn":container.program(6, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":25,"column":32},"end":{"line":29,"column":41}}})) != null ? stack1 : "")
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"listMetadata") : depth0)) != null ? lookupProperty(stack1,"location") : stack1),{"name":"each","hash":{},"fn":container.program(6, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":30,"column":32},"end":{"line":34,"column":41}}})) != null ? stack1 : "")
    + "                            </ul>\n                        </div>\n";
},"6":function(container,depth0,helpers,partials,data) {
    return "                                    <li>\n                                        <div class=\"qld__tag\">"
    + container.escapeExpression(container.lambda(depth0, depth0))
    + "</div>\n                                    </li>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"results") : depth0),{"name":"if","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":42,"column":7}}})) != null ? stack1 : "");
},"useData":true}