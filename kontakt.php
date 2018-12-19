<?php include("header.php"); ?>

<div class="bg animated fadeIn">

<h1>Kontakt</h1>

<div class="form-container">
  <form action="action_page.php">
    <label for="fname">Ime</label>
    <input type="text" id="name" name="name" placeholder="Vaše ime..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email..">

    <label for="subject">Poruka</label>
    <textarea id="subject" name="subject" placeholder="Napiši poruku.." style="height:200px"></textarea>

    <input type="submit" value="Pošalji">
  </form>
</div> 

</div>


<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>