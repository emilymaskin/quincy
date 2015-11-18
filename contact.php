<?php include('header.php'); ?>

      <div class="text">
        <p id="contact_form">Send us a note, or give us a call at 917.763.1662</p>
        <form action="mail.php" method="post" class="contact">
          <label for="name">name</label>
          <input type="text" id="name" name="name" />
          <label for="name">e-mail</label>
          <input type="text" id="email" name="email" />
          <label for="msg">message</label>
          <textarea id="msg" name="msg" rows="8"></textarea>
          <input type="submit" value="Send" class="button" />
        </form>
      </div>
    </div>
  </body>
</html>