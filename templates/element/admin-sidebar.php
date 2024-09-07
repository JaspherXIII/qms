<aside class="main-sidebar sidebar-dark-danger elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link d-flex flex-column align-items-center">
  <img src="<?= $this->Url->webroot('logo.png') ?>" alt="Logo" height="100">
  <span class="brand-text font-weight-light mt-1" style="font-size: 24px;">Northeastern College</span>
  <span class="brand-text font-weight-light mt-1" style="font-size: 16px;">Queue Management System</span>
</a>


  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item <?= $this->getRequest()->getParam('controller') == 'Dashboard' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= $this->Url->build('/admin/dashboard') ?>"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        </li>
        <li class="nav-item <?= $this->getRequest()->getParam('controller') == 'Appointments' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= $this->Url->build('/admin/appointments') ?>"><i class="fas fa-calendar-alt mr-2"></i>Appointments</a>
        </li>

        <li class="nav-item <?= $this->getRequest()->getParam('controller') == 'Users' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= $this->Url->build('/admin/users') ?>"><i class="fas fa-users mr-2"></i>Users</a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script>
  // Add event listener to the search form
  document.getElementById('sidebar-search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get the search query
    var searchQuery = document.getElementById('sidebar-search-input').value.toLowerCase();

    // Get all the nav links in the sidebar
    var navLinks = document.querySelectorAll('.nav-link');

    // Loop through the nav links
    navLinks.forEach(function(navLink) {
      var linkText = navLink.innerText.toLowerCase();
      var parentItem = navLink.closest('.nav-item');

      // Check if the link text contains the search query
      if (linkText.includes(searchQuery)) {
        parentItem.style.display = 'block'; // Show the parent item
        navLink.style.display = 'block'; // Show the nav link
      } else {
        parentItem.style.display = 'none'; // Hide the parent item
        navLink.style.display = 'none'; // Hide the nav link
      }
    });
  });
</script>
