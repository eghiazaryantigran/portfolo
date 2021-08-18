<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>ԽՈՐԱԹԱ Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Անուն</label>
            <input type="text" name="fname" placeholder="Անուն" required>
          </div>
          <div class="field input">
            <label>Ազգանուն</label>
            <input type="text" name="lname" placeholder="Ազգանուն" required>
          </div>
        </div>
        <div class="field input">
          <label>Էլ․հասցե</label>
          <input type="text" name="email" placeholder="գրեք էլ․հասցեն" required>
        </div>
        <div class="field input">
          <label>Գաղտնաբառ</label>
          <input type="password" name="password" placeholder="Գրեք գաղտնաբառը" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Ընտրեք նկար</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Շարունակեք ԽՈՐԱԹԱԵԼ">
        </div>
      </form>
      <div class="link">Արդեն գրանցվե՞լ եք<a href="login.php">Մուտք գործել</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
