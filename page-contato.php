<?php require_once 'components/header.php'; ?>

<body id="page-contact">
  <?php require_once 'components/menu.php'; ?>

  <?php
  $url = get_the_post_thumbnail_url(null, 'post-thumbnail');
  ?>

  <main>
    <div class="cover" style="background-image: url(<?= $url ?>);">
      <div class="overlay">
        <h1>Entre em contato</h1>
      </div>
    </div>

    <section class="channels">
      <h2>Contate-nos, estamos ansiosos para conversar com você!</h2>
      <div class="divider"></div>

      <div class="channels-container">
        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/meeting-point.png" alt="">
          <h3>Onde estamos</h3>
          <p><?= $ENDERECO ?></p>
        </article>

        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/email.png" alt="">
          <h3>Email</h3>
          <p><?= $EMAIL ?></p>
        </article>

        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/smartphone.png" alt="">
          <h3>Telefone</h3>
          <p><?= $WHATSAPP ?></p>
          <p><?= $TELEFONE ?></p>
        </article>
      </div>
    </section>

    <section class="form-contact">
      <h2>Escreva-nos!</h2>
      <div class="divider"></div>

      <form action="" method="POST" autocomplete="on" class="contact-form">
        <div class="input-block-col-3">
          <div class="input-block">
            <label for="USER_NAME">Nome</label>
            <input type="text" name="USER_NAME" id="" placeholder="Nome completo" required>
          </div>

          <div class="input-block">
            <label for="USER_EMAIL">Email</label>
            <input type="email" name="USER_EMAIL" id="" placeholder="email@exemplo.com" required>
          </div>

          <div class="input-block">
            <label for="USER_TEL">Telefone</label>
            <input type="tel" name="USER_TEL" id="" placeholder="99 999999999" required>
          </div>
        </div>

        <div class="input-block-col-3">
          <div class="input-block">
            <label for="USER_CONTACT_FORM">Como prefere ser contatado? </label>
            <select name="USER_CONTACT_FORM" id="" required>
              <option value="-1" selected disabled>Selecione uma opção</option>
              <option value="Whatsapp">Whatsapp</option>
              <option value="SMS">SMS</option>
              <option value="Telefone">Telefone</option>
              <option value="Email">Email</option>
            </select>
          </div>

          <div class="input-block">
            <label for="QUESTION">Como nos conheceu?</label>
            <select name="QUESTION" id="" required>
              <option value="-1" selected disabled>Selecione uma opção</option>
              <option value="Google">Google</option>
              <option value="Facebook">Facebook</option>
              <option value="Instagram">Instagram</option>
              <option value="Linkedin">Linkedin</option>
              <option value="Indicação">Indicação</option>
              <option value="Eventos">Eventos</option>
              <option value="Outros">Outros</option>
            </select>
          </div>

          <div class="input-block">
            <label for="SUBJECT">Assunto</label>
            <input type="text" name="SUBJECT" id="" placeholder="Ex.: Orçamento" required>
          </div>
        </div>

        <div class="input-block">
          <label for="MESSAGE">Mensagem</label>
          <input type="text" name="MESSAGE" placeholder="Escreva aqui sua mensagem..." required>
        </div>

        <button type="submit" name="enviar">
          Enviar
          <i class="fas fa-long-arrow-alt-right"></i>
        </button>


        <?php
        if (isset($_POST['enviar'])) {
          require_once(realpath(dirname(__FILE__) . "./libs/php-mailer/PHPMailerAutoload.php"));

          $cliente_nome = $_POST['USER_NAME'];
          $cliente_email = $_POST['USER_EMAIL'];
          $cliente_telefone = $_POST['USER_TEL'];
          $cliente_forma_contato = $_POST['USER_CONTACT_FORM'];
          $como_nos_conheceu = $_POST['QUESTION'];
          $cliente_assunto = $_POST['SUBJECT'];
          $cliente_mensagem = $_POST['MESSAGE'];

          $contact_form = <<<EOF
                    <table>
                    <tr>
                        <td> Nome:  <td/>
                        <td> $cliente_nome <td/>
                    </tr>
                    <tr>
                        <td> Telefone: <td/>
                        <td> $cliente_telefone <td/>
                    </tr>
                    <tr>
                        <td> Email: <td/>
                        <td> $cliente_email <td/>
                    </tr>
                    <tr>
                        <td> Forma de contato: <td/>
                        <td> $cliente_forma_contato <td/>
                    </tr>
                    <tr>
                        <td> Como nos conheceu? <td/>
                        <td> $como_nos_conheceu <td/>
                    </tr>
                    <tr>
                        <td> Assunto: <td/>
                        <td> $cliente_assunto <td/>
                    </tr>
                    <tr>
                        <td> Messagem: <td/>
                        <td> $cliente_mensagem <td/>
                    </tr>                  
                    </table>                
EOF;

          $mail = new PHPMailer();

          $mail->IsSMTP();
          $mail->Host = "";
          $mail->Port = 25;
          $mail->SMTPAuth = true;

          $mail->Username = '';
          $mail->Password = '';

          $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));

          // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
          //$mail->SMTPDebug = 2;

          $mail->From = "";
          $mail->FromName = "";

          // Define o(s) destinatário(s) 
          $mail->AddAddress('', 'Endereço do host');
          $mail->AddAddress('', '');

          $mail->IsHTML(true);
          $mail->CharSet = 'UTF-8';

          $mail->Subject = "";

          // Corpo do email 
          $mail->Body = $contact_form;

          $enviado = $mail->Send();

          if ($enviado) {
            $disparado = true;
            echo '<p class="alert-user sucess"> Mensagem enviada com sucesso! </p>';
          } else {
            echo '<p class="alert-user error"> Falha ao enviar o email. Tente novamente em alguns minutos. </p>';
          }
        }
        ?>
      </form>
    </section>

    <?php require_once 'components/sliders/casas.php'; ?>

    <?php require_once 'components/sliders/servicos.php'; ?>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.963538726037!2d-46.4959301844894!3d-24.03235088503985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1fa0b7f16a97%3A0x14a4ab255ea7411e!2sResidencial%20EcoVila!5e0!3m2!1spt-BR!2sbr!4v1604607756740!5m2!1spt-BR!2sbr" height="450" frameborder="0" width="100%" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</body>

<?php require_once 'components/footer.php'; ?>