<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
            <h1>GES_IM</h1>
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary" id="maListe">
          <li class="nav-item">
            <a
              href="{{ '/'}}"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
          </li>
          <li class="nav-item">
            <a href="{{ route('biens.index') }}">
              <i class="fas fa-layer-group"></i>
              <p>Biens</p>
              {{-- <span class="caret"></span> --}}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('clients.index') }}">
              <i class="fas fa-layer-group"></i>
              <p>Clients</p>
              {{-- <span class="caret"></span> --}}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contrats.index') }}">
              <i class="fas fa-layer-group"></i>
              <p>Contrats</p>
              {{-- <span class="caret"></span> --}}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('transactions.index') }}">
              <i class="fas fa-layer-group"></i>
              <p>Transactions</p>
              {{-- <span class="caret"></span> --}}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script>
    document.getElementById('maListe').addEventListener('click', function(e) {
      if (e.target.tagName === 'li') {
        // Retirer 'active' de tous les li
        const items = this.querySelectorAll('li');
        items.forEach(item => item.classList.remove('active'));
        
        // Ajouter 'active' au li cliqué
        e.target.classList.add('active');
      }
    });
  </script>
