$(document).ready(function () {
    $.fn.dataTable.ext.order['dom-select'] = function (settings, col) {
        return this.api().column(col, { order: 'index' }).nodes().map(function (td, i) {
            return $('select', td).val()
        })
    }
})
let tb1 = new DataTable('#user_management', {
    'columnDefs': [
        {
            "orderable": false, "targets": [0, 4],
        }, {
            "orderDataType": "dom-select",
            "orderable": true,
            "targets": 3

        }
    ],
    'order': [[1, 'asc']]
}),
    tb2 = new DataTable('#comment_management', {
        'columnDefs': [
            {
                "orderable": false, "targets": [0, 3],
            }
        ],
        'order': [[1, 'asc']]
    }),
    tb3 = new DataTable('#blog_management', {
        'columnDefs': [
            {
                "orderable": false, "targets": [0, 4],
            }
        ],
        'order': [[1, 'asc']]
    }),
    tb4 = new DataTable('#product_management', {
        'columnDefs': [
            {
                "orderable": false, "targets": [0, 3],
            }
        ],
        'order': [[1, 'asc']]
    }),
    sn = (tbs) => {
        tbs.forEach(tb => {
            tb.on('order.dt search.dt', function () {
                tb.column(0, {}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                })
            }).draw();
        })

    }
sn([tb1, tb2, tb3, tb4]);