<?php include("includes/header.php") ?>
<?php $page = 'product';include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Products | Palace Petroleum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Icon -->
    <link rel="icon" href="">
    <!--Bootstrap -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/Animate.css">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/style.css">
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <!-- DASHBOARD WRAPPER -->
    <div class="dashboard-wrapper pt-3">
      <div class="container">
        <!-- ROW CONTAINING LINK TO HOME/DASHBOARD -->
        <div class="row">
          <div class="container-fluid">
            <div class="links col-12 rounded text-white mt-3">
              <a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Products</span>
            </div>
          </div>
        </div>
        <!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
        <div class="row">
          <div class="container-fluid">
            <div class="row mb-4">
              <div class="col-md-6 top-controls2 mt-4">
                <button class="btn topcontrolActive mr-1" style="width: 80px !important;" id="p1">Product</button>
                <button class="btn mr-1" style="width: 134px !important;" id="p2">Product Ledger</button>
                <button class="btn mr-1" style="width: 150px !important;" id="p3">Product Summary</button>
              </div>
              <div class="col-md-6 top-controls text-right mt-4">
                <button class="btn btn-primary mr-1" data-toggle="modal" data-target="#addProduct" style=" width: 140px !important;">Add Product<i class="fas fa-plus-circle"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- DIV CONTAINING MODALS -->
        <div class="top-controls">
          <!-- ADD PRODUCT MODAL -->
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
                        <input type="text" class="form-control" placeholder="Enter Product Name">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Product Code">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Unit">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Description">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Price">
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
          <!-- EDIT PRODUCT MODAL -->
          <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editProductModal"><i class="fas fa-edit"></i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter Product Name">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Product Code">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Description">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Unit">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"placeholder="Enter Price">
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
          <!-- DELETE PRODUCT MODAL -->
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
        <!-- CONTAINER FOR TABLES -->
        <div class="row">
          <div class="container-fluid">
            <!-- DIV FOR PRODUCT -->
            <div id="product" class="animated fadeIn">
              <div class="top-controls mb-4">
                <div class="form-inline">
                  <select class="custom-select form-control col-md-2 col-5">
                    <option>Search by</option>
                  </select>
                  <input type="text" name="" class="form-control ml-1 col-md-2 col-5" placeholder="">
                </div>
              </div>
              <div class="table-responsive">
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
          </div>
          <!-- DIV FOR PRODUCT LEDGER (Display is set to none) -->
          <div id="productLedger" class="d-none animated fadeIn">
            <div class="top-controls">
              <div class="form-inline">
                <select class="custom-select form-control col-md-2 col-4">
                  <option>Products</option>
                </select>
              </div>
              <div class="mt-3">
                <h5 class="productTitle">Product Name :</h5>
                <h5 class="productTitle">Product Code :</h5>
                <h5 class="productTitle">Current Balance :</h5>
              </div>
              <div class="table-responsive">
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
          </div>
          <!-- DIV FOR PRODUCT SUMMARY (Display is set to none) -->
          <div id="productSummary" class="d-none animated fadeIn">
            <div>
              <h5 class="productTitle">Product Summary as at :</h5>
            </div>
            <div class="top-controls mb-4">
              <div class="form-inline">
                <select class="custom-select form-control col-md-2 col-5">
                  <option>Search by</option>
                </select>
                <input type="text" name="" class="form-control ml-1 col-md-2 col-5" placeholder="">
              </div>
            </div>
            <div>
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
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    //Declaring global variables
    var navProd1 = document.getElementById('p1');
    var navProd2 = document.getElementById('p2');
    var navProd3 = document.getElementById('p3');

    let productSummary = document.querySelector('#productSummary');
    let productledger  = document.querySelector('#productLedger');
    let product = document.querySelector('#product');

    //productLedger button EventListener
    navProd2.addEventListener('click',(e)=>{
       // console.log('aaaa');
        product.style.display = "none";
        productSummary.classList.remove('d-block');
        productSummary.classList.add('d-none');
        productledger.classList.remove('d-none');
        productledger.style.display = "block";
        product.classList.add('d-none');
        product.classList.remove('d-block');
        
		    navProd2.classList.add("topcontrolActive");
        navProd3.classList.remove("topcontrolActive");
        navProd1.classList.remove("topcontrolActive");
    });

    //productSummary button EventListener
    navProd3.addEventListener('click',(e)=>{
        //console.log('sum');
        product.style.display = "none";
        productledger.classList.remove('d-block');
        productledger.classList.add('d-none');
        productSummary.classList.remove('d-none');
        productSummary.style.display = "block";
        product.classList.add('d-none');
        product.classList.remove('d-block');
        
		    navProd3.classList.add("topcontrolActive");
        navProd2.classList.remove("topcontrolActive");
        navProd1.classList.remove("topcontrolActive");
		
    });

    // product button EventListener
    navProd1.addEventListener('click',(e)=>{

      product.classList.add('d-block');
      productledger.classList.remove('d-block');
      productledger.classList.add('d-none');
      productSummary.classList.remove('d-block');
      productSummary.classList.add('d-none');

      navProd1.classList.add("topcontrolActive");
      navProd2.classList.remove("topcontrolActive");
      navProd3.classList.remove("topcontrolActive");
    })

  </script>
</html>