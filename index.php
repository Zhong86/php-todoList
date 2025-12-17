<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link href="assets/styles.css" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    <h1>Todo List Practice</h1>
    
    <div class="container">
      <form action="models/user.php" method="POST" id="login" novalidate>
        <div class="form-group">
          <label for="user">Username</label>
          <input type="text" class="form-control mb-3" id="text" name="user" placeholder="Enter username" required>
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" class="form-control mb-3" id="pass" name="pass" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
      </form>
    </div>
    <script>
    //FORM VAliDATION
    var form = document.getElementById('login'); 
    form.addEventListener('submit', (e) => {
      e.preventDefault(); 
      form.classList.add('was-validated'); 
    }); 
    </script>
  </body>
</html>

