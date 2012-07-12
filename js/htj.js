$(document).ready(function() {
  $('select[name="status"]').change( function() {
    $.ajax({
      url: "http://localhost/Htj/index.php/jogadores/setStatus",
      type: "post",
      data: { status: $("#status").val(), playerID: "2" }
    }).done(function(data) {
      alert(data);
    })
    .fail(function() {
      alert("NOP");
    })
  });
  $("#newT").click(function() {
    alert("TESTE");
  });
});
