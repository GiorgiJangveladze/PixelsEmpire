
function victory(){
  var win_sound = document.querySelector('.victory audio');

  win_sound.play(); 
  $(".victory").show(850);
  setInterval(function(){
      window.location.href = '/home';
  }, 2000);
}


function lose(){
  var lose_sound = document.querySelector('.lose audio');
  
  lose_sound.play(); 
  $(".lose").show(850);
    setInterval(function(){
        window.location.href = '/home';
    }, 2000);

}

function error() {toastr["warning"]("lasha!", "Warning!!")};


toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}