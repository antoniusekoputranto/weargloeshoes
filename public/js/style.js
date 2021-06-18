// $(document).ready(function () {
//     $('#dtHorizontal').DataTable({
//     "scrollX": true
//     });
//     $('.dataTables_length').addClass('bs-select');
//     });
console.log('eko');
$(window).scroll(function () {
    if ($(window).scrollTop()) {
      $("header#header").addClass("nav-scroll");
      // $(".nav-link").addClass("nav-link-scroll");
      
    } else {
      $("header#header").removeClass("nav-scroll");
      // $(".nav-link").removeClass("nav-link-scroll");
      
    }


  });