$(document).ready(function() {
  $('select[name="status"]').change( function() {
      alert(window.location.pathname);
  });
});
