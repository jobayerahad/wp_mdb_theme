jQuery(document).ready(function(){
    jQuery(".wp-post-image").addClass("img-fluid");
    jQuery(".comment-form-comment").addClass("form-group");
    jQuery(".form-submit").addClass("text-center mt-4");
    jQuery(".navigation").addClass("justify-content-center");
    jQuery(".avatar").addClass("d-flex rounded-circle avatar z-depth-1-half mr-3");
    jQuery(".url").addClass("mt-0 font-weight-bold blue-text");
    jQuery(".nav-links").addClass("text-center");
    jQuery("#comment, #author, #email, #url").addClass("form-control");
    jQuery("#submit").addClass("btn btn-elegant btn-md waves-effect waves-light");
    jQuery(".nav-links").addClass("pagination pagination-circle pg-dark justify-content-center");
    jQuery(".page-numbers").addClass("page-link waves-effect waves-effect");
    jQuery('#comment').attr('rows', '5');
    jQuery( ".page-numbers" ).wrap( "<li class='page-item' />");
    jQuery(".current").parent().addClass("active");
    jQuery(".card a").addClass("blue-grey-text");
});