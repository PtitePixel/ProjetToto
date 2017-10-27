<style>
  form {
    text-align: center;
    font-family: Arial;
    background-color: grey;
    border: solid black 0.2rem;
    width: 80%;
    display: block;
    margin: auto;

  }
  input {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
</style>


<form action="add.php" method="post">
  Nom : <input type="text" name="lname"><br>
  Prénom : <input type="text" name="fname"><br>
  Email : <input type="text" name="mail"><br>
  Date de Naissance : <input type="text" name="date"><br>
  Sympathie : <select name="friendly">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
               </select>
  Session : <select name="ses">
              <option> Technoport Esch-Belval</option>
              <option> Piennes</option>
            </select>

  Ville : <select name="city">
            <option> Esch-sur-Alzette</option>
            <option> Differdange</option>
            <option> Petange</option>
            <option> Luxembourg</option>
            <option> Metz</option>
            <option> Verdun</option>
            <option> Arlon</option>
            <option> Berlin</option>
            <option> Nancy</option>
            <option> Walferdange</option>
            <option> Rodange</option>
            <option> Liège</option>
            <option> Pissange</option>
            <option> Namur</option>
            <option> Bruxelles</option>
          </select>
          <br>
      <input type="submit" value="Submit">
</form>
