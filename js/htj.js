$(document).ready(function() {

  $('select[name="status"]').change( function() {
    $.ajax({
      url: "/jogadores/setStatus",
      type: "post",
      data: { status: $("#status").val(), playerID: $('#playerID').val() }
    }).done(function(data) {
      if ( data != 1 ) {
        $('#show_error').html("ERRO AO ALTERAR O STATUS DO JOGADOR");
      } else {
        $('#show_error').html("");
      }
    })
  });

  // Date Jquery
  $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });

});
