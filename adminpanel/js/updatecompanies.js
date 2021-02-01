   var id= window.localStorage.getItem('Id');
    $(function(){
  $(".sidebar").load("nav.html");
});
$(document).ready(function () {

var auth = localStorage.getItem("auth");
    if(auth !== "true") {
        window.location.href = 'index.html';
    }
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
            $("#CompanyName").val(myObj.companys.CompanyName);
            $("#PersonName").val(myObj.companys.PersonName);
            $("#email").val(myObj.companys.email);
            $("#PhoneNumber").val(myObj.companys.PhoneNumber);
            $("#Offer").val(myObj.companys.Offer);
            $("#Price").val(myObj.companys.Price);
            $("#Order").val(myObj.companys.Order);
            $("#OrderDate").val(myObj.companys.OrderDate);
            $("#Status").val(myObj.companys.Status);
            $("#Note").val(myObj.companys.Note);
  }
};
xmlhttp.open("POST", "https://immense-temple-88261.herokuapp.com/companys/"+id, true);
xmlhttp.send();
});

function updateHall(){
        document.getElementById("UpdateHallSubmit").style.display = "none";
        document.getElementById("loading").style.display = "inline";
      var CompanyName = $("#CompanyName").val();
      var PersonName = $("#PersonName").val();
      var email = $("#email").val();
      var PhoneNumber = $("#PhoneNumber").val();
      var Offer = $("#Offer").val();
      var Price = $("#Price").val();
      var Order = $("#Order").val();
      var OrderDate = $("#OrderDate").val();
      var Status = $("#Status").val();
      var Note = $("#Note").val();
        let requestBody = {
          CompanyName : CompanyName,
        PersonName: PersonName,
        email: email,
        PhoneNumber: PhoneNumber,
        Offer: Offer,
        Price: Price,
        Order: Order,
        OrderDate: OrderDate,
        Status: Status,
        Note: Note,
      }
      $.ajax({
        url: "https://immense-temple-88261.herokuapp.com/companys/"+id,
        type: 'PATCH',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function (xhr) {
          //xhr.setRequestHeader('file',JSON.parse( fd));
        },

        data: requestBody,
        success: function (result) {
          alert("success");
            window.location.href = 'updatacompanies.html'
          // CallBack(result);
        },
        error: function (error) {
        document.getElementById("lo").style.display = "block";
        document.getElementById("loading").style.display = "none";
          alert("error");
            window.location.href = 'updatacompanies.html'
        }
      });
}

function EditHalls(id){
       var role = JSON.parse(localStorage.getItem("role"));
       if(role === "worker") {
           alert("You can't edit this hall");
       }else if (role === "admin"){
           alert("You can't edit this hall");
       }else{
    localStorage.setItem("Id" , id);
    window.open("updatacompanies.html");}
    
  }

  $("#logout").click(function(){
    window.localStorage.clear();
  });