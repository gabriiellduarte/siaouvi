<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <form action={{route('dashboard')}} method="get" class="ouvidoria-form">
      <label for="email">Email:</label>
      <input type="email" placeholder="Digite seu email" id="email" name="email" class="form-input" required>
      <label for="password">Senha:</label>
      <input type="password" placeholder="Digite sua senha" id="password" name="password" class="form-input" required>
      <button type="submit" class="submit-btn">Cadastrar</button>
    </form>
  </div>
</body>
</html>