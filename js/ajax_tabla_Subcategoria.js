
        $("#formQueryCat").submit(function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe de forma convencional
              // Mostrar la imagen de carga
              $("#loadingImage").show();

            // Obtener los datos del formulario
            let formData = $(this).serialize();
            // Enviar los datos al servidor mediante AJAX
            $.ajax({
                type: "POST",
                url: "pquery_categoria_table.php",
                data: formData,
                success: function(data) {
                    // Actualizar la tabla con los resultados obtenidos
                    $("#resultadoTabla").html(data);
                    // Ocultar la imagen de carga después de que la operación haya terminado
                  $("#loadingImage").hide();
                },
                error: function() {
                  // Ocultar la imagen de carga después de que la operación haya terminado
                  $("#loadingImage").hide();
                    alert("Error al procesar la solicitud AJAX.");
                }
            });
        });

        $("#formQueryName").submit(function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe de forma convencional
            // Obtener los datos del formulario
            let formData = $(this).serialize();
            // Enviar los datos al servidor mediante AJAX
            $.ajax({
                type: "POST",
                url: "pquery_subnombre_table.php",
                data: formData,
                success: function(data) {
                    // Actualizar la tabla con los resultados obtenidos
                    $("#resultadoTabla").html(data);
                },
                error: function() {
                    alert("Error al procesar la solicitud AJAX.");
                }
            });
        });