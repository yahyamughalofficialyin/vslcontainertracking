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
                                <h5 class="mb-0" data-anchor="data-anchor">Container Table</h5>
                            </div>
                            <div class="col-auto ms-auto">

                                <div class="col-auto ms-auto">
                                    <button class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" id="createContainerBtn">Create Container</button>
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
                                                        <th class="text-900 sort" data-sort="containerno">Container Number</th>
                                                        <th class="text-900 sort" data-sort="containerno">Status</th>
                                                        <th class="text-900 sort" data-sort="loading">Loading Time</th>
                                                        <th class="text-900 sort" data-sort="discharge">Discharge Time</th>
                                                        <th class="text-900 sort" data-sort="discharge">POL</th>
                                                        <th class="text-900 sort" data-sort="discharge">POD</th>
                                                        <th class="text-900 sort" data-sort="discharge">VIAPORT</th>
                                                        <th class="text-900 sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="ContainerTable"></tbody>
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

    <!-- Edit Container Modal -->
    <div class="modal fade" id="editContainerModal" tabindex="-1" aria-labelledby="editContainerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editContainerModalLabel">Edit Container</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editContainerForm">
                        <input type="hidden" id="editContainerId" name="id">
                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select name="status" id="editStatus" class="form-control" required>
                                <option value="none" class="form-control" disabled selected>Select Status</option>
                                <option value="loaded" class="form-control">Loaded</option>
                                <option value="discharged" class="form-control">Discharged</option>
                            </select>
                        </div>
                        <div class="mb-3 status-dependent" id="loadingTimeField" style="display: none;">
                            <label for="editGateIn" class="form-label">Loading Time</label>
                            <input type="datetime-local" class="form-control" id="editGateIn" name="gatein">
                        </div>
                        <div class="mb-3 status-dependent" id="dischargingTimeField" style="display: none;">
                            <label for="editGateOut" class="form-label">Discharging Time</label>
                            <input type="datetime-local" class="form-control" id="editGateOut" name="gateout">
                        </div>
                        <div class="mb-3 status-dependent" id="polField" style="display: none;">
                            <label for="pol" class="form-label">Port of Loading</label>
                            <input type="text" class="form-control" id="pol" name="pol">
                        </div>
                        <div class="mb-3 status-dependent" id="podField" style="display: none;">
                            <label for="pod" class="form-label">Port of Discharging</label>
                            <input type="text" class="form-control" id="pod" name="pod">
                        </div>
                        <div class="mb-3" id="viaPortField">
                            <label for="viaport" class="form-label">VIA Port</label>
                            <input type="text" class="form-control" id="viaport" name="viaport">
                        </div>
                    </form>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveEditContainerBtn">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- JavaScript and jQuery for CRUD operations -->
    <script>
        $(document).ready(function () {
    $('#editStatus').on('change', function () {
        // Get selected value
        var status = $(this).val();

        // Hide all dependent fields initially
        $('.status-dependent').hide();

        // Show fields based on selected status
        if (status === 'loaded') {
            $('#loadingTimeField').show();
            $('#polField').show();
        } else if (status === 'discharged') {
            $('#dischargingTimeField').show();
            $('#podField').show();
        }

        // VIA Port field is always visible, no action needed
    });
});


        // Fetch Containers
        function fetchContainers() {
            $.ajax({
                url: "code.php?fetch_containers=true",
                method: "GET",
                success: function(data) {
                    let containers = JSON.parse(data);
                    let html = '';
                    containers.forEach(container => {
                        html += `<tr data-id="${container.id}">
        <td>${container.ContainerNo}</td>
        <td>${container.Status || ''}</td>
        <td>${container.GateIn || ''}</td>
        <td>${container.GateOut || ''}</td>
        <td>${container.POL || ''}</td>
        <td>${container.POD || ''}</td>
        <td>${container.VIAPORT || ''}</td>
        <td>
            <button class='btn btn-warning editContainerBtn' data-id='${container.id}'>Edit</button>
            <button onclick="deleteContainer('${container.id}')" class="btn btn-danger">Delete</button>
        </td>
    </tr>`;
                    });
                    document.getElementById('ContainerTable').innerHTML = html;
                }
            });
        }

        // Call fetchContainers on page load
        fetchContainers();

        // Handle form submission for Create and Update


        // Handle Create Container Button Click
        $('#createContainerBtn').on('click', function() {
            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: {
                    create_container_direct: true, // Trigger direct container creation
                },
                success: function(response) {
                    alert(response); // Optional: Replace with a better UI message if desired
                    fetchContainers(); // Refresh the table dynamically
                },
                error: function() {
                    alert('An error occurred while creating the container.');
                }
            });
        });


        // Edit Container
        // Open Edit Modal with Current Data
        $(document).on('click', '.editContainerBtn', function() {
            const id = $(this).data('id');
            const row = $(`tr[data-id="${id}"]`);
            const status = row.find('td:nth-child(2)').text().trim();
            const gateIn = row.find('td:nth-child(3)').text().trim();
            const gateOut = row.find('td:nth-child(4)').text().trim();
            const pol = row.find('td:nth-child(5)').text().trim();
            const pod = row.find('td:nth-child(6)').text().trim();
            const viaport = row.find('td:nth-child(7)').text().trim();

            // Populate modal fields
            $('#editContainerId').val(id);
            $('#editStatus').val(status);
            $('#editGateIn').val(gateIn);
            $('#editGateOut').val(gateOut);
            $('#pol').val(pol);
            $('#pod').val(pod);
            $('#viaport').val(viaport);

            // Show modal
            $('#editContainerModal').modal('show');
        });

        // Save Edited Container Data
        $('#saveEditContainerBtn').on('click', function() {
            const formData = {
                id: $('#editContainerId').val(),
                status: $('#editStatus').val(),
                gatein: $('#editGateIn').val(),
                gateout: $('#editGateOut').val(),
                pol: $('#pol').val(),
                pod: $('#pod').val(),
                viaport: $('#viaport').val(),
                update_container: true // Include the flag for backend recognition
            };

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: formData, // Send the collected form data
                success: function(response) {
                    alert(response); // Optional: Replace with UI message display
                    $('#editContainerModal').modal('hide'); // Close the modal
                    fetchContainers(); // Refresh the table dynamically
                },
                error: function() {
                    alert('An error occurred while updating the container.');
                },
            });
        });



        // Delete Container
        function deleteContainer(id) {
            if (confirm("Are you sure you want to delete this container?")) {
                $.post('code.php', {
                    delete_container: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchContainers();
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