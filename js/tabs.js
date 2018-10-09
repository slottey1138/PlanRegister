$("#content").find("[id = 'tab']").hide();
$("#tabs li:first").attr("id","current");
$("#content #tab1").fadeIn();

$('#tab a').click(function(e){
  e.preventDefault();
  if($(this).closest("li").attr("id") == "current"){
    return;
  }
  else {
    $("#content").find("[id = 'tab']").hide();
    $("#tabs li").attr("id","");
    $(this).parent().attr("id","current");
    $('#' + $(this).attr('name')).fadeIn();
  }
  var tab = $(this).attr("name");
  localStorage.setItem("tab", tab);
});

var currTab = localStorage.getItem("tab");
$('a[name="' + currTab + '"]').trigger("click");
