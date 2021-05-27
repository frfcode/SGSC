function phoneMask() {
    var num = $(this).val().replace(/\D/g,'');
    var uno =  '(' + num.substring(0,3) + ')';
    var dos =  num.substring(3,6);
    var tres =  num.substring(6,9);
   $(this).val(uno+"-"+dos+"-"+tres)
    }
  $('[type="tel"]').keypress(phoneMask);