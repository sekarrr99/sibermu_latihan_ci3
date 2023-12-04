 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
    <?php
        $id_role = $this->session->userdata('id_role');
        $querymenu = "SELECT `user_menu`.`id_menu`, `menu`
        FROM `user_menu`
        JOIN `user_access_menu` ON `user_menu`.`id_menu` = `user_access_menu`.`id_menu`
      WHERE `user_access_menu`.`id_role`= $id_role
      ORDER BY `user_access_menu`.`id_menu`";
      $menu=$this->db->query($querymenu)->result_array();

    ?>
  <ul class="sidebar-nav" id="sidebar-nav">
    <?php foreach ($menu as $m) : ?>
      <?php echo $m['menu']; ?>
      <?php
        $menuid = $m['id_menu'];
        $query_submenu ="SELECT * FROM `user_sub_menu` WHERE `id_menu`=$menuid AND `is_active`= 1";
        $submenu = $this->db->query($query_submenu)->result_array();
      ?>

      <?php foreach ($submenu as $sm): ?>
      <li class="nav-item">
        <a href="<?php echo base_url($sm['url']); ?>" class="nav-link">
          <i class="<?php echo base_url($sm['icon']); ?>"></i>
          <span><?= $sm['title']; ?></span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php endforeach; ?>

    <?php endforeach; ?>

  </ul>

</aside><!-- End Sidebar-->