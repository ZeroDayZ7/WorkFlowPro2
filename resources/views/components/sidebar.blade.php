<div class="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <button id="toggleSidebar" class="toggle-btn">
            <span class="arrow">⮞</span>
        </button>
        <ul class="menu">
            <li class="menu-item" data-content="TUTAJ TREŚĆ DASHBOARDU">
                <i class="icon">🏠</i>
                {{-- <span class="menu-text">Dashboard</span> --}}
            </li>
            <li class="menu-item" data-content="TUTAJ TREŚĆ DOKUMENTÓW">
                <i class="icon">📄</i>
                <span class="menu-text">Dokumenty</span>
            </li>
            <li class="menu-item" data-content="TUTAJ TREŚĆ USTAWIEŃ">
                <i class="icon">⚙️</i>
                <span class="menu-text">Ustawienia</span>
            </li>
            <li class="menu-item">
                <i class="icon">
                    <img src="{{ asset('icons/logout.svg') }}" alt="Logout icon">
                </i>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">Wyloguj się</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="content" id="content">
        TUTAJ CONTENT
    </div>
</div>

<style>
    /* Ogólne style */
    .wrapper {
        display: flex;
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        width: 300px;
        transition: width 0.3s;
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 10px;
        position: relative;
    }

    .sidebar.collapsed {
        width: 60px;
    }

    .menu {
        list-style-type: none;
        padding: 0;
    }

    .menu-item {
        display: flex;
        align-items: center;
        padding: 10px;
        cursor: pointer;
    }

    .menu-item .icon {
        margin-right: 15px;
    }

    .menu-item .menu-text {
        transition: opacity 0.3s;
    }

    .sidebar.collapsed .menu-text {
        opacity: 0;
        pointer-events: none;
    }

    /* Przycisk do rozwijania/zamykania */
    .toggle-btn {
        position: absolute;
        top: 10px;
        right: -15px;
        width: 30px;
        height: 30px;
        background-color: #34495e;
        border: none;
        color: #ecf0f1;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .toggle-btn .arrow {
        display: inline-block;
        transform: rotate(0deg);
        transition: transform 0.3s;
    }

    .sidebar.collapsed .toggle-btn .arrow {
        transform: rotate(180deg);
    }

    /* Content */
    .content {
        flex-grow: 1;
        padding: 20px;
        background-color: #ecf0f1;
    }
</style>

<script>
    // Skrypt do zmiany treści w divie .content
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function() {
            const content = this.getAttribute('data-content');
            document.getElementById('content').innerHTML = content;
        });
    });

    document.getElementById('toggleSidebar').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed');
    });





    document.getElementById('toggleSidebar').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed');
    });
</script>
