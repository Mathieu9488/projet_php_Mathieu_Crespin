<div class="containeur">
  <form action="#" method="post">
    <h1>Formulaire de connexion</h1>
    <label for="username"></label>
    <input type="email" id="username" name="email" placeholder="Email" required><br><br>
    <label for="password"></label>
    <input type="password" id="password" name="mdp" placeholder="Mot de passe" required><br><br>
    <button id="button">Se connecter</button>
    <div class="create-account">
      <p>Pas de compte ?<a href="inscription.html">&nbsp;&nbsp;Créer un compte</a></p>
    </div>
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

  input[type="email"],
  input[type="password"] {
    width: 70%;
    margin-left: 40px;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #454d54;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
  }

  button {
    width: 60%;
    margin-left: 65px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #010118;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.2s ease-in-out;
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

  #username {
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