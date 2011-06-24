
/* below used onclick="toggleDiv('contact')" in the ahref tag
 * function toggleDiv(divId) {
 *   $('.mainContent').hide();
 *   $('.mainContent#'+divId).show();
 *   }
 *
 *
*/
$(document).ready(function () {
  $('#register').submit(function () {
    $.post('libs/ajaxPost.php', $('#register').serialize(), function(data) {
        alert(data);
    });
//      $('.mainContent#home').load('libs/ajaxLoad.php')
      return false;
  });
  $('#home').submit(function () {
    $('.mainContent#load').load('libs/ajaxLoad.php');
    return false;
 
  });
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
