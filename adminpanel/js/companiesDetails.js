$(document).ready(function () {
var auth = localStorage.getItem("auth");
    if(auth !== "true") {
        window.location.href = 'index.html';
    }  
});

$(function(){
  $(".sidebar").load("nav.html");
});
$(document).ready(function(){
   var id= window.localStorage.getItem('Id');
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("name").innerHTML = myObj.companys.CompanyName;
    document.getElementById("pname").innerHTML = myObj.companys.PersonName;
    document.getElementById("email").innerHTML = myObj.companys.email;
    document.getElementById("pn").innerHTML = myObj.companys.PhoneNumber;
    document.getElementById("Offer").innerHTML = myObj.companys.Offer;
    document.getElementById("Price").innerHTML = myObj.companys.Price;
    document.getElementById("Order").innerHTML = myObj.companys.Order;
    document.getElementById("OrderD").innerHTML = myObj.companys.OrderDate;
    document.getElementById("Status").innerHTML = myObj.companys.Status;
    document.getElementById("Note").innerHTML = myObj.companys.Note;
  }
};
xmlhttp.open("POST", "https://immense-temple-88261.herokuapp.com/companys/"+id, true);
xmlhttp.send();
});
  $("#logout").click(function(){
    window.localStorage.clear();
  });