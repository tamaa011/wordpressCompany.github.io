

var id= window.localStorage.getItem('Id');
   $(function(){
 $(".sidebar").load("nav.html");
});
$(document).ready(function () {
    var auth = localStorage.getItem("auth");

    if(auth !== "true") {
        window.location.href = 'index.html';
    }    

 $('#examplese').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ],
   "scrollX": true,
   "ajax": {
    "url": "https://immense-temple-88261.herokuapp.com/companys/all",
        "dataSrc": 'companys',
     "type": "POST"
   },
     
    "columns": [
     { "data": "CompanyName" },
     { "data": "PersonName" },
      { "data": "email" },
    { "data": "PhoneNumber" },
      { "data": "Status" },
         {
      "data": null,
        'render': function (data, type, row) {
          var id = "'"+data._id.toString()+"'";
            return '<input id="btnEdit" type="button" onclick="HallDetails(' + id +');" value="Details" />' +
            '<input id="btnEdit"  type="button" onclick="EditHalls(' + id + ')" value="Update" />' + 
            '<input id="btnEdit" type="button" onclick="DeleteHalls(' + id + ')" value="Delete" />';
                

            
        }
    }
    ]
      
  });
});

function EditHalls(id){

    localStorage.setItem("Id" , id);
    window.open("updatacompanies.html");}
   
  
     function DeleteHalls(id){
  $.ajax({
    url: "https://immense-temple-88261.herokuapp.com/companys/"+id,
    method: "Delete",
   
    beforeSend: function (xhr) {

      /* Authorization header */
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    },
    success: function (data) {
      alert(data.message);
        window.location.href = 'Listcompanies.html'
    },
       error: function (data) {
      alert(data.message);
    }
  });}
  


   function HallDetails(id){
    
     localStorage.setItem("Id" , id);

       window.open("companiesDetails.html");  
   }

  $("#logout").click(function(){
    window.localStorage.clear();
  });
