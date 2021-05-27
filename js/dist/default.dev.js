"use strict";

$('#usuariobutton').click(function () {
  $("#usuariosid").toggle("slow");
});
$('#gruposbuttom').click(function () {
  $("#gruposid").toggle("slow");
});
$('.nav-link').mouseover(function () {
  $(this).addClass('active');
});
$('.nav-link').mouseout(function () {
  $(this).removeClass('active');
});