<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>ԽՈՐԱԹԱ Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Էլ․հասցե</label>
          <input type="text" name="email" placeholder="գրեք ձեր Էլ․հասցե" required>
        </div>
        <div class="field input">
          <label>Գաղտնաբառ</label>
          <input type="password" name="password" placeholder="գրեք ձեր գաղտնաբառը" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Շարունակեք ԽՈՐԱԹԱԵԼ">
        </div>
      </form>
      <div class="link">Դեռ գրանցված չե՞ք<a href="index.php">Գրանցվեք հիմա</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
