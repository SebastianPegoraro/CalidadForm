$(document).ready(function(){

  $("button.plus").on("click",function(){

  $("div:last").after("<div class=item><p>Title</p></div>");
      })
  })