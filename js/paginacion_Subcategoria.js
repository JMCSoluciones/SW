 // Tu script para inicializar DataTables con paginación de Bootstrap
    $(document).ready(function() {
        // Inicializa DataTables con opciones, incluyendo la paginación
        $('#table').DataTable({
            paging: true,         // Habilita la paginación
            lengthChange: false,  // Oculta el control de cambio de longitud
            searching: false,     // Deshabilita la búsqueda
            ordering: true,      // Deshabilita la ordenación
            info: false,        // Oculta la información del estado de la tabla
            pageLength: 20,  // Cantidad de registros en las vistas
            columnDefs: [
            { targets: [0, 1, 2], orderable: true },  // Columnas 'id', 'nombre' y 'categoria' son ordenables
            { targets: [3, 4], orderable: false }      // Columnas 'eliminar' no es ordenable
          ]          
                   
        });

        // Lógica para manejar la paginación personalizada
        var table = $('#table').DataTable();
        $('#prevPage').on('click', function() {
            table.page('previous').draw('page');
        });

        $('#nextPage').on('click', function() {
            table.page('next').draw('page');
        });
    });