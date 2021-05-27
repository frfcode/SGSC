"use strict";

$('#usuariobutton').click(function () {
  $("#usuariosid").toggle("fast");
});
$('#gruposbuttom').click(function () {
  $("#gruposid").toggle("fast");
});
$('#crearUsuarioButton').click(function () {
  $("#crearUsuario").show("fast");
  $("#agregarGrupo").hide("fast");
  $("#asignarGrupoUsuario").hide("fast");
  $("#HistorialAsignarGrupo").hide("fast");
  $("#UsuariosCreados").hide("fast");
  $("#eliminarUsuario").hide("fast");
});
$('#crearGrupoButton').click(function () {
  $("#agregarGrupo").show("fast");
  $("#crearUsuario").hide("fast");
  $("#asignarGrupoUsuario").hide("fast");
  $("#HistorialAsignarGrupo").hide("fast");
  $("#UsuariosCreados").hide("fast");
  $("#eliminarUsuario").hide("fast");
});
$('#asignarGrupoUsuarioButton').click(function () {
  $("#asignarGrupoUsuario").show("fast");
  $("#crearUsuario").hide("fast");
  $("#agregarGrupo").hide("fast");
  $("#HistorialAsignarGrupo").hide("fast");
  $("#UsuariosCreados").hide("fast");
  $("#eliminarUsuario").hide("fast");
});
$('#HistorialAsignarGrupoButton').click(function () {
  $("#HistorialAsignarGrupo").show("fast");
  $("#crearUsuario").hide("fast");
  $("#agregarGrupo").hide("fast");
  $("#asignarGrupoUsuario").hide("fast");
  $("#UsuariosCreados").hide("fast");
  $("#eliminarUsuario").hide("fast");
});
$('#UsuariosCreadosButton').click(function () {
  $("#UsuariosCreados").show("fast");
  $("#crearUsuario").hide("fast");
  $("#agregarGrupo").hide("fast");
  $("#asignarGrupoUsuario").hide("fast");
  $("#HistorialAsignarGrupo").hide("fast");
  $("#eliminarUsuario").hide("fast");
});
$('#eliminarUsuarioButton').click(function () {
  $("#eliminarUsuario ").show("fast");
  $("#crearUsuario").hide("fast");
  $("#agregarGrupo").hide("fast");
  $("#asignarGrupoUsuario").hide("fast");
  $("#HistorialAsignarGrupo").hide("fast");
  $("#UsuariosCreados").hide("fast");
});
$('.nav-link').mouseover(function () {
  $(this).addClass('active');
});
$('.nav-link').mouseout(function () {
  $(this).removeClass('active');
});