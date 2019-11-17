<!-- Blog Sidebar Widgets Column -->
          <div class="col-md-4">  
                        <!-- Blog Search Well -->
                          <div class="well">
                              <h4>Blog Search</h4>
                              <form action="search.php" method="post">
                                  <div class="input-group">
                                      <input type="text" name="search" class="form-control">
                                          <span class="input-group-btn">
                                              <button name="submit" class="btn btn-default" type="submit">
                                                  <span class="glyphicon glyphicon-search"></span>
                                              </button>
                                          </span>
                                  </div>
                                  <!-- /.input-group -->
                              </form>
                          </div>

                          <!-- Login Form -->
                          <div class="well">
                              
<!-- 
                                  <h4>Logged in as </h4>
                                  <a href="includes/logout.php" class='btn btn-warning'>Logout</a>
 -->
                         

                                  <h4>Login</h4>
                                  <form action="includes/login.php" method="post">
                                      <div class="form-group">
                                          <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                      </div>
                                      <div class="input-group">
                                          <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                          <span class="input-group-btn">
                                              <button class="btn btn-primary" type="submit" name="login">Submit</button>
                                          </span>
                                      </div>
                                      <!-- /.input-group -->
                                  </form>


                              
                          </div>

                          


                          <!-- Blog Categories Well -->
                          <div class="well">


                            <?php 
                            $query = "SELECT * FROM categories";
                            $select_categories_sidebar = mysqli_query($connection,$query);

                            ?>


                              <h4>Blog Categories</h4>
                              <div class="row">
                                  <div class="col-lg-12">
                                      <ul class="list-unstyled">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];

                                        echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                                      }
                                      ?> 

                                      </ul>
                                  </div>
                                  <!-- /.col-lg-6 -->
                              </div>
                              <!-- /.row -->
                          </div>






                          <!-- Side Widget Well -->
                         <?php include "widget.php"; ?>

                      </div>