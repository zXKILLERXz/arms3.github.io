<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['document']; ?></p>
          <a><i class="fa fa-circle text-success"></i> En Línea</a>
        </div><br><br>
      </div>
      <?php
          if($user['position_id'] == 1){
      ?>
                <ul class="sidebar-menu" data-widget="tree">
                  <li class="header">REPORTES</li>
                  <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dash Board</span></a></li>
                  <li class="header"><?php echo $user['position'];?></li>
                  <li class="treeview">
         
                <?php
                  $sql = "SELECT * FROM modules ORDER BY description ASC";
                  $query = $conn->query($sql);
                  while($module = $query->fetch_assoc()){
                ?>
                    <li><a href="<?php echo $module['link'];?>"><i class="<?php echo $module['icon'];?>"></i><span> <?php echo $module['description'];?></span></a></li>
                  
                <?php
                  }            
                ?>
          
        </li>
          <?php
          }
      else{
       
          if($user['position_id'] == 2){
        ?>
                <ul class="sidebar-menu" data-widget="tree">
                  <li class="header">REPORTES</li>
                  <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dash Board</span></a></li>
                  <li class="header"><?php echo $user['position'];?></li>
                  <li class="treeview">
         
                <?php
                  $sql = "SELECT * FROM modules where controller = '2' ORDER BY description ASC";
                  $query = $conn->query($sql);
                  while($module = $query->fetch_assoc()){
                ?>
                    <li><a href="<?php echo $module['link'];?>"><i class="<?php echo $module['icon'];?>"></i><span> <?php echo $module['description'];?></span></a></li>
                  
                <?php
                  }
                            
                ?>
        </li>          
              </ul>
          <?php
          }
          else{
            if($user['position_id'] > 2){
              ?>
                      <ul class="sidebar-menu" data-widget="tree">                        
                        <li class="header"><?php echo $user['position'];?></li>
                        <li class="treeview">
               
                      <?php
                        $sql = "SELECT * FROM modules where controller = '3' ORDER BY description ASC";
                        $query = $conn->query($sql);
                        while($module = $query->fetch_assoc()){
                      ?>
                          <li><a href="<?php echo $module['link'];?>"><i class="<?php echo $module['icon'];?>"></i><span> <?php echo $module['description'];?></span></a></li>
                        
                      <?php
                        }
                                  
                      ?>
              </li>          
                    </ul>
                <?php
                }
                else{
                  ?>
                    <ul class="sidebar-menu" data-widget="tree">
            <li class=""><a href="logout.php"><i class="fa fa-window-close fa-2x"></i><span> <p><i class="fa fa-play"></i> No hay módulos asignados para <br>este tipo de usuario.</p><p><i class="fa fa-play"></i> Se debe comunicar con la <br>coordinación de recursos humanos.</p></span></a></li>
          </ul>
                  <?php
              }
        }
      }
        ?>
        
          
    </section>
    <!-- /.sidebar -->
  </aside>