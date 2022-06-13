<?php
  require_once 'header_logged.php'
?>

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">

            <ol>
              <li><a href="form-de-feedback.php">Home</a></li>
              <li>Formulario de feedback</li>
            </ol>
            <h2>Pagamento:</h2>

          </div>
  </section>
  <!-- End Breadcrumbs -->


  <div class="wrapper">
    <div class="container">
        <article class="part card-details">
            <h1>
                Credit Card Details
            </h1>
            <form action="form-de-feedback-2.php" if="cc-form" autocomplete="off">
                <div class="group card-number">
                    <label for="first">Card Number</label>
                    <input type="text" id="first" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                    <input type="text" id="second" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                    <input type="text" id="third" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                    <input type="text" id="fourth" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                </div>
                <div class="group card-name">
                    <label for="name">Name On Card</label>
                    <input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname">
                </div>
                <div class="group card-expiry">
                    <div class="input-item expiry">
                        <label for="expiry">Expiry Date</label>
                        <input type="text" class="month" id="expiry" placeholder="02">
                        <input type="text" class="year" id="" placeholder="2017">
                    </div>
                    <div class="input-item csv">
                        <label for="csv">CSV No.</label><a href="#what">?</a>
                        <input type="text" class="csv">
                    </div>
                </div>
                <div class="grup submit-group">
                    <span class="arrow"></span>
                    <input type="submit" class="submit" value="Continue to payment">
                </div>
            </form>
        </article>
    </div>
</div>




<?php
    require_once 'footer.php'
?>