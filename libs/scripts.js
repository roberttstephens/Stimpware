
function toggleDiv(divId) {
  $('.mainContent').hide();
  $('.mainContent#'+divId).show();
}
$(document).ready(function () {
  $('.mainContent#home').show();
  $('.mainContent#home').load('ajaxLoad.php')
  });
/* below is the jquery. the "a href onlick" is used above
  $('#home').click(function (){
      $('.mainContent').hide();
      $('.mainContent#home').show();
    });
  $('#about').click(function (){
      $('.mainContent').hide();
      $('.mainContent#about').show();
    });
  $('#contact').click(function (){
      $('.mainContent').hide();
      $('.mainContent#contact').show();
    });
  });
*/

//function toggleDiv(divId) {
//   $("#"+divId).toggle();
//}
//this is a change
