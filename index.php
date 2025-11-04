<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IPSR College Admission Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      text-align: center;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 0;
      overflow: hidden;
    }

    h1 {
      font-weight: 700;
      font-size: 3rem;
      margin-bottom: 15px;
      letter-spacing: 1px;
    }

    p {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 0 auto 30px;
    }

    .btn-custom {
      background: linear-gradient(90deg, #ff9800, #ffc107);
      color: #212121;
      font-weight: 600;
      padding: 12px 40px;
      border-radius: 30px;
      border: none;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      display: inline-block;
    }

    .btn-custom:hover {
      background: linear-gradient(90deg, #ffc107, #ff9800);
      transform: translateY(-3px);
    }

    footer {
      position: absolute;
      bottom: 10px;
      font-size: 0.9rem;
      color: rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.2rem;
      }
      p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <main>
    <h1>Welcome to IPSR College</h1>
    <p>Empowering students to achieve excellence and shape a brighter future.<br />Your journey begins here.</p>
    <a href="#" class="btn-custom">Explore More</a>
  </main>

  <footer>© <?php echo date("Y"); ?> IPSR College | Powered by OpenShift</footer>
</body>
</html>
