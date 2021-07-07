<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="public/css/test.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="public/js/tweet.js"></script>
    <style type="text/css">
      .tweet{
        width: 500px;
        background-color: lightgrey;
        display: block;
        margin: auto;
        padding-left: 50px;
      }
        .link-tweet{
          display: flex;
        }
        .link-tweet p{
          padding-right: 30px;
        }
    </style>
    <title>Main</title>
  </head>
  <body>
  <form action="" method="post">
        <div>
          <h2></h2>
        </div>
        <div>
          <label for="comment">Ecrivez vortre tweet</label><br />
          <textarea id="comment" type="textarea" rows="9" cols="33" maxlength="150" name="comment"></textarea>
        </div>
        <div>
          <input id="tab1" type="text" name="tab1" value="">
          <input id="tab2" type="text" name="tab2" value="">

          <input id="new" name="new" type="submit" value="je partage mon tweet" />
      </div>
    </form>


    <div id="id01" class="modal">
      <span id="closewind1" onclick="document.getElementById('id01').style.display='none'" class="close" title="fermer la fenetre">×</span>
      <form id='modal-content1' class="modal-content" action="">
        <div id="container1" class="container">
          <h1>Ajout d'un @</h1>
          <label for="need1">recherche d'un @ pour votre tweet</label><br />
          <input id="need1" type="text" name="need1" value="">

          <div class="clearfix">
            <button id="cancel1" type="button" onclick="document.getElementById('id01').style.display='none'">Annuler</button>
            <button id="add1" type="button" onclick="document.getElementById('id01').style.display='none'" >Ajouter</button>
          </div>
        </div>
      </form>
    </div>


</br><a href="index.php?action=disconect">se deconnecter</a>
<input style="display:none" id="tab3" type="text" name="tab3" value=" <?php echo $_SESSION['pseudo']  ?>">
<input style="display:none" id="tab4" type="text" name="tab3" value=" <?php echo $_SESSION['ID']  ?>">

  </body>

<?php // TODO: le formulaire pour ajouter le tweet ?>
    
<script type="text/javascript">
  $(document).ready(function(){
      $.ajax({
          url:"controller/controllerDysplayTweet.php",
          dataType: "json",
          data: {name: $('#tab3').val(), id: $('#tab4').val()},
          type:'POST',
          success:function(msg){
            var i = 1;

            tabtweet = msg;
            while (tabtweet[i]) {
              $('<div class="tweet tweet'+i+'"></div>').prependTo('form'); // TODO: change body by la ou vont les tweet
              $('<div class="names names'+i+'"></div>').appendTo('.tweet'+i);

              $('<div class="pseudo pseudo'+i+'"><a>'+tabtweet[0][0]+ '</a></div>').appendTo('.names'+i);
              $('<div class="text-contain text-contain'+i+'"></div>').appendTo('.names'+i);
              $('<div class="text text'+i+'">'+tabtweet[i][1]+ '</div>').appendTo('.text-contain'+i);


              $('<p class="date date'+i+'">'+tabtweet[i][2]+'</p>').appendTo('.tweet'+i);
              $('<div class="link-tweet link-tweet'+i+'"></div>').appendTo('.tweet'+i);

              $('<div class="commentaire commentaire'+i+'"></div>').prependTo('.link-tweet'+i);
              $('<i class="far fa-comment fa-comment'+i+'"></i>').prependTo('.commentaire'+i);
              $('<p class="number-comment number-comment'+i+'"></p>').prependTo('.commentaire'+i);

              $('<div class="retweet retweet'+i+'"></div>').prependTo('.link-tweet'+i);
              $('<i class="fas fa-retweet fa-retweet'+i+'"></i>').prependTo('.retweet'+i);
              $('<p class="number-retweet number-retweet'+i+'"></p>').prependTo('.retweet'+i);

              $('<div class="like like'+i+'"></div>').prependTo('.link-tweet'+i);
              $('<i class="far fa-heart fa-heart'+i+'"></i>').prependTo('.like'+i);
              $('<p class="number-like number-like'+i+'"></p>').prependTo('.like'+i);

              $('<div class="share share'+i+'"></div>').prependTo('.link-tweet'+i);
              $('<i class="far fa-share-square fa-share-square'+i+'"></i>').prependTo('.share'+i);
              i++;
            }
            $(".text").each( function(e) {
                var tab1 = [];
                var tab2 = [];
                var index = 0;
                var res = $(this).html().split(" ");
                for(var i=0; i<res.length; i++){
                  var have1 = res[i].lastIndexOf("@");
                  var have2 = res[i].lastIndexOf("#");
                  if (have1 == 0 || have2 ==0)
                  {
                    tab1[index] = '<a href="#">' + res[i] + '</a>';
                    tab2[index] = res[i];
                    index++;
                  //  $("#comment").val(str);
                  }
                }
                for(var i=0; i< index; i++){
                  $(this).html($(this).html().replace(tab2[i], tab1[i]));
                }
              });
          },
          dataType:"json"
      });
  });
</script>
</html>
