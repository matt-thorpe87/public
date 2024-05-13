{"1":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1),{"name":"if","hash":{},"fn":container.program(2, data, 0, blockParams),"inverse":container.program(18, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":3,"column":4},"end":{"line":74,"column":11}}})) != null ? stack1 : "");
},"2":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.lambda, alias3=container.escapeExpression, alias4=container.hooks.helperMissing, alias5="function", lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\n    <div class=\"qld__admin_action_header\">\n        <h1>Edit top services for "
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"name") : stack1),{"name":"if","hash":{},"fn":container.program(3, data, 0, blockParams),"inverse":container.program(5, data, 0, blockParams),"data":data,"blockParams":blockParams,"loc":{"start":{"line":6,"column":34},"end":{"line":6,"column":153}}})) != null ? stack1 : "")
    + "</h1>\n        <a class=\"qld__btn\" href=\""
    + alias3(alias2(((stack1 = (depth0 != null ? lookupProperty(depth0,"adminLinks") : depth0)) != null ? lookupProperty(stack1,"view") : stack1), depth0))
    + "?collection="
    + alias3(((helper = (helper = lookupProperty(helpers,"collection") || (depth0 != null ? lookupProperty(depth0,"collection") : depth0)) != null ? helper : alias4),(typeof helper === alias5 ? helper.call(alias1,{"name":"collection","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":7,"column":65},"end":{"line":7,"column":79}}}) : helper)))
    + "&document="
    + alias3(alias2(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\"><i class=\"fas fa-arrow-left\"></i> Back"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"schema") : depth0)) != null ? lookupProperty(stack1,"document_name") : stack1),{"name":"if","hash":{},"fn":container.program(7, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":7,"column":161},"end":{"line":7,"column":224}}})) != null ? stack1 : "")
    + "</a>\n    </div>\n\n    <div class=\"sf-admin__top-services-form\">\n\n        <div class=\"loader\">Loading...</div>\n        <p id=\"sf-admin-form__error\" class=\"qld__input--error\" tabindex=\"0\">Something went wrong. Please contact an Administrator.</p>\n        \n        <form action=\""
    + alias3(alias2(((stack1 = (depth0 != null ? lookupProperty(depth0,"adminLinks") : depth0)) != null ? lookupProperty(stack1,"view") : stack1), depth0))
    + "\" method=\"post\" class=\"qld__form--validate\" style=\"\" data-collection=\""
    + alias3(((helper = (helper = lookupProperty(helpers,"collection") || (depth0 != null ? lookupProperty(depth0,"collection") : depth0)) != null ? helper : alias4),(typeof helper === alias5 ? helper.call(alias1,{"name":"collection","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":15,"column":111},"end":{"line":15,"column":125}}}) : helper)))
    + "\" data-document=\""
    + alias3(alias2(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\">\n            \n            <div class=\"qld__form-group\">\n                \n                <label class=\"qld__label\" for=\"sf-field__services\">Select Service</label>\n\n                <p id=\"sf-admin__top-services-form__max\" "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"top_services") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),"<",6,{"name":"ifCond","hash":{},"fn":container.program(9, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":21,"column":57},"end":{"line":21,"column":152}}})) != null ? stack1 : "")
    + "><em>You have now selected the maximum number of top services</em></p>\n\n                <select\n                    class=\"qld__select\"\n                    id=\"sf-field__service\"\n                    name=\"string|service\"\n                    data-document=\""
    + alias3(alias2(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" \n                    data-rule-validtopservice=\"true\"\n\n                    "
    + ((stack1 = (lookupProperty(helpers,"ifCond")||(depth0 && lookupProperty(depth0,"ifCond"))||alias4).call(alias1,((stack1 = ((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"top_services") : stack1)) != null ? lookupProperty(stack1,"length") : stack1),">=",6,{"name":"ifCond","hash":{},"fn":container.program(11, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":30,"column":20},"end":{"line":30,"column":114}}})) != null ? stack1 : "")
    + "\n                >\n                    <option value=\"\"></option>\n"
    + ((stack1 = lookupProperty(helpers,"each").call(alias1,((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"services") : stack1),{"name":"each","hash":{},"fn":container.program(13, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":33,"column":20},"end":{"line":40,"column":29}}})) != null ? stack1 : "")
    + "                </select>\n                \n            </div>\n\n            <button id=\"sf-admin__add-service\" class=\"qld__btn \" disabled=\"disabled\"><i class=\"fas fa-plus-square\" ></i> Add to Top Services</button>\n\n            <div class=\"qld__form-group\">\n                <h4>Update Order</h4>\n                <em>Click and drag to re-order top services</em>\n                <ul id=\"sf-field__top-services\" class=\"sf-field__sortable-list\">\n"
    + ((stack1 = lookupProperty(helpers,"with").call(alias1,(lookupProperty(helpers,"dsMapFromID")||(depth0 && lookupProperty(depth0,"dsMapFromID"))||alias4).call(alias1,((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore")),"top_services","name",{"name":"dsMapFromID","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":51,"column":28},"end":{"line":51,"column":79}}}),{"name":"with","hash":{},"fn":container.program(15, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":51,"column":20},"end":{"line":55,"column":29}}})) != null ? stack1 : "")
    + "                </ul>\n                <h4>Items To Delete</h4>\n                <ul id=\"sf-field__top-services--deleted\" class=\"sf-field__sortable-list \"></ul>\n            </div>\n\n            <a class=\"qld__btn qld__btn--tertiary\" href=\""
    + alias3(alias2(((stack1 = (depth0 != null ? lookupProperty(depth0,"adminLinks") : depth0)) != null ? lookupProperty(stack1,"view") : stack1), depth0))
    + "?collection="
    + alias3(((helper = (helper = lookupProperty(helpers,"collection") || (depth0 != null ? lookupProperty(depth0,"collection") : depth0)) != null ? helper : alias4),(typeof helper === alias5 ? helper.call(alias1,{"name":"collection","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":61,"column":88},"end":{"line":61,"column":102}}}) : helper)))
    + "&document="
    + alias3(alias2(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\">Cancel</a>\n            <input type=\"submit\" class=\"qld__btn\" value=\"Save Changes\" disabled=\"disabled\"></input>\n            \n        </form>\n\n    </div>\n        \n\n";
},"3":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"name") : stack1), depth0));
},"5":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return container.escapeExpression(container.lambda(((stack1 = ((stack1 = (depth0 != null ? lookupProperty(depth0,"datastore") : depth0)) != null ? lookupProperty(stack1,"active_document") : stack1)) != null ? lookupProperty(stack1,"id") : stack1), depth0));
},"7":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return " to "
    + container.escapeExpression(container.lambda(((stack1 = (depth0 != null ? lookupProperty(depth0,"schema") : depth0)) != null ? lookupProperty(stack1,"document_name") : stack1), depth0));
},"9":function(container,depth0,helpers,partials,data) {
    return "style=\"display:none;\"";
},"11":function(container,depth0,helpers,partials,data) {
    return "disabled=\"disabled\"";
},"13":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                        <option \n                            value=\""
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"id") : stack1), depth0))
    + "\" \n                            data-friendly=\""
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"name") : stack1), depth0))
    + "\"\n                        >\n                            "
    + alias2(alias1(((stack1 = blockParams[0][0]) != null ? lookupProperty(stack1,"name") : stack1), depth0))
    + "\n                        </option>\n";
},"15":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),((stack1 = ((stack1 = ((stack1 = (data && lookupProperty(data,"root"))) && lookupProperty(stack1,"datastore"))) && lookupProperty(stack1,"active_document"))) && lookupProperty(stack1,"top_services")),{"name":"each","hash":{},"fn":container.program(16, data, 1, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":52,"column":24},"end":{"line":54,"column":33}}})) != null ? stack1 : "");
},"16":function(container,depth0,helpers,partials,data,blockParams) {
    var alias1=container.escapeExpression, alias2=depth0 != null ? depth0 : (container.nullContext || {}), lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                            <li  data-id=\""
    + alias1(container.lambda(blockParams[0][0], depth0))
    + "\" data-friendly=\""
    + alias1(lookupProperty(helpers,"lookup").call(alias2,blockParams[1][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":53,"column":73},"end":{"line":53,"column":102}}}))
    + "\"><span class=\"qld__btn qld__btn--dark\"><i class=\"fa fa-arrows-v\"></i> "
    + alias1(lookupProperty(helpers,"lookup").call(alias2,blockParams[1][0],blockParams[0][0],{"name":"lookup","hash":{},"data":data,"blockParams":blockParams,"loc":{"start":{"line":53,"column":173},"end":{"line":53,"column":202}}}))
    + "</span> <button class=\"qld__btn qld__btn--tertiary qld__admin--delete \" title=\"Delete\"><i class=\"fas fa-trash\"></i></button></li>\n";
},"18":function(container,depth0,helpers,partials,data) {
    return "    <div class=\"qld__admin_action_header\">\n        <h1>Top Services</h1>\n    </div>\n    <p>Please specify a collection/document for which you would like to add top services</p>\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data,blockParams) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"datastore") : depth0),{"name":"if","hash":{},"fn":container.program(1, data, 0, blockParams),"inverse":container.noop,"data":data,"blockParams":blockParams,"loc":{"start":{"line":1,"column":0},"end":{"line":75,"column":7}}})) != null ? stack1 : "");
},"useData":true,"useBlockParams":true}