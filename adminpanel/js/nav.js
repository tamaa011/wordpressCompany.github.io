$(document).ready(function () {
    var sideNavActions = JSON.parse(localStorage.getItem("sideNavActions"));
    var auth = localStorage.getItem("auth");

    if(auth === "true") {

    
$.each( sideNavActions[0].Companies, function( key, value ) {
    $(".Companieslink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});

$.each( sideNavActions[0].Persons, function( key, value ) {
    $(".PersonsLink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');
});

$.each( sideNavActions[0].Dealers, function( key, value ) {
    $(".Dealerslink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});

$.each( sideNavActions[0].Invoices, function( key, value ) {
    $(".InvoicesLink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});
    
$.each( sideNavActions[0].Purchases, function( key, value ) {
    $(".PurchasesLink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});
    
$.each( sideNavActions[0].Users, function( key, value ) {
    $(".UsersLink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});
        
$.each( sideNavActions[0].CompaniesWithUs, function( key, value ) {
    $(".CompaniesWithUsLink").append('<li class="nav-item"><a class="nav-link" href="'+ value.split(' ').join('')+'.html">'+ value + '</a></li>');

});


  $(".bars").click(function () {
    $(".main").toggleClass("custom");
      document.body.style.backgroundColor = "rgba(0, 0, 0, 0.07)";
      document.body.style.transition = "0.3s";
      document.getElementById("op").style.opacity = "0.5";
  });

      $(".gb").click(function () {
    $(".main").remove("custom");
      document.body.style.backgroundColor = "white";
        document.getElementById("op").style.opacity = "1";
        document.body.style.transition = "0.3s";
  });
    
} else {
    
    window.location.href = 'index.html';
}
});