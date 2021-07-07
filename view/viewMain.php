<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="public/css/main.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <title>Main</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="left-container">

          <div class="titre-page-container">
            <h5>Accueil</h5>
          </div>
          <div class="tweet-container">
            <div class="tweet-left-container">
              <div class="write-a-tweet">

                <p class="quote">Quoi de neuf ?</p>
              </div>
            </div>
            <div class="tweet-right-container">
              <div class="tweeter-input">
                <form action="" method="post">
                  <input type="text" id="comment2" name="comment2" placeholder="Tweeter ici">
                    <input style="display:none" id="tab1" type="text" name="tab1" value="">
                    <input style="display:none" id="tab2" type="text" name="tab2" value="">
                    <input id="new" name="new" type="submit" value="je partage mon tweet" />
                  </form>
              </div>
            </div>
          </div>
          <div class="contain-tweet">
          </div>
        </div>
      </div>

        <div class="col-3">
          <div class="container-right">

          <div class="Main-logo">
            <img src="public/img/logo.png" alt="no picture"/>
          </div>

          <div class="input-icone">
     <input type="text" placeholder="Recherche Tweet académie"><i class="fas fa-search"></i></div>

          <nav>
            <ul>
              <div class="btn-nav">
                <li><a href="#"><i class="fas fa-home">&nbsp;&nbsp;&nbsp;&nbsp;</i>Accueil</a></li>
              </div>
              <div class="btn-nav">
              <li><a href="index.php?action=explore"><i class="fas fa-hashtag">&nbsp;&nbsp;&nbsp;&nbsp;</i>Explorer</a></li>
            </div>
            <div class="btn-nav">
              <li><a href="#"><i class="far fa-bell">&nbsp;&nbsp;&nbsp;&nbsp;</i>Notifications</a></li>
            </div>
              <div class="btn-nav">
              <li><a href="index.php?action=sendmessage"><i class="far fa-envelope">&nbsp;&nbsp;&nbsp;</i>Messages</a></li>
            </div>
              <div class="btn-nav">
              <li><a href="index.php?action=profil"><i class="far fa-user">&nbsp;&nbsp;&nbsp;&nbsp;</i>Profil</a></li>
            </div>
            </ul>
          </nav>

          <div class="Button-left">
            <button type="button" class="btn btn-blue2">Tweeter</button>
          </div>

          <div class="Container-second-button">
            <div class="Second-left-button">
              <div class="dote-img">
                  <div class="item2">
            				<a href="#openModal2"><i class="fas fa-ellipsis-h"></i></div></a>

                <!--Modal item 2-->
            <div id="openModal2" class="modal-item-2">
              <div>
                <a href="#close" title="Close" class="fermer-item1">
                  <i class="fa fa-times fa-3x"></i>
                </a>
                <div class="modal-item2">
                <!-- Ici le contenu de la ModalPage -->
                <header>
                  <h6>Déconnexion</h6>
                </header>

                <div class="btn-deconnexion">
                  <div class="stay-btn">
                    <a href="#" target="_blank">Rester</a>
                  </div>
                  <div class="out-btn">
                    <a href="#" target="_blank">Déconnexion</a>
                  </div>
                </div>

                </div>
              </div>
            </div>

              </div>
              <div class="username">
                <p>@Morgantln</p>
              </div>

            </div>
          </div>

        </div>
          </div>
      </div>
      <input style="display:none" id="tab3" type="text" name="tab3" value=" <?php echo $_SESSION['pseudo']  ?>">
      <input style="display:none" id="tab4" type="text" name="tab3" value=" <?php echo $_SESSION['ID']  ?>">
      <script type="text/javascript">
        $(document).ready(function(){
          var hbool = false;

          $("#new").on("hover", function(e) {
            var tab1 = [];
            var tab2 = [];
            var index = 0;
            var res = $("#comment2").val().split(" ");
            for(var i=0; i<res.length; i++){
              var have1 = res[i].lastIndexOf("@");
              if (have1 == 0)
              {
                tab1[index] = res[i];
                index++;
              }
            }
            index = 0;
            res = $("#comment2").val().split(" ");
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




            $.ajax({
                url:"controller/controllerDysplayTweet.php",
                dataType: "json",
                data: {name: $('#tab3').val(), id: $('#tab4').val()},
                type:'POST',
                success:function(msg){
                  var i = 1;

                  tabtweet = msg;
                  while (tabtweet[i]) {
                    $('<div class="tweet tweet'+i+'"></div>').prependTo('.contain-tweet'); // TODO: change body by la ou vont les tweet
                    $('<div class="names names'+i+'"></div>').appendTo('.tweet'+i);
                    $('<a href="#"><div class="pseudo pseudo'+i+'">'+tabtweet[0][0]+ '</div></a>').appendTo('.names'+i);
                    $('<a href="#"><div class="username username'+i+'">'+tabtweet[i][2]+'</div></a>').appendTo('.names'+i);

                    $('<p class="text-contain text-contain'+i+'">'+tabtweet[i][1]+ '</p>').appendTo('.tweet'+i);

                    $('<div class="link-tweet link-tweet'+i+'"></div>').appendTo('.tweet'+i);

                    $('<div class="comment"><i class="far fa-comment"></i></div>').appendTo('.link-tweet'+i);
                    $('<div class="retweet"><i class="fas fa-retweet"></i></div>').appendTo('.link-tweet'+i);
                    $('<div class="like"><i class="far fa-heart"></i></div>').appendTo('.link-tweet'+i);
                    $('<div class="share"><i class="far fa-share-square"></i></div>').appendTo('.link-tweet'+i);

                    i++;
                  }
                  $(".text-contain").each( function(e) {
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
  </body>


</html>
