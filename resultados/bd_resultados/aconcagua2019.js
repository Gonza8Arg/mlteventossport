$(document).ready(function () {
    $('#example').DataTable({
        ajax: 'bd_resultados/aconcagua2019.json',
        columns: [
            { data: 'Dorsal' },
            { data: 'Nombre' },
            { data: 'Apellido' },
            { data: 'Tiempo' },
            { data: 'Sexo' },
            { data: 'Distancia' },
            { data: 'Categoria' },
            { data: 'Pos.Gral.' },
            { data: 'Pos.Gral.Sexo' },
            { data: 'Pos.Categoria' },
            { data: 'Pais' },

        ],
    });
});