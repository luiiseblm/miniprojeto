<div style="background-color: white">
  <h2>CONTATO</h2>
  <p>Telefone:
  <a href="tel:555132182000">+55 51 3218-2000</a></p>

  <p>E-mail/Wpp:
  <a href="https://api.whatsapp.com/send?phone=555132182000" target="_blank" style="font-size:16px;font-weight:800;">+55 51 3218-2000</a>
  <form action="mensagem.php" method="post">

    <label>Nome:</label>
    <input type="text" name="nome"/><br>
    <label>E-mail:</label>
    <input type="text" name="email"/><br>
    <label>Sobre o que deseja falar?</label>
    <select name="assunto">
      <option value="Sugestão">Sugestão</option>
      <option value="Dúvida">Dúvida</option>
      <option value="Reclamação">Reclamação</option>
    </select><br>
    <label>Mensagem:</label>
    <textarea name="mensagem"></textarea><br>
    <input type="submit" value="Enviar"/>
  </form>
</div>