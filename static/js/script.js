// function setEqualHeight(columns){
//     var tallestcolumn = 0;
//     columns.each(
//         function(){
//             currentHeight = $(this).height();
//             if(currentHeight > tallestcolumn){
//                 tallestcolumn = currentHeight;
//             }
//         }
//     );
//     columns.attr('style','height:' + tallestcolumn + 'px');
// }
// $(document).ready(function() {
//     setEqualHeight($(".portfolio_item img"));
// });

$(document).ready(function () {
    $('.header_burger').click(function (event) {
        $('.header_burger,.header_menu').toggleClass('active');
        $('body').toggleClass('lock')
    });
});                       

var acc = document.getElementsByClassName("faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var faq_body = this.querySelector('.faq_body');
    if (faq_body.style.maxHeight){
        faq_body.style.maxHeight = null;
    } else {
        faq_body.style.maxHeight = faq_body.scrollHeight + "px";
    } 
  });
}