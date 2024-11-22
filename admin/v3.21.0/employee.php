<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <?php include "head.php"; ?>
</head>

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <?php include "header.php"; ?>
            <div class="content">
                <?php include "header-responsive.php"; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0">Employee Table</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#EmployeeModal">Add Employee</button>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs-10 mb-0">
                                    <thead class="bg-200">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="EmployeeTable"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Employee Modal -->
    <div class="modal fade" id="EmployeeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="EmployeeForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Employee</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="employeeId">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" id="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" name="cnic" id="cnic" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <select name="designation" id="designation" class="form-control" required>
                                <option value="Intern">Intern</option>
                                <option value="Junior">Junior</option>
                                <option value="Senior">Senior</option>
                                <option value="Team Lead">Team Lead</option>
                                <option value="Project Manager">Project Manager</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select name="departmentId" id="departmentId" class="form-control" required></select>
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

    <!-- Identity Card Modal -->
    <div class="modal fade" id="IdentityCardModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Employee Identity Card</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="card bg-dark" style="width: 100%;" id="EmployeeIDCard">
                                    <img id="cardImage" src="" alt="Employee Image" class="card-img-top" style="height: 250px; object-fit: cover; ">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 id="cardName"></h5>
                                                <p id="cardPhoneNumber"></p>
                                                <small id="cardEmail"></small>
                                            </div>
                                            <div class="col-sm-6">
                                                <img id="employeebarcode" src='' />
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="downloadIDCardPDF()"><i class='bx bxs-download'></i></button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


    <!-- JavaScript and jQuery for CRUD operations -->
    <script>
        function fetchEmployees() {
            $.ajax({
                url: "code.php?fetch_employees=true",
                method: "GET",
                success: function(data) {
                    let employees = JSON.parse(data);
                    let html = '';
                    employees.forEach(employee => {
                        html += `<tr>
                        <td>${employee.id}</td>
                        <td>${employee.firstName} ${employee.lastName}</td>
                        <td>${employee.email}</td>
                        <td>${employee.phoneNumber}</td>
                        <td>${employee.designation}</td>
                        <td>${employee.departmentName}</td>
                        <td><img src="uploads/employee/${employee.image}" style="width: 50px; height: 50px;"></td>
                        <td>
                          <button onclick="editEmployee('${employee.id}')" class="btn btn-warning">Edit</button>
                          <button onclick="deleteEmployee('${employee.id}')" class="btn btn-danger">Delete</button>
                          <button onclick="card('${employee.username}')" class="btn btn-primary"><i class='bx bxs-id-card'></i></button>
                        </td>
                      </tr>`;
                    });
                    $('#EmployeeTable').html(html);
                }
            });
        }

        function fetchDepartments() {
            $.ajax({
                url: "code.php?fetch_departments=true",
                method: "GET",
                success: function(data) {
                    let departments = JSON.parse(data);
                    let options = '<option value="">Select Department</option>';
                    departments.forEach(department => {
                        options += `<option value="${department.id}">${department.name}</option>`;
                    });
                    $('#departmentId').html(options);
                }
            });
        }

        $(document).ready(function() {
            fetchEmployees();
            fetchDepartments();
        });

        $('#EmployeeForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let action = $('#employeeId').val() === '' ? 'create_employee' : 'update_employee';
            formData.append(action, true);

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    $('#EmployeeModal').modal('hide');
                    fetchEmployees();
                }
            });
        });

        function editEmployee(id) {
            $.ajax({
                url: "code.php?fetch_employees=true",
                method: "GET",
                success: function(data) {
                    let employees = JSON.parse(data);
                    let employee = employees.find(e => e.id === id);
                    $('#employeeId').val(employee.id);
                    $('#firstName').val(employee.firstName);
                    $('#lastName').val(employee.lastName);
                    $('#cnic').val(employee.cnic);
                    $('#email').val(employee.email);
                    $('#phoneNumber').val(employee.phoneNumber);
                    $('#designation').val(employee.designation);
                    $('#departmentId').val(employee.departmentId);
                    $('#EmployeeModal').modal('show');
                }
            });
        }

        function deleteEmployee(id) {
            if (confirm("Are you sure you want to delete this employee?")) {
                $.post('code.php', {
                    delete_employee: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchEmployees();
                });
            }
        }


        function card(username) {
            $.ajax({
                url: "code.php?get_employee_by_username=true",
                method: "GET",
                data: {
                    username: username
                },
                success: function(data) {
                    let employee = JSON.parse(data);

                    $('#cardImage').attr('src', `uploads/employee/${employee.image}`);
                    $('#cardName').text(employee.firstName + ' ' + employee.lastName);
                    $('#cardPhoneNumber').text(employee.phoneNumber);
                    $('#cardEmail').text(employee.email);

                    // Generate QR code URL and set it as a data URL
                    const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=70x70&data=${employee.username}`;
                    fetch(qrUrl)
                        .then(response => response.blob())
                        .then(blob => {
                            const qrCodeDataURL = URL.createObjectURL(blob);
                            $('#employeebarcode').attr('src', qrCodeDataURL);
                        });

                    $('#IdentityCardModal').modal('show');
                }
            });
        }


        function downloadIDCardPDF() {
            setTimeout(() => {
                const element = document.querySelector("#EmployeeIDCard");
                const scale = 3; // Adjust this scale factor for higher resolution

                html2canvas(element, {
                    scale: scale,
                    useCORS: true
                }).then(canvas => {
                    const imgData = canvas.toDataURL("image/png");

                    // Calculate PDF dimensions based on the scaled canvas size
                    const pdfWidth = (canvas.width / scale) * 0.2645; // Convert px to mm
                    const pdfHeight = (canvas.height / scale) * 0.2645;

                    // Initialize jsPDF with custom dimensions
                    const {
                        jsPDF
                    } = window.jspdf;
                    const pdf = new jsPDF("p", "mm", [pdfWidth, pdfHeight]);

                    // Add image to PDF with exact dimensions for clarity
                    pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);

                    // Download PDF with a dynamic filename
                    const employeeName = document.querySelector("#cardName").innerText;
                    pdf.save(`${employeeName}_ID_Card.pdf`);
                });
            }, 1000); // Adjust delay if needed
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