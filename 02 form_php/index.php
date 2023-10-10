<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM IN PHP</title>
</head>
<body>
    <form action="destinazione_del_form.php" method="GET">
        <fieldset>
            <label for="nome">nome di battesimo<label>
            <input  name="nome" id="nome"  type="text">
           
            <label  for="cognome" >cognome<label>
   
            <input  name="cognome" id="cognome"  type="text">

            <br>

            <input id="tennis" type="checkbox" value="tennis" name="passatempi[]"> 
            <label for="tennis">Tennis</label>  <br>
            
            <input id="teatro" type="checkbox" value="teatro" name="passatempi[]"> 
            <label for="teatro">Teatro</label>  <br>

            <input id="cinema" type="checkbox" value="cinema" name="passatempi[]"> 
            <label for="cinema">Cinema</label>  <br>
            <input type="submit">
        </fieldset>

    </form>
</body>
</html>