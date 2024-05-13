{"1":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n    <h2>HHS Content</h2>\n\n    <!--@@ Delete Modal @@-->\n    <div id=\"modal-hhs-content--delete\" class=\"qld__modal qld__modal--delete\" tabindex=\"-1\">\n        <div class=\"qld__modal__underlay\">\n        </div>\n        <div class=\"qld__modal__body\">\n            <h4 class=\"qld__modal__content__heading\">Are you sure you would like to delete this document?</h4>\n            <div class=\"qld__modal__content__controls\">\n                <button class=\"qld__btn qld__cta-btn\" data-action=\"close\">\n                    No\n                </button>\n                <button class=\"qld__btn\" data-callback=\"deleteDocument\">\n                    Yes\n                </button>\n            </div>\n        </div>\n        <button class=\"qld__modal__close qld__btn\" data-action=\"close\">\n            <span class=\"sr-only\">\n                Close modal\n            </span>\n            <i class=\"far fa-times-circle\"></i>\n        </button>\n    </div>\n\n    <div class=\"qld__service-finder-admin__list\">\n        \n        <table class=\"qld__table qld__table--striped datatable\">\n            <thead class=\"qld__table__head\">\n                <tr>\n                    <!--@@ One table header for each field with 'list' value of true @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"schema") : depth0)) != null ? lookupProperty(stack1,"field_definitions") : stack1),{"name":"each","hash":{},"fn":container.program(2, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":34,"column":20},"end":{"line":38,"column":29}}})) != null ? stack1 : "")
    + "                    <th class=\"qld__table__header qld__table__header--width-20 no-sort\">Actions</th>\n\n                </tr>\n            </thead>\n            <tbody class=\"qld__table__body\">\n            \n            <!--@@ Table row for each hhs service @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs_services") : stack1),{"name":"each","hash":{},"fn":container.program(5, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":46,"column":12},"end":{"line":83,"column":21}}})) != null ? stack1 : "")
    + "            </tbody>\n        </table>\n    </div>\n\n";
},"2":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"list") : depth0),{"name":"if","hash":{},"fn":container.program(3, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":35,"column":24},"end":{"line":37,"column":31}}})) != null ? stack1 : "");
},"3":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <th class=\"qld__table__header\">"
    + container.escapeExpression((lookupProperty(helpers,"getObject")||(depth0 && lookupProperty(depth0,"getObject"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"properties")),(data && lookupProperty(data,"key")),"title",{"name":"getObject","hash":{},"data":data,"loc":{"start":{"line":36,"column":55},"end":{"line":36,"column":105}}}))
    + "</th>\n";
},"5":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"checkIf")||(depth0 && lookupProperty(depth0,"checkIf"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"sfData"))) && lookupProperty(stack1,"hhsGroup")),"===",((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"hhs_id") : stack1),"||",((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"sfData"))) && lookupProperty(stack1,"superAdmin")),"===",true,{"name":"checkIf","hash":{},"fn":container.program(6, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":47,"column":16},"end":{"line":82,"column":28}}})) != null ? stack1 : "");
},"6":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                    <tr class=\"qld__table__row\" data-collection=\"hhs-services\" data-document=\""
    + alias2(alias1(((stack1 = blockParams[1][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\">\n                        \n                        <!--@@ Table cell for each field with corresponding 'list' attribute @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"field_definitions")),{"name":"each","hash":{},"fn":container.program(7, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":51,"column":24},"end":{"line":74,"column":33}}})) != null ? stack1 : "")
    + "\n                        <td class=\"qld__table__cell qld__admin_row-actions\">\n                            <a href=\""
    + alias2(alias1(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"adminLinks"))) && lookupProperty(stack1,"view")), depth0))
    + "?collection=hhs-services&document="
    + alias2(alias1(((stack1 = blockParams[1][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" class=\"qld__btn qld__btn--dark\" title=\"View\"><i class=\"fas fa-eye\"></i></a>\n                            <a href=\""
    + alias2(alias1(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"adminLinks"))) && lookupProperty(stack1,"form")), depth0))
    + "?collection=hhs-services&document="
    + alias2(alias1(((stack1 = blockParams[1][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" class=\"qld__btn\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>\n                            <button class=\"qld__btn qld__btn--error qld__admin--delete qld__open-modal\" data-collection=\"hhs-services\" data-document=\""
    + alias2(alias1(((stack1 = blockParams[1][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" data-modaltarget=\"modal-hhs-content--delete\" title=\"Delete\"><i class=\"fas fa-trash\"></i></button>\n                        </td>\n                    </tr>  \n";
},"7":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"list") : stack1),{"name":"if","hash":{},"fn":container.program(8, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":52,"column":28},"end":{"line":73,"column":35}}})) != null ? stack1 : "");
},"8":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <td class=\"qld__table__cell\">\n"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,lookupProperty(helpers,"lookup").call(alias1,blockParams[3][0],(data && lookupProperty(data,"key")),{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":54,"column":44},"end":{"line":54,"column":61}}}),{"name":"with","hash":{},"fn":container.program(9, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":54,"column":36},"end":{"line":71,"column":45}}})) != null ? stack1 : "")
    + "                                </td>\n";
},"9":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                        \n                                        <!--@@ Usage of 'ds_query' indicates dsValue contains 1 or more datastore document IDs as the value. In this case, we transform the 'id(s)' into the corresponding 'name(s)' from the datastore collection  @@-->\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = blockParams[2][0]) != null ? lookupProperty(stack1,"ds_query") : stack1),{"name":"if","hash":{},"fn":container.program(10, data, 0, blockParams),"inverse":container.program(20, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":57,"column":40},"end":{"line":70,"column":47}}})) != null ? stack1 : "");
},"10":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"dsMapFromID")||(depth0 && lookupProperty(depth0,"dsMapFromID"))||container.hooks.helperMissing).call(alias1,((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore")),((stack1 = blockParams[3][0]) != null ? lookupProperty(stack1,"ds_query") : stack1),"name",{"name":"dsMapFromID","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":58,"column":52},"end":{"line":58,"column":103}}}),{"name":"with","hash":{},"fn":container.program(11, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":58,"column":44},"end":{"line":66,"column":53}}})) != null ? stack1 : "")
    + "                                        <!--@@ Else we just print the stored value @@--> \n";
},"11":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifArray")||(depth0 && lookupProperty(depth0,"ifArray"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),blockParams[2][0],{"name":"ifArray","hash":{},"fn":container.program(12, data, 0, blockParams),"inverse":container.program(18, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":59,"column":48},"end":{"line":65,"column":60}}})) != null ? stack1 : "");
},"12":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),blockParams[3][0],{"name":"each","hash":{},"fn":container.program(13, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":60,"column":52},"end":{"line":62,"column":61}}})) != null ? stack1 : "");
},"13":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                        "
    + container.escapeExpression(lookupProperty(helpers,"lookup").call(alias1,blockParams[2][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":61,"column":56},"end":{"line":61,"column":80}}}))
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(data && lookupProperty(data,"last")),{"name":"if","hash":{},"fn":container.program(14, data, 0, blockParams),"inverse":container.program(16, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":61,"column":80},"end":{"line":61,"column":109}}})) != null ? stack1 : "")
    + "\n";
},"14":function(container,depth0,helpers,partials,data) {
    return "";
},"16":function(container,depth0,helpers,partials,data) {
    return ",";
},"18":function(container,depth0,helpers,partials,data,blockParams) {
    var lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                    "
    + container.escapeExpression(lookupProperty(helpers,"lookup").call(depth0 != null ? depth0 : (container.nullContext || {}),blockParams[1][0],blockParams[3][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":64,"column":52},"end":{"line":64,"column":78}}}))
    + "\n";
},"20":function(container,depth0,helpers,partials,data,blockParams) {
    return "                                        "
    + container.escapeExpression(container.lambda(blockParams[1][0], depth0))
    + "                          \n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"hhs_services") : stack1),{"name":"if","hash":{},"fn":container.program(1, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":1,"column":0},"end":{"line":88,"column":7}}})) != null ? stack1 : "");
},"useData":true,"useBlockParams":true}