<style >
  form {
    background-color: darkblue;
    color: white;
    font-family: 'Calibri';
    margin: auto;
    width: 50%;
    padding: 1rem;
    border-radius: 2rem;
    text-align: left;
  }

  input {
    text-align: center;
  }
</style>



 <form action="add.php" method="post">
  Nom : <input type="text" name="lname"><br>
  Prénom : <input type="text" name="fname"><br>
  Email : <input type="text" name="mail"> ex. : email@mail.com<br>
  Date de Naissance : <input type="text" name="date"> JJ/MM/YYYY<br>
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
               </select><br>
  Session : <select name="ses">
              <option> Technoport Esch-Belval</option>
              <option> Piennes</option>
            </select><br>

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
          </select><br>
          <br>
      <input type="submit" value="Submit">
 </form>
