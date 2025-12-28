<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevOps Training - This is a PHP Smoke Test</title>

    <style type="text/css">
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 50px;
        background-color: #0c0a09;
        color: #ffffff;
      }

      header {
        text-align: center;
        font-size: 5rem;
      }

      .machine-details table {
        margin-top: 20px;
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        border: 1px solid #444;
      }

      .machine-details th,
      .machine-details td {
        border: 1px solid #444;
        padding: 10px;
        text-align: left;
      }

      .machine-details th {
        background-color: #222;
      }

      .machine-details td {
        background-color: #111;
        font-family: monospace;
      }

      p {
        margin-bottom: 50px;
        margin-top: 50px;
      }

      h2 {
        font-weight: normal;
        margin-bottom: 20px;
        font-size: 1.1rem;
      }

      footer {
        margin-top: 50px;
        font-size: 0.8rem;
        color: #888;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5em;
      }

      footer img {
        height: 0.8em;
        vertical-align: middle;
      }

      footer a {
        color: #888;
        text-decoration: none;
      }

      footer a:hover {
        text-decoration: underline;
      }

      footer span {
        color: #555;
      }
    </style>
  </head>
  <body>
    <header>✅</header>

    <main>
      <p>
        If you can see this page, your LAMP stack is successfully set up and
        running PHP! 🚀
      </p>

      <section class="machine-details">
        <h2>Machine Technical Information</h2>
        <table>
          <tbody>
            <tr>
              <th>Hostname</th>
              <td><?php echo gethostname(); ?></td>
            </tr>
            <tr>
              <th>Operating System</th>
              <td><?php echo php_uname('s') . ' ' . php_uname('r'); ?></td>
            </tr>
            <tr>
              <th>Server IP</th>
              <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
            </tr>
            <tr>
              <th>Architecture</th>
              <td><?php echo php_uname('m'); ?></td>
            </tr>
            <tr>
              <th>PHP Version</th>
              <td><?php echo phpversion(); ?></td>
            </tr>
            <tr>
              <th>Web Server</th>
              <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
    <footer>
      &copy;
      <?php echo date("Y"); ?>
      - <img src="logo-nn.svg" alt="Logo NN" />
      <a href="https://www.nicolasnunge.net">Nicolas NUNGE</a>
      <span>// DevOps Training Material v1.0</span>
    </footer>
  </body>
</html>
