// ***************************************************
//
//	Small explanation for the jQuery add class Toggle
//
// ***************************************************

var ItemToggle;
var ItemToggleSec;

ItemToggle = function () {
    return $("#TheItemtoggle, #ExtraToggle").click(function () {
         $("#TheItemtoggle").toggleClass("toggle-on");
         $("#ExtraToggle").toggleClass("toggle-on");
    });
};

ItemToggleSec = function () {
    return $("#ThirdItem").click(function () {
         $("#ThirdItem").toggleClass("toggle-on");
    });
};


jQuery(document).ready(function ($) {
    return ItemToggle();
});

jQuery(document).ready(function ($) {
    return ItemToggleSec();
});


// You can add more classes in one function = line 4
// But you have to make a separate function for a separate toggle.. logically ( -__- )
// When you return the function at the end, you have to return it twice in a separate function.
