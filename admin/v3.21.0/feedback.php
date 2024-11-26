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
                                <h5 class="mb-0" data-anchor="data-anchor">Feedback Table</h5>
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
                                                        <th class="text-900 sort" data-sort="email">Email</th>
                                                        <th class="text-900 sort" data-sort="message">Message</th>
                                                        <th class="text-900 sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="FeedbackTable"></tbody>
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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- JavaScript and jQuery for CRUD operations -->
    <script>
        // Fetch Feedbacks
        function fetchFeedbacks() {
            $.ajax({
                url: "code.php?fetch_feedbacks=true",
                method: "GET",
                success: function(data) {
                    let feedbacks = JSON.parse(data);
                    let html = '';
                    feedbacks.forEach(feedback => {
                        html += `<tr>
                  <td>${feedback.id}</td>
                  <td>${feedback.FirstName} ${feedback.LastName}</td>
                  <td>${feedback.Email || ''}</td>
                  <td>${feedback.Message || ''}</td>
                  <td>
                      <a href="mailto:${feedback.Email}" class="btn btn-secondary">Reply</a>
                      <button onclick="deleteFeedback('${feedback.id}')" class="btn btn-danger">Delete</button>
                  </td>
               </tr>`;
                    });
                    document.getElementById('FeedbackTable').innerHTML = html;
                }
            });
        }

        // Call fetchFeedbacks on page load
        fetchFeedbacks();


        // Delete Feedback
        function deleteFeedback(id) {
            if (confirm("Are you sure you want to delete this feedback?")) {
                $.post('code.php', {
                    delete_feedback: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchFeedbacks();
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