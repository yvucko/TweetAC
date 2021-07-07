<!DOCTYPE html>
	   <html>
	   <head>
	      <title>Messagerie</title>
	      <meta charset="utf-8" />
		  <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
			  <script src="public/js/message.js"></script>
	   </head>
	   <body>
	   <h1>Votre messagerie :</h1>
	      <form method="POST">

	         <label>Destinataire:</label>
	         
	         <input type="text" name="destinataire" id="destinataire"/>
	        
	         <textarea placeholder="Votre message" name="message" id="message"></textarea>
	        
	         <input type="submit" value="Envoyer" name="send_message" id="send" />
	      </form>
	      <br />
	      <a href="index.php?action=profil">Retour au profil</a>
	   </body>
       </html>