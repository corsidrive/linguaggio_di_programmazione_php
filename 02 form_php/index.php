<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM IN PHP</title>
</head>
<body>
    <form action="destinazione_del_form.php" method="POST">
        <fieldset>
            <legend>Dati Anagrafici</legend>
            <label for="nome">nome di battesimo<label>
            <input  name="nome" id="nome"  type="text">
           
            <label  for="cognome" >cognome<label>
   
            <!-- $_POST | $_GET['nome']  = "Mario" -->
            <input  name="cognome" id="cognome"  type="text">
        </fieldset>
            
        
        <fieldset>    
            <legend>Passatempi</legend>
            <input id="tennis" type="checkbox" value="tennis" name="passatempi[]"> 
            <label for="tennis">Tennis</label>  <br>
            
            <input id="teatro" type="checkbox" value="teatro" name="passatempi[]"> 
            <label for="teatro">Teatro</label>  <br>

            <input id="cinema" type="checkbox" value="cinema" name="passatempi[]"> 
            <label for="cinema">Cinema</label>  <br>
        </fieldset>

        <fieldset>
            <legend>Materie Scolastiche</legend>
            <p>Seleziona le tue materia preverita (1 sola )</p>

            <input type="radio" id="php" value="php" name="materie_scolastiche" >
            <label for="php">Linguaggio di Programmazione  PHP</label>
            <br>

            <input type="radio" id="javascript" value="javascript" name="materie_scolastiche" >
            <label for="javascript">Linguaggio di Programmazione  Javascript</label>
            <br>

        </fieldset>
        <input type="submit">
    </form>
</body>
</html>