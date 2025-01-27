$(document).ready(function () {
  $.fn.dataTable.ext.order["dom-select"] = function (settings, col) {
    return this.api()
      .column(col, { order: "index" })
      .nodes()
      .map(function (td, i) {
        return $("select", td).val();
      });
  };
});
let tb1 = new DataTable("#user_management", {
    columnDefs: [
      {
        orderable: false,
        targets: [0,3,5],
      },
      {
        orderDataType: "dom-select",
        orderable: true,
        targets: 1,
      },
    ],
    order: [[1, "asc"]],
    ajax: {
      url: "/api/manage_users",
      type: "POST",
      dataFilter: function (data) {
        console.log(data);
        return data;
      },
    },
    processing: true,
    serverSide: true,
    columns:[
      {
        data: null,
        orderable: false,
        render: function (data, type, row, meta) {
          return meta.row + 1 + meta.settings._iDisplayStart;
        },
      },
      {
        data: "fullname",
        render: function (data, type, row) {
          return `<a href="/author/${row.id}">${data}</a>`;
        },
      },
      {
        data: "email",
        render: function (data, type, row) {
          return data;
        },
      },
      {
        data: "role",
        render: function (data, type, row) {
          return `<span class="btn small">${data}</span>`;
        },
      },
      {
        data: "date",
        render: function (data, type, row) {
          console.log('data:',data)
          let date = new Date(data);
          let day = String(date.getDate()).padStart(2, "0");
          let month = String(date.getMonth() + 1).padStart(2, "0");
          let year = date.getFullYear();
          return `${day}/${month}/${year} `;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return `<div class="btn-group" style="flex-wrap: nowrap;">
              <a href="/admin/update/${row.id}" class="btn small green">Update</a>
              <a href="#" onclick="deleteUser(event)" data-id="${row.id}" class="btn small red">Delete</a>
            </div>
            `;
        },
      },
    ],
  }),
  tb2 = new DataTable("#comment_management", {
    columnDefs: [
      {
        orderable: false,
        targets: [0, 5],
      },
    ],
    order: [[1, "asc"]],
    ajax: {
      url: "/api/manage_comments/",
      type: "POST",
      dataFilter: function (data) {
        console.log(data);
        return data;
      },
    },
    processing: true,
    serverSide: true,
    columns: [
      {
        data: null,
        orderable: false,
        render: function (data, type, row, meta) {
          return meta.row + 1 + meta.settings._iDisplayStart;
        },
      },
      {
        data: "name",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/blog/show/${row.blog_id}">${data}</a>`;
        },
      },
      {
        data: "body",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/blog/show/${row.blog_id}">${data}</a>`;
        },
      },
      {
        data: "status",
        render: function (data, type, row) {
          let action = row.status == '0' ? "pending" : "approved",
            actionText = row.status != '0' ? "Approved" : "Pending",
            actionClass = row.status != '1' ? "primary" : "";
          return `
          <a onclick="toggleComment(event)" data-id="${row.id}" href="#" class="btn small ${actionClass}">${actionText}</a>
          `;
        },
      },
      {
        data: "create_time",
        render: function (data, type, row) {
          let date = new Date(data);
          let day = String(date.getDate()).padStart(2, "0");
          let month = String(date.getMonth() + 1).padStart(2, "0");
          let year = date.getFullYear();
          return `${day}/${month}/${year} `;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return `<div class="btn-group" style="flex-wrap: nowrap;">
              <a href="#" onclick="deleteComment(event)" data-id="${row.id}" class="btn small red">Delete</a>
            </div>
            `;
        },
      },
    ],
  }),
  tb3 = new DataTable("#blog_management", {
    columnDefs: [
      {
        orderable: false,
        targets: [0, 5],
      },
    ],
    order: [[1, "asc"]],
    ajax: {
      url: "/api/manage_blogs",
      type: "POST",
      dataFilter: function (data) {
        console.log(data);
        return data;
      },
    },
    processing: true,
    serverSide: true,
    columns: [
      {
        data: null,
        orderable: false,
        render: function (data, type, row, meta) {
          return meta.row + 1 + meta.settings._iDisplayStart;
        },
      },
      {
        data: "title",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/blog/show/${row.id}">${data}</a>`;
        },
      },
      {
        data: "author_name",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/author/${row.author_id}">${data}</a>`;
        },
      },
      {
        data: "status",
        render: function (data, type, row) {
          let action = row.status == 1 ? "pending" : "approve",
            actionText = row.status != 1 ? "Pending" : "Approved",
            actionClass = row.status != 1 ? "primary" : "";
          return `
          <a onclick="toggleBlog(event)" data-id="${row.id}" href="#" class="btn small ${actionClass}">${actionText}</a>
          `;
        },
      },
      {
        data: "created_at",
        render: function (data, type, row) {
          let date = new Date(data);
          let day = String(date.getDate()).padStart(2, "0");
          let month = String(date.getMonth() + 1).padStart(2, "0");
          let year = date.getFullYear();
          return `${day}/${month}/${year} `;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return `<div class="btn-group" style="flex-wrap: nowrap;">
              <a href="/blog/update/${row.id}" class="btn small green">Update</a>
              <a href="#" onclick="deleteBlog(event)" data-id="${row.id}" class="btn small red">Delete</a>
            </div>
            `;
        },
      },
    ],
  }),
  tb4 = new DataTable("#product_management", {
    columnDefs: [
      {
        orderable: false,
        targets: [0, 5],
      },
    ],
    order: [[1, "asc"]],
    ajax: {
      url: "/api/manage_products",
      type: "POST",
      dataFilter: function (data) {
        // console.log(data);
        return data;
      },
    },
    processing: true,
    serverSide: true,
    columns: [
      {
        data: null,
        orderable: false,
        render: function (data, type, row, meta) {
          return meta.row + 1 + meta.settings._iDisplayStart;
        },
      },
      {
        data: "title",
        render: function (data, type, row) {
          return `<a href="/market/show/${row.id}">${data}</a>`;
        },
      },
      {
        data: "category",
        render: function (data, type, row) {
          return `<span class="btn small">${data}</span>`;
        },
      },
      {
        data: "price",
        render: function (data, type, row) {
          return parseFloat(data).toLocaleString("en-US", {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
          });
        },
      },
      {
        data: "date",
        render: function (data, type, row) {
          let date = new Date(data);
          let day = String(date.getDate()).padStart(2, "0");
          let month = String(date.getMonth() + 1).padStart(2, "0");
          let year = date.getFullYear();
          return `${day}/${month}/${year} `;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return `
            <div class="btn-group" style="flex-wrap: nowrap;">
              <a href="/product/update/${row.id}" class="btn small green">Update</a>
              <a href="#" onclick="deleteProduct(event)" data-id="${row.id}" class="btn small red">Delete</a>
            </div>
            `;
        },
      },
    ],
  }),
  tb5 = new DataTable("#motivation_management", {
    columnDefs: [
      {
        orderable: false,
        targets: [0,2, 5],
      },
    ],
    order: [[1, "asc"]],
    ajax: {
      url: "/api/manage_motivations",
      type: "POST",
      dataFilter: function (data) {
        console.log(data);
        return data;
      },
    },
    processing: true,
    serverSide: true,
    columns: [
      {
        data: null,
        orderable: false,
        render: function (data, type, row, meta) {
          return meta.row + 1 + meta.settings._iDisplayStart;
        },
      },
      {
        data: "title",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/motivation?id=${row.id}">${data}</a>`;
        },
      },
      {
        data: "author_name",
        render: function (data, type, row) {
          return `<a class="truncate" style="--line:1;" href="/author/${row.author_id}">${data}</a>`;
        },
      },
      {
        data: "status",
        render: function (data, type, row) {
          let action = row.status == 1 ? "pending" : "approve",
            actionText = row.status != 1 ? "Pending" : "Approved",
            actionClass = row.status != 1 ? "primary" : "";
          return `
          <a data-id="${row.id}" href="#" class="btn small ${actionClass}">${actionText}</a>
          `;
        },
      },
      {
        data: "create_at",
        render: function (data, type, row) {
          let date = new Date(data);
          let day = String(date.getDate()).padStart(2, "0");
          let month = String(date.getMonth() + 1).padStart(2, "0");
          let year = date.getFullYear();
          return `${day}/${month}/${year} `;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return `<div class="btn-group" style="flex-wrap: nowrap;">
              <a href="/motivation/update/${row.id}" class="btn small green">Update</a>
              <a href="#" onclick="deleteMotivation(event)" data-id="${row.id}" class="btn small red">Delete</a>
            </div>
            `;
        },
      },
    ],
  }),
  sn = (tbs) => {
    tbs.forEach((tb) => {
      tb.on("order.dt search.dt", function () {
        tb.column(0, {})
          .nodes()
          .each(function (cell, i) {
            cell.innerHTML = i + 1;
          });
      }).draw();
    });
  };
sn([tb1, tb2, tb3, tb4,tb5]);
let deleteProduct = (e) => {
  e.preventDefault();
  const productId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/delete_product/${productId}`, {
        method: "POST",
      })
        .then((response) => response.json())
        .then((data) => {
          console.log(data);
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb4.ajax.reload();
        });
    }
  });
};
let deleteComment = (e) => {
  e.preventDefault();
  const blogId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/delete_comment/${blogId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb2.ajax.reload();
        });
    }
  });
};
let deleteBlog = (e) => {
  e.preventDefault();
  const blogId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/delete_blog/${blogId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb3.ajax.reload();
        });
    }
  });
};
let deleteMotivation = (e) => {
  e.preventDefault();
  const blogId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/delete_motivation/${blogId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb5.ajax.reload();
        });
    }
  });
};
let deleteUser = (e) => {
  e.preventDefault();
  const userId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/delete_user/${userId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb1.ajax.reload();
        });
    }
  });
};
let toggleComment = (e) => {
  e.preventDefault();
  const blogId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "confirm this action!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/toggle_comment/${blogId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          console.log(error);
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb2.ajax.reload();
        });
    }
  });
};
let toggleBlog = (e) => {
  e.preventDefault();
  const blogId = e.target.dataset.id;
  Swal.fire({
    title: "Are you sure?",
    text: "confirm this action!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(`/api/toggle_blog/${blogId}`, {
        method: "POST",
      })
        // .then(async(response) => console.log(await response.text()))
        .then((response) => response.json())
        .then((data) => {
          let header = data.state ? "Successfully" : "Error";
          Swal.fire(header, data.message, "success");
        })
        .catch((error) => {
          console.log(error);
          Swal.fire("Error", error, "error");
        })
        .finally(() => {
          tb3.ajax.reload();
        });
    }
  });
};
