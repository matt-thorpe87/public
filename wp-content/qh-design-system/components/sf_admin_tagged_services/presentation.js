{"1":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n    <h2>Services tagged with this category</h2>\n\n    <!--@@ Delete Modal @@-->\n    <div id=\"modal-tagged-services--delete\" class=\"qld__modal qld__modal--delete\" tabindex=\"-1\">\n        <div class=\"qld__modal__underlay\">\n        </div>\n        <div class=\"qld__modal__body\">\n            <h4 class=\"qld__modal__content__heading\">Are you sure you would like to delete this document?</h4>\n            <div class=\"qld__modal__content__controls\">\n                <button class=\"qld__btn qld__cta-btn\" data-action=\"close\">\n                    No\n                </button>\n                <button class=\"qld__btn\" data-callback=\"deleteDocument\">\n                    Yes\n                </button>\n            </div>\n        </div>\n        <button class=\"qld__modal__close qld__btn\" data-action=\"close\">\n            <span class=\"sr-only\">\n                Close modal\n            </span>\n            <i class=\"far fa-times-circle\"></i>\n        </button>\n    </div>\n\n    <div class=\"qld__service-finder-admin__list\">\n        \n        <table class=\"qld__table qld__table--striped datatable\">\n            <thead class=\"qld__table__head\">\n                <tr>\n                    <!--@@ One table header for each field with 'list' value of true @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"schema") : depth0)) != null ? lookupProperty(stack1,"field_definitions") : stack1),{"name":"each","hash":{},"fn":container.program(2, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":34,"column":20},"end":{"line":38,"column":29}}})) != null ? stack1 : "")
    + "                    <th class=\"qld__table__header qld__table__header--width-20 no-sort\">Actions</th>\n\n                </tr>\n            </thead>\n            <tbody class=\"qld__table__body\">\n            \n            <!--@@ Table row for each service @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"tagged_services") : stack1),{"name":"each","hash":{},"fn":container.program(5, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":46,"column":12},"end":{"line":75,"column":21}}})) != null ? stack1 : "")
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
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <tr class=\"qld__table__row\" data-document=\""
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\">\n                    <!--@@ Table cell for each service_prop with corresponding 'list' field @@-->\n"
    + ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),blockParams[0][0],{"name":"each","hash":{},"fn":container.program(6, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":49,"column":20},"end":{"line":67,"column":29}}})) != null ? stack1 : "")
    + "\n                    <td class=\"qld__table__cell qld__admin_row-actions\">\n                        <a href=\""
    + alias2(alias1(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"adminLinks"))) && lookupProperty(stack1,"view")), depth0))
    + "?collection=services&document="
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" class=\"qld__btn qld__btn--dark\" title=\"View\"><i class=\"fas fa-eye\"></i></a>\n                        <a href=\""
    + alias2(alias1(((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"adminLinks"))) && lookupProperty(stack1,"form")), depth0))
    + "?collection=services&document="
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" class=\"qld__btn\" title=\"Edit\"><i class=\"fas fa-edit\"></i></a>\n                        <button class=\"qld__btn qld__btn--error qld__admin--delete qld__open-modal\" data-collection=\"services\" data-document=\""
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" data-modaltarget=\"modal-tagged-services--delete\" title=\"Delete\"><i class=\"fas fa-trash\"></i></button>\n                    </td>\n                </tr>   \n";
},"6":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(alias1,lookupProperty(helpers,"lookup").call(alias1,((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"field_definitions")),(data && lookupProperty(data,"key")),{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":50,"column":30},"end":{"line":50,"column":74}}}),{"name":"if","hash":{},"fn":container.program(7, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":50,"column":24},"end":{"line":66,"column":31}}})) != null ? stack1 : "");
},"7":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = (lookupProperty(helpers,"ifProp")||(depth0 && lookupProperty(depth0,"ifProp"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"field_definitions")),(data && lookupProperty(data,"key")),"list",{"name":"ifProp","hash":{},"fn":container.program(8, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":51,"column":28},"end":{"line":65,"column":39}}})) != null ? stack1 : "");
},"8":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                <td class=\"qld__table__cell\">\n                                    <!--@@ Usage of 'ds_query' indicates service_prop contains 1 or more datastore document IDs as the value. In this case, we transform the 'id(s)' into the corresponding 'name(s)' from the datastore collection  @@-->\n"
    + ((stack1 = (lookupProperty(helpers,"ifProp")||(depth0 && lookupProperty(depth0,"ifProp"))||container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"field_definitions")),(data && lookupProperty(data,"key")),"ds_query",{"name":"ifProp","hash":{},"fn":container.program(9, data, 0, blockParams),"inverse":container.program(16, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":54,"column":36},"end":{"line":63,"column":47}}})) != null ? stack1 : "")
    + "                                </td>\n";
},"9":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"dsMapFromID")||(depth0 && lookupProperty(depth0,"dsMapFromID"))||container.hooks.helperMissing).call(alias1,((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore")),lookupProperty(helpers,"lookup").call(alias1,lookupProperty(helpers,"lookup").call(alias1,((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"schema"))) && lookupProperty(stack1,"field_definitions")),(data && lookupProperty(data,"key")),{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":55,"column":85},"end":{"line":55,"column":129}}}),"ds_query",{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":55,"column":77},"end":{"line":55,"column":141}}}),"name",{"name":"dsMapFromID","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":55,"column":48},"end":{"line":55,"column":149}}}),{"name":"with","hash":{},"fn":container.program(10, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":55,"column":40},"end":{"line":59,"column":49}}})) != null ? stack1 : "")
    + "                                    <!--@@ Else we just print the stored value @@--> \n";
},"10":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),blockParams[4][0],{"name":"each","hash":{},"fn":container.program(11, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":56,"column":44},"end":{"line":58,"column":53}}})) != null ? stack1 : "");
},"11":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                                                "
    + container.escapeExpression(lookupProperty(helpers,"lookup").call(alias1,blockParams[1][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":57,"column":48},"end":{"line":57,"column":72}}}))
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(data && lookupProperty(data,"last")),{"name":"if","hash":{},"fn":container.program(12, data, 0, blockParams),"inverse":container.program(14, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":57,"column":72},"end":{"line":57,"column":101}}})) != null ? stack1 : "")
    + "\n";
},"12":function(container,depth0,helpers,partials,data) {
    return "";
},"14":function(container,depth0,helpers,partials,data) {
    return ",";
},"16":function(container,depth0,helpers,partials,data,blockParams) {
    return "                                    "
    + container.escapeExpression(container.lambda(blockParams[3][0], depth0))
    + "                          \n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"tagged_services") : stack1),{"name":"if","hash":{},"fn":container.program(1, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":1,"column":0},"end":{"line":80,"column":7}}})) != null ? stack1 : "");
},"useData":true,"useBlockParams":true}