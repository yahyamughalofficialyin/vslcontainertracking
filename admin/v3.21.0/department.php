<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<head>
    <?php include "head.php"; ?>
</head>

<body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <?php include "header.php"; ?>
            <div class="content">
                <?php include "header-responsive.php"; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0" data-anchor="data-anchor">Department Table</h5>
                            </div>
                            <div class="col-auto ms-auto">

                                <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
                                    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#DepartmentModal">Add Department</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="tab-content">
                                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-80fe85af-d302-463d-8e33-39cc6809d26f" id="dom-80fe85af-d302-463d-8e33-39cc6809d26f">
                                    <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                        <div class="row justify-content-end g-0">
                                            <div class="col-auto col-sm-5 mb-3">
                                                <form>
                                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
                                                        <div class="input-group-text bg-transparent"><span class="fa fa-search fs-10 text-600"></span></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="table-responsive scrollbar">
                                            <table class="table table-bordered table-striped fs-10 mb-0">
                                                <thead class="bg-200">
                                                    <tr>
                                                        <th class="text-900 sort" data-sort="id">Id</th>
                                                        <th class="text-900 sort" data-sort="name">Name</th>
                                                        <th class="text-900 sort" data-sort="employee">Total Employee</th>
                                                        <th class="text-900 sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="DepartmentTable"></tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <!-- Department Modal -->
    <div class="modal fade" id="DepartmentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="DepartmentForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="modal-title">Add Department</h5>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="departmentId">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- JavaScript and jQuery for CRUD operations -->
    <script>
        // Fetch Departments
        function fetchDepartments() {
            $.ajax({
                url: "code.php?fetch_departments=true",
                method: "GET",
                success: function(data) {
                    let departments = JSON.parse(data);
                    let html = '';
                    departments.forEach(department => {
                        html += `<tr>
                  <td>${department.id}</td>
                  <td>${department.name}</td>
                  <td>${department.employeeCount || ''}</td>
                  <td>
                      <button onclick="editDepartment('${department.id}')" class="btn btn-warning">Edit</button>
                      <button onclick="deleteDepartment('${department.id}')" class="btn btn-danger">Delete</button>
                  </td>
               </tr>`;
                    });
                    document.getElementById('DepartmentTable').innerHTML = html;
                }
            });
        }

        // Call fetchDepartments on page load
        fetchDepartments();

        // Handle form submission for Create and Update
        $('#DepartmentForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let action = $('#departmentId').val() === '' ? 'create_department' : 'update_department';
            formData.append(action, true);

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    $('#DepartmentModal').modal('hide');
                    fetchDepartments();
                }
            });
        });

        // Edit Department
        function editDepartment(id) {
            $.ajax({
                url: 'code.php?fetch_departments=true',
                method: 'GET',
                success: function(data) {
                    let departments = JSON.parse(data);
                    let department = departments.find(dep => dep.id === id);
                    $('#departmentId').val(department.id);
                    $('#name').val(department.name);
                    $('#DepartmentModal').modal('show');
                }
            });
        }

        // Delete Department
        function deleteDepartment(id) {
            if (confirm("Are you sure you want to delete this department?")) {
                $.post('code.php', {
                    delete_department: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchDepartments();
                });
            }
        }
    </script>


    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>




</html>