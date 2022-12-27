<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-text mx-3">MENU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Visão Geral</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Cadastro de :</h6>
                <a class="collapse-item" href="/product_register">Produtos</a>
                <a class="collapse-item" href="/user_register">Usuários</a>
                <a class="collapse-item" href="/category_register">Categorias</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Listagem</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Exibir lista de:</h6>
                <a class="collapse-item" href="/product_list">Produtos</a>
                <a class="collapse-item" href="/user_list">Usuários</a>
                <a class="collapse-item" href="/category_list">Categorias</a>
                <a class="collapse-item" href="/sale_list">Vendas</a>
            </div>
        </div>
    </li>
    <!-- Heading -->

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/cart">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Vendas</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-table"></i>
            <span>Relatórios</span></a>
    </li>
    @csrf
    <form action="">
    <li class="nav-item">
        <a class="nav-link" href="tables.html" 
        onclick="event.preventDefault();
        this.closest('form').submit();">
            <i class='bx bxs-exit' ></i>
            <span>Sair</span></a>
    </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    

</ul>