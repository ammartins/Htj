$(document).ready(function() {
  $('select[name="status"]').change( function() {
    $.ajax({
      url: "http://localhost/Htj/index.php/jogadores/setStatus",
      type: "post",
      data: { status: $("#status").val(), playerID: $('#playerID').html() }
    }).done(function(data) {
      if ( data != 1 ) {
        $('#show_error').html("ERRO AO ALTERAR O STATUS DO JOGADOR");
      } else {
        $('#show_error').html("");
      }
    })
  });

  $("#newT").click(function() {
    alert("TESTE");
  });
});
