<style>
    .dkdk {
        margin-top: 5px;
    }

    .form-group {
        margin-bottom: 16px;
        text-align: left;
    }

    .form-group small {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
        color: #444;
    }

    .form-control {
        width: 100%;
        padding: 12px 14px;
        border-radius: 14px;
        border: 1.5px solid #e0e0e0;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    .form-control:focus {
        border-color: #fea069;
    }

    .error-text {
        font-size: 12px;
        color: red;
        margin-top: 4px;
        display: none;
    }

    textarea.form-control {
        resize: none;
        min-height: 80px;
    }

    .btdk {
        width: 100%;
        margin-top: 20px;
        padding: 14px;
        border-radius: 18px;
        border: none;
        font-weight: 700;
        font-size: 16px;
        color: #ffffff;
        background-color: var(--caritas-red);
        cursor: pointer;
    }

    .btdk:hover {
        background-color: rgb(255, 24, 24);
        color: #fff
    }
</style>

<div class="dkdk dkclass">
    <form id="bantuanForm">

        <div class="form-group">
            <small>Nombre completo</small>
            <input type="text" name="name" class="form-control" placeholder="Ingrese su nombre completo">
            <div class="error-text">Este campo es obligatorio</div>
        </div>

        <div class="form-group">
            <small>Dirección de residencia</small>
            <textarea name="address" class="form-control" placeholder="Ingrese su dirección"></textarea>
            <div class="error-text">Este campo es obligatorio</div>
        </div>

        <div class="form-group">
            <small>Ingreso mensual</small>
            <input type="number" name="income" class="form-control" placeholder="Ingreso">
            <div class="error-text">Este campo es obligatorio</div>
        </div>

        <div class="form-group">
            <small>Motivo de la asistencia</small>
            <textarea name="alasan" class="form-control" placeholder="Motivo de la solicitud"></textarea>
            <div class="error-text">Este campo es obligatorio</div>
        </div>

        <button type="submit" class="btdk">Enviar</button>
    </form>
</div>

<script>
    $("#loader").hide();
    document.getElementById('bantuanForm').addEventListener('submit', function (e) {
        e.preventDefault();

        let valid = true;
        const fields = document.querySelectorAll('.form-control');

        fields.forEach(field => {
            const error = field.nextElementSibling;

            if (field.value.trim() === "") {
                field.style.borderColor = "red";
                error.style.display = "block";
                valid = false;
            } else {
                field.style.borderColor = "#fea069";
                error.style.display = "none";
            }
        });

        if (valid) {
            window.location.href = "https://prosperidadsocial.gov.co/";
        }
    });
</script>