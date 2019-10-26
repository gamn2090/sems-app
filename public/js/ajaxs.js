$(".SideBarLink").click(function(e) {
  e.preventDefault();

  var id = $(this).attr("id");

  switch (id) {
      case "SeeComments":
        var url = "Encuestas";
      break;
    case "Clients":
        var url = "ClientList";
      break;
    case "GFactura":
        var url = "InvoiceCreate";
      break;
    case "GBoleta":
        var url = "TicketCreate";
      break;
    case "GNdc":
        var url = "NdcCreate";
      break;
    case "GNdd":
        var url = "NddCreate";
      break;
    default:
      break;
  }

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });

  var request = $.ajax({
    url: url,
    type: "GET",
    dataType: "json"
  });

  request.done(function(data) {
    $("#MainContent").empty().html($(data));
  });
});
