// Add Your Scripts here
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName("needs-validation");
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            event.preventDefault();
            if (form.checkValidity() === false) {
              event.stopPropagation();
            } else {
              //Obtener valores del formulario
              let nombre = document.getElementById("nombre").value,
                email = document.getElementById("email").value,
                mensaje = document.getElementById("mensaje").value;
              //Crear un FormData y agregar los datos
              // let data = new FormData();
              // data.append("nombre", nombre);
              // data.append("email", email),
              // data.append("mensaje", mensaje)
              //Ejecutar AJAX
              let xhr = new XMLHttpRequest();
              xhr.open(
                "POST",
                "http://localhost/bootstrap_projects/project_01/Bootstrap4StartTemplate/mail.php",
                true
              );
              xhr.setRequestHeader(
                "Content-Type",
                "application/x-www-form-urlencoded"
              );
              xhr.onload = function () {
                if (xhr.status === 200) {
                  let respuesta = JSON.parse(xhr.responseText);
                  //Pedimos false porque no tenemos servidor para enviar mails
                  if (respuesta.respuesta == false) {
                    let divEnviado = document.createElement("div");
                    divEnviado.classList.add(
                      "alert",
                      "alert-success",
                      "mt-4",
                      "text-center"
                    );
                    divEnviado.appendChild(
                      document.createTextNode("Se envió correctamente")
                    );
                    document.querySelector("form").appendChild(divEnviado);
                    console.log("Se envio correctamente");
                    setTimeout(() => {
                      document.querySelector(".alert").remove();
                      form.reset();
                      form.classList.remove("was-validated");
                    }, 1500);
                  }
                }
              };
              // xhr.send(data);
              xhr.send(`nombre=${nombre}&email=${email}&mensaje=${mensaje}`);
              form.classList.add("was-validated");
            }
          },
          false
        );
      });
    },
    false
  );
})();
