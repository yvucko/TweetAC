$(document).ready(function(){
  var hbool = false;

  $("#comment").on("keydown", function(e) {
    var code = e.keyCode || e.which;
    if (code == 32) {
      hbool = false;
    }
  });

  $("#comment").on("keyup", function(e) {
    var string = $(this).val();
    var cara = $(this).val().slice(-1);
    if (cara == '#') {
      //hbool == true;
    }
    else if (cara == '@') {
    //  hbool = true;
      $('#id01').css('display', 'block');
    }
    if (hbool == true) {
    //  var n = string.lastIndexOf("@");
    //  var want = string.slice(n+1);
    //  alert(want)

    }
  });

  $("#add1").on("click", function(e) {
    var string = $("#need1").val();
    $.post(
      './view/wanna.php', // TODO: directory file a changer apres test !!!!!!!
      {
          want : string
      },
      function(data){
        if(data == 'Success'){
            alert('oki');
          }
      },
      'text'
   );
  });

  $("#new").on("hover", function(e) {
    var tab1 = [];
    var tab2 = [];
    var index = 0;
    var res = $("#comment").val().split(" ");
    for(var i=0; i<res.length; i++){
      var have1 = res[i].lastIndexOf("@");
      if (have1 == 0)
      {
        tab1[index] = res[i];
        index++;
      }
    }
    index = 0;
    res = $("#comment").val().split(" ");
    for(var i=0; i<res.length; i++){
      var have = res[i].lastIndexOf("#");
      if (have == 0)
      {
        tab2[index] = res[i];
        index++;
      }
    }
    $("#tab1").val(tab1);
    $("#tab2").val(tab2);
  });
});
