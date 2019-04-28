<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Products | Palace Petroleum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Icon -->
    <link rel="icon" href="">
    <!--Bootstrap -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/style.css">
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <div class="dashboard-wrapper pt-3">
      <div class="container">
        <div class="row">
          <div class="container-fluid">
            <div class="links col-12 rounded text-white mt-3">
              <a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Products</span>
            </div>
            <div class="row">
              <div class="container-fluid">
                <div class="mt-4 top-controls mb-4">
                  <button class="btn btn-primary mr-1" data-toggle="modal" data-target="#addProduct" style="float: right; width: 140px !important;">Add Product<i class="fas fa-plus-circle"></i></button>
                  <div class="form-inline">
                    <select class="form-control col-md-2 col-3">
                      <option>Search by</option>
                    </select>
                    <input type="text" name="" class="form-control ml-1 col-md-2 col-4" placeholder="">
                    
 <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addProductModal"><i class="fas fa-plus-square"></i></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal">
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" placeholder="Enter Product Name" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Product Code" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Unit" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Description" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Price" style="width: 100%;">
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
                            <button type="button" class="btn btn-primary pl-1 pr-1">Save<i class="fas fa-check-circle"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editProductModal"><i class="fas fa-user-edit"></i></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal">
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" placeholder="Enter Product Name" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Product Code" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Unit" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Description" style="width: 100%;">
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Enter Price" style="width: 100%;">
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
                            <button type="button" class="btn btn-primary pl-1 pr-1" style="width: 90px !important;">Update<i class="fas fa-check-circle"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="deleteProductModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteProductModal"><i class="fas fa-trash-alt"></i></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h4>Do you want to delete this product?</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
                            <button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <div class="row">
                  <div class="container-fluid">
                    <div class="top-controls2 mb-3">
                      <button class="btn topcontrolActive mr-1" style="width: 144px !important;">Product</button>
                      <button class="btn mr-1" style="width: 144px !important;">Product Ledger</button>
                      <button class="btn mr-1" style="width: 150px !important;">Product Summary</button>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="container-fluid">
                <div id="product">
                <table class="table bg-white">
                  <thead>
                    <tr>
                      <th scope="col">S/N</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Product Code</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date Added</th>
                      <th scope="col">Unit</th>
                      <th scope="col">Price</th>
                      <th scope="col">Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td><div class="nav-item dropdown show">
                        <button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editProduct">Edit<i class="fas fa-edit ml-4"></i></button>
                          <button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteProduct">Delete<i class="fas fa-trash-alt ml-4"></i></button>
                        </div>
                      </div>
                    </td>   
                    </tr>
                </tbody>
              </table>
            </div>
            <div id="productLedger" class="d-none">
              <div class="top-controls">
                  <div class="form-inline">
                    <label style="font-family: dosis !important;">Select Product</label>
                    <select class="form-control ml-1 col-md-2 col-4">
                      <option>Products</option>
                    </select>
              </div>
                <table class="table bg-white mt-4">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Particulars</th>
                      <th scope="col">Description</th>
                      <th scope="col">Ref No</th>
                      <th scope="col">In(Supply)</th>
                      <th scope="col">Out(Sales)</th>
                      <th scope="col">Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                    </tr>
                </tbody>
              </table>
            </div>
              </div>
              <div id="productSummary" class="d-none">
                <div>
                  <h5>Product Summary as of </h5>
                </div>
                <table class="table bg-white">
                  <thead>
                    <tr>
                      <th scope="col">S/N</th>
                      <th scope="col">Product Code</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Current Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                      <td>Unknown</td>
                    </tr>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>