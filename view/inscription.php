<div class="containeur">
  <form action="#" method="post">
    <h1>Formulaire d'inscription</h1>
    <label for="nom"></label>
    <input type="text" id="nom" name="nom" placeholder="Nom" required><br><br>
    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="Email" required><br><br>
    <label for="password"></label>
    <input type="password" id="password" name="mdp" placeholder="Mot de passe" required><br><br>
    <label for="telephone"></label>
    <input type="tel" id="telephone" name="tel" placeholder="Numéro de téléphone" required><br><br>
    <button id="button">S'inscrire</button>
  </form>
</div>

<style>
  h1 {
    text-align: center;
  }

  form {
    margin: 0 auto;
    padding: 20px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  input[type="tel"] {
    width: 70%;
    margin-left: 35px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #454d54;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
  }

  button {
    width: 60%;
    margin-left: 60px;
    margin-top: 30px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #010118;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  button:hover {
    background-color: rgb(6, 6, 59);
    transform: scale(1.1);
    transition: all 0.3s ease-in-out;
  }

  .create-account {
    text-align: center;
    margin-top: 20px;
    margin-left: 0;
  }

  .create-account a {
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.2s ease-in-out;
  }

  .create-account a:hover {
    color: rgb(6, 6, 59);
  }

  #nom {
    margin-top: 30px;
    margin-bottom: 0px;
  }

  .containeur {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: rgba(44, 62, 80, 0.8);
    max-width: 400px;
    margin: auto;
    margin-top: 100px;
  }
</style>