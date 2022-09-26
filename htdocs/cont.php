<div class="container">
  <form action="action_page.php">

    <label for="fname">nome</label>
    <input type="text" id="fname" name="Nome" placeholder="Your name..">

    <label for="lname">sobrenome</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">pais</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Brasil</option>
    </select>

    <label for="subject">Objetivo do contato</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>