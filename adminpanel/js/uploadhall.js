$(document).ready(function () {
    var auth = localStorage.getItem("auth");

    if(auth !== "true") {
        window.location.href = 'index.html';
    }    
});
$(function(){
  $(".sidebar").load("nav.html");
});
    function upload() {

      var CompanyName = $("#name").val();
      var PersonName = $("#ha").val();
      var email = $("#hd").val();
      var PhoneNumber = $("#hp").val();
      var Offer = $("#hl").val();
      var Price = $("#hla").val();
      var Order = $("#hs").val();
      var OrderDate = $("#hpn").val();
      var Status = $("#hst").val();
      var Note = $("#hno").val();

      let requestBody = {
        CompanyName: CompanyName,
        PersonName: PersonName,
        email: email,
        PhoneNumber: PhoneNumber,
        Offer: Offer,
        Price: Price,
        Order: Order,
        OrderDate: OrderDate,
        Status: Status,
        Note: Note

      }
          var $CompanyName = $("#name");
          var $PersonName = $("#hd");
          var $email = $("#hd");
          var $PhoneNumber = $("#hp");
          var $Offer = $("#hl");
          var $Price = $("#hla");
          var $Status = $("#hst");
          var CompanyName = $CompanyName.val().trim();
          var PersonName = $PersonName.val().trim();
          var email = $email.val().trim();
          var PhoneNumber = $PhoneNumber.val().trim();
          var Offer = $Offer.val().trim();
          var Price = $Price.val().trim();
          var Status = $Status.val().trim();
        
          if(CompanyName.length < 1) {
              alert("Please Fill the Company Name field");
          }else if (PersonName.length < 1) {
    alert("Please Fill the Person Name field");
  }else if (email.length < 1) {
    alert("Please Fill the Email field");
  }else if (PhoneNumber.length < 1) {
    alert("Please Fill the Phone Number field");
  }else if (Offer.length < 1) {
    alert("Please Fill the Offer field");
  }else if (Price.length < 1) {
    alert("Please Fill the Price field");
  }else if (Status.length < 1) {
    alert("Please Fill the Status field");
  } else {
              document.getElementById("submit").style.display = "none";
        document.getElementById("loading").style.display = "inline";  
      $.ajax({
        url: "https://immense-temple-88261.herokuapp.com/companys",
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',

        data: requestBody,
        success: function (data) {
          alert(data.message);
            window.location.href = 'addcompany.html'
          // CallBack(result);
        },
      error: function (data) {
          alert(data.message);
      }
      });
}

    }
  $("#logout").click(function(){
    window.localStorage.clear();
  })
