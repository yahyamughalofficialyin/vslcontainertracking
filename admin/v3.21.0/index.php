<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.21.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:02:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <?php include "head.php" ?>
</head>

<body>
  <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
  <main class="main" id="top">
    <div class="container" data-layout="container">
      <?php include "header.php" ?>

      <div class="content">
        <?php include "header-responsive.php" ?>
        <div class="row g-3 mb-3">
          <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100 ecommerce-card-min-width">
              <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
              </div>
              <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                  <div class="col">
                    <p class="font-sans-serif lh-1 mb-1 fs-5">$47K</p><span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                  </div>
                  <div class="col-auto ps-0">
                    <div class="echart-bar-weekly-sales h-100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
              <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Total Order</h6>
              </div>
              <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                  <div class="col-auto align-self-end">
                    <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs-11 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>
                  </div>
                  <div class="col-auto ps-0 mt-n4">
                    <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
              <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                  <div class="col-5 col-sm-6 col-xxl pe-2">
                    <h6 class="mt-1">Market Share</h6>
                    <div class="fs-11 mt-3">
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Samsung</span></div>
                        <div class="d-xxl-none">33%</div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Huawei</span></div>
                        <div class="d-xxl-none">29%</div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Apple</span></div>
                        <div class="d-xxl-none">20%</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto position-relative">
                    <div class="echart-market-share"></div>
                    <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-7">26M</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
              <div class="card-header d-flex flex-between-center pb-0">
                <h6 class="mb-0">Weather</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
              <div class="card-body pt-2">
                <div class="row g-0 h-100 align-items-center">
                  <div class="col">
                    <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                      <div>
                        <h6 class="mb-2">New York City</h6>
                        <div class="fs-11 fw-semi-bold">
                          <div class="text-warning">Sunny</div>Precipitation: 50%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto text-center ps-2">
                    <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                    <div class="fs-10 text-800">32&deg; / 25&deg;</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 pe-lg-2 mb-3">
            <div class="card h-lg-100 overflow-hidden">
              <div class="card-header bg-body-tertiary">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="mb-0">Running Projects</h6>
                  </div>
                  <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                      <option>Working Time</option>
                      <option>Estimated Time</option>
                      <option>Billable Time</option>
                    </select></div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                  <div class="col ps-x1 py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-primary-subtle text-dark"><span class="fs-9 text-primary">F</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Falcon</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs-10 fw-semi-bold">12:50:00</div>
                      </div>
                      <div class="col-5 pe-x1 ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar rounded-pill" style="width: 38%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                  <div class="col ps-x1 py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-success-subtle text-dark"><span class="fs-9 text-success">R</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Reign</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs-10 fw-semi-bold">25:20:00</div>
                      </div>
                      <div class="col-5 pe-x1 ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar rounded-pill" style="width: 79%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                  <div class="col ps-x1 py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-info-subtle text-dark"><span class="fs-9 text-info">B</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Boots4</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs-10 fw-semi-bold">58:20:00</div>
                      </div>
                      <div class="col-5 pe-x1 ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar rounded-pill" style="width: 90%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                  <div class="col ps-x1 py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-warning-subtle text-dark"><span class="fs-9 text-warning">R</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Raven</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs-10 fw-semi-bold">21:20:00</div>
                      </div>
                      <div class="col-5 pe-x1 ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar rounded-pill" style="width: 40%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row g-0 align-items-center py-2 position-relative">
                  <div class="col ps-x1 py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-danger-subtle text-dark"><span class="fs-9 text-danger">S</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Slick</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs-10 fw-semi-bold">31:20:00</div>
                      </div>
                      <div class="col-5 pe-x1 ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar rounded-pill" style="width: 70%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
            </div>
          </div>
          <div class="col-lg-6 ps-lg-2 mb-3">
            <div class="card h-lg-100">
              <div class="card-header">
                <div class="row flex-between-center">
                  <div class="col-auto">
                    <h6 class="mb-0">Total Sales</h6>
                  </div>
                  <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                      <option value="0">January</option>
                      <option value="1">February</option>
                      <option value="2">March</option>
                      <option value="3">April</option>
                      <option value="4">May</option>
                      <option value="5">Jun</option>
                      <option value="6">July</option>
                      <option value="7">August</option>
                      <option value="8">September</option>
                      <option value="9">October</option>
                      <option value="10">November</option>
                      <option value="11">December</option>
                    </select>
                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body h-100 pe-0"><!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
            <div class="card h-lg-100">
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <h6 class="mb-3 text-800">Using Storage <strong class="text-1100">1775.06 MB </strong>of 2 GB</h6>
                  <div class="progress-stacked mb-3 rounded-3" style="height: 10px;">
                    <div class="progress" style="width: 43.72%;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar bg-progress-gradient border-end border-100 border-2"></div>
                    </div>
                    <div class="progress" style="width: 18.76%;" role="progressbar" aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar bg-info border-end border-100 border-2"></div>
                    </div>
                    <div class="progress" style="width: 9.38%;" role="progressbar" aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar bg-success border-end border-100 border-2"></div>
                    </div>
                    <div class="progress" style="width: 28.14%;" role="progressbar" aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar bg-200"></div>
                    </div>
                  </div>
                  <div class="row fs-10 fw-semi-bold text-500 g-0">
                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-primary"></span><span>Regular</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(895MB)</span></div>
                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-info"></span><span>System</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(379MB)</span></div>
                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-success"></span><span>Shared</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(192MB)</span></div>
                    <div class="col-auto d-flex align-items-center"><span class="dot bg-200"></span><span>Free</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(576MB)</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
            <div class="card h-lg-100">
              <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
              <div class="card-body position-relative">
                <h5 class="text-warning">Running out of your space?</h5>
                <p class="fs-10 mb-0">Your storage will be running out soon. Get more space and powerful productivity features.</p><a class="btn btn-link fs-10 text-warning mt-lg-3 ps-0" href="#!">Upgrade storage<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
            <div class="card h-lg-100 overflow-hidden">
              <div class="card-body p-0">
                <div class="table-responsive scrollbar">
                  <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                    <thead class="bg-body-tertiary">
                      <tr>
                        <th class="text-900">Best Selling Products</th>
                        <th class="text-900 text-end">Revenue ($3333)</th>
                        <th class="text-900 pe-x1 text-end" style="width: 8rem">Revenue (%)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/12.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Raven Pro</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Landing</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$1311</td>
                        <td class="align-middle pe-x1">
                          <div class="d-flex align-items-center">
                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar rounded-pill" style="width: 39%;"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">39%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/10.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Boots4</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$860</td>
                        <td class="align-middle pe-x1">
                          <div class="d-flex align-items-center">
                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar rounded-pill" style="width: 26%;"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">26%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/11.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Falcon</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Admin</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$539</td>
                        <td class="align-middle pe-x1">
                          <div class="d-flex align-items-center">
                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar rounded-pill" style="width: 16%;"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">16%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/14.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Slick</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Builder</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$343</td>
                        <td class="align-middle pe-x1">
                          <div class="d-flex align-items-center">
                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar rounded-pill" style="width: 10%;"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">10%</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/13.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Reign Pro</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Agency</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$280</td>
                        <td class="align-middle pe-x1">
                          <div class="d-flex align-items-center">
                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar rounded-pill" style="width: 8%;"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">8%</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer bg-body-tertiary py-2">
                <div class="row flex-between-center">
                  <div class="col-auto"><select class="form-select form-select-sm">
                      <option>Last 7 days</option>
                      <option>Last Month</option>
                      <option>Last Year</option>
                    </select></div>
                  <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
            <div class="card h-100">
              <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                <h6 class="mb-0">Shared Files</h6><a class="py-1 fs-10 font-sans-serif" href="#!">View All</a>
              </div>
              <div class="card-body pb-0">
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                  <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="assets/img/products/5-thumb.png" alt="" /></div>
                  <div class="ms-3 flex-shrink-1 flex-grow-1">
                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">apple-smart-watch.png</a></h6>
                    <div class="fs-10"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Just Now</span></div>
                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                  </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                  <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="assets/img/products/3-thumb.png" alt="" /></div>
                  <div class="ms-3 flex-shrink-1 flex-grow-1">
                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iphone.jpg</a></h6>
                    <div class="fs-10"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                  </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                  <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                  <div class="ms-3 flex-shrink-1 flex-grow-1">
                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Falcon v1.8.2</a></h6>
                    <div class="fs-10"><span class="fw-semi-bold">Jane</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                  </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                  <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="assets/img/products/2-thumb.png" alt="" /></div>
                  <div class="ms-3 flex-shrink-1 flex-grow-1">
                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iMac.jpg</a></h6>
                    <div class="fs-10"><span class="fw-semi-bold">Rowen</span><span class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                  </div>
                </div>
                <hr class="text-200" />
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                  <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/docs.png" alt="" /></div>
                  <div class="ms-3 flex-shrink-1 flex-grow-1">
                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">functions.php</a></h6>
                    <div class="fs-10"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span></div>
                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-md-6 col-xxl-3 pe-md-2 mb-3 mb-xxl-0">
            <div class="card">
              <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                <h6 class="mb-0">Active Users</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
              <div class="card-body py-2">
                <div class="d-flex align-items-center position-relative mb-3">
                  <div class="avatar avatar-2xl status-online">
                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Emma Watson</a></h6>
                    <p class="text-500 fs-11 mb-0">Admin</p>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                  <div class="avatar avatar-2xl status-online">
                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                    <p class="text-500 fs-11 mb-0">Moderator</p>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                  <div class="avatar avatar-2xl status-away">
                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                    <p class="text-500 fs-11 mb-0">Editor</p>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                  <div class="avatar avatar-2xl status-offline">
                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">John Lee</a></h6>
                    <p class="text-500 fs-11 mb-0">Admin</p>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative false">
                  <div class="avatar avatar-2xl status-offline">
                    <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Rowen Atkinson</a></h6>
                    <p class="text-500 fs-11 mb-0">Editor</p>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All active users<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3 ps-md-2 order-xxl-1 mb-3 mb-xxl-0">
            <div class="card h-100">
              <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                <h6 class="mb-0">Bandwidth Saved</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
              <div class="card-body d-flex flex-center flex-column"><!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
                <div class="text-center mt-3">
                  <h6 class="fs-9 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                  <p class="fs-10 mb-0">38.44 GB total bandwidth</p>
                </div>
              </div>
              <div class="card-footer bg-body-tertiary py-2">
                <div class="row flex-between-center">
                  <div class="col-auto"><select class="form-select form-select-sm">
                      <option>Last 6 Months</option>
                      <option>Last Year</option>
                      <option>Last 2 Year</option>
                    </select></div>
                  <div class="col-auto"><a class="fs-10 font-sans-serif" href="#!">Help</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 px-xxl-2">
            <div class="card h-100">
              <div class="card-header bg-body-tertiary py-2">
                <div class="row flex-between-center">
                  <div class="col-auto">
                    <h6 class="mb-0">Top Products</h6>
                  </div>
                  <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body h-100"><!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2024 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v3.21.0</p>
            </div>
          </div>
        </footer>
      </div>
      <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
          <div class="modal-content border-0">
            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
              <div class="position-relative z-1">
                <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
              </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 px-5">
              <form>
                <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                <div class="row gx-2">
                  <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                  <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
              </form>
              <div class="position-relative mt-5">
                <hr />
                <div class="divider-content-center">or register with</div>
              </div>
              <div class="row g-2 mt-2">
                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header settings-panel-header bg-shape">
      <div class="z-1 py-1">
        <div class="d-flex justify-content-between align-items-center mb-1">
          <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-9"></span>Settings</h5><button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
        </div>
        <p class="mb-0 fs-10 text-white opacity-75"> Set your own customized style</p>
      </div>
      <div class="z-1" data-bs-theme="dark"><button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
    </div>
    <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
      <h5 class="fs-9">Color Scheme</h5>
      <p class="fs-10">Choose the perfect color mode for your app.</p>
      <div class="btn-group d-block w-100 btn-group-navbar-style">
        <div class="row gx-2">
          <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span class="label-text">Light</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span class="label-text"> Dark</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-auto.jpg" alt="" /></span><span class="label-text"> Auto</span></label></div>
        </div>
      </div>
      <hr />
      <div class="d-flex justify-content-between">
        <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9">RTL Mode</h5>
            <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="documentation/customization/configuration.html">RTL Documentation</a>
          </div>
        </div>
        <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
      </div>
      <hr />
      <div class="d-flex justify-content-between">
        <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9">Fluid Layout</h5>
            <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="documentation/customization/configuration.html">Fluid Documentation</a>
          </div>
        </div>
        <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
      </div>
      <hr />
      <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
        <div class="flex-1">
          <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
          <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
          <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
              <option value="vertical">Vertical</option>
              <option value="top">Top</option>
              <option value="combo">Combo</option>
              <option value="double-top">Double Top</option>
            </select></div>
        </div>
      </div>
      <hr />
      <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
      <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
      <p> <a class="fs-10" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
      <div class="btn-group d-block w-100 btn-group-navbar-style">
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
        </div>
      </div>
      <div class="text-center mt-5"><img class="mb-4" src="assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
        <h5>Like What You See?</h5>
        <p class="fs-10">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
      </div>
    </div>
  </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
      <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
  </a>

  <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
  <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/echarts/echarts.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="vendors/list.js/list.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.21.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:04:32 GMT -->

</html>