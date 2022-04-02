

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :
      </label>
      <input  type="text"  id="nom"  name="user_name" >
    </div>
   

    <div>
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="user_surname" > 
    </div>
    


    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" >
    </div>
    <div>
        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="user_phone"
        pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
        required>
    </div>

    <div>
        <label for="subject">Choose an aswer:</label>
        <select name="answer" id="subject">
            <option value="">--Please choose an option</option>
            <option value="Answer 1">Answer 1</option>
            <option value="Answer 2">Answer 2</option>
            <option value="Answer 3">Answer 3</option>
            <option value="Answer 4">Answer 4</option>
        </select>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" ></textarea>
      <span class="error"> </span>
    </div>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
    <style>
        form {
            margin: 0;
            width: 400px; 
            padding: 1em; 
            border: 1px solid #CCC;
            border-radius: 1em;
        }
        form div + div {
            margin-top: 1em;
        }
        label {
            display: inline-block;
            width: 90px;
            text-align: right;
        }
        input, textarea {
            font: 1em sans-serif;
            width: 300px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            border-color: #000;
        }
        textarea {
            vertical-align: top;
            height: 5em; 
        }
        .button {
            padding-left: 90px;
        }
        button {
            margin-left: .5em;
        }
    </style>
  
</body>
</html>




