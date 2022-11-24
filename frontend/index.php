<?php
$mail_code = "&#108;&#97;&#114;&#115;&#64;&#118;&#97;&#100;&#103;&#97;&#97;&#114;&#100;&#46;&#109;&#101;";

$quotes = array(
    "among the top 2 billion best websites of all time"
  , "one of the websites ever made"
  , "my mom says i'm special"
  , "let's-a go"
  , "graphic design is my passion"
  , "please hire me"
);

$key = array_rand($quotes);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>lars vadgaard</title>
    <meta name="description" content="Homepage of Lars Vadgaard">
    <link rel="stylesheet" href="frontend_light.css">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="frontend.js"></script>
  </head>
  <body>
    <div id="main">
      <div class="section">
        <h2>welcome to my website</h2>
        <button id="header">mystery button</button>
        <img id="drawing" src="img/drawing_light.png">
        <p>&quot;<?= $quotes[$key] ?>&quot;</p>
      </div>
      <div class="section">
        <h4>ALSO</h4>
        <p>
            email:
            <a href="mailto:<?= $mail_code ?>">
                <?= $mail_code ?>
            </a>
            |
            name: lars
            |
            interests: functional programming, coffee, piano, retro anime
            |
            education: m.sc. in computer science
            |
            linkedin: <a href="https://www.linkedin.com/in/larsvadgaard">link</a>
            |
            github: <a href="https://github.com/vadgaard">link</a>
            |
            youtube: <a href="https://www.youtube.com/channel/UCzcxIx7IK_LSjU-D5ohKLLg">link</a>
        </p>
      </div>
      <div class="section">
        <h4>OTHER STUFF</h4>
        <p><a href="https://rev.vadg.io" target="_blank">rl/srl playground</a></p>
        <p><a href="https://github.com/vadgaard/AP-Exam" target="_blank">ap exam solution</a></p>
        <p><a href="misc/resume.pdf" target="_blank">resume.pdf</a></p>
      </div>
      <div class="section">sincerely,<img src="img/signature_light.png" style="width: 30%">lars vadgaard</div>
    </div>
  </body>
</html>

<!-- If you are a recruiter; I'm so sorry -->
<!-- Sincerely, Lars -->
