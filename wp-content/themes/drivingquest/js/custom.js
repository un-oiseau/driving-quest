// $( "#country-list" )
//   .change(function () {
//     var str = "";
//     $( "select option:selected" ).each(function() {
//       str += $( this ).text() + " ";
//     });
//     $( ".selected-value" ).text( str );
//   })
//   .change();


  $(document).ready(function(){
    $( "#country-list" )
    .change(function () {
      var str = "";
      $( "select option:selected" ).each(function() {
        str += $( this ).text() + " ";
      });
      $( ".selected-value" ).text( str );
    })
  });

  .change();