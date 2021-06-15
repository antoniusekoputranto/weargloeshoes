// $(document).ready(function () {
//     $('#dtHorizontal').DataTable({
//     "scrollX": true
//     });
//     $('.dataTables_length').addClass('bs-select');
//     });
console.log('eko');
$(window).scroll(function () {
    if ($(window).scrollTop()) {
      $(".navbar").addClass("nav-scroll");
      $(".nav-link").addClass("nav-link-scroll");
      
    } else {
      $(".navbar").removeClass("nav-scroll");
      $(".nav-link").removeClass("nav-link-scroll");
      
    }


  });